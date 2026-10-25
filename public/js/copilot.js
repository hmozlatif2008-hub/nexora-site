(() => {
    const root = document.querySelector('.copilot');
    if (!root) return;

    const panel = root.querySelector('#copilot-panel');
    const launcher = root.querySelector('[data-copilot-open]');
    const closeButton = root.querySelector('[data-copilot-close]');
    const resetButton = root.querySelector('[data-copilot-reset]');
    const messages = root.querySelector('[data-copilot-messages]');
    const status = root.querySelector('[data-copilot-status]');
    const form = root.querySelector('[data-copilot-form]');
    const input = root.querySelector('#copilot-input');
    const sendButton = root.querySelector('.copilot-send');
    const csrf = document.querySelector('meta[name="csrf-token"]')?.content;
    let busy = false;

    function setOpen(open) {
        panel.hidden = !open;
        panel.setAttribute('aria-hidden', String(!open));
        launcher.setAttribute('aria-expanded', String(open));
        launcher.setAttribute('aria-label', open ? 'Fermer Copilot NEXORA' : 'Ouvrir Copilot NEXORA');
        if (open) input.focus();
        else launcher.focus();
    }

    function addMessage(text, kind) {
        const bubble = document.createElement('div');
        bubble.className = `copilot-message copilot-message--${kind}`;
        bubble.textContent = text;
        messages.append(bubble);
        messages.scrollTop = messages.scrollHeight;
        return bubble;
    }

    function setBusy(value) {
        busy = value;
        input.disabled = value;
        sendButton.disabled = value;
        resetButton.disabled = value;
        root.classList.toggle('is-thinking', value);
        status.textContent = value ? 'Copilot كيقلب على أحسن جواب…' : '';
    }

    async function sendMessage(value) {
        const message = value.trim();
        if (!message || busy) return;

        addMessage(message, 'user');
        input.value = '';
        input.style.height = 'auto';
        setBusy(true);

        try {
            const response = await fetch(root.dataset.endpoint, {
                method: 'POST',
                credentials: 'same-origin',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf || '',
                },
                body: JSON.stringify({ message }),
            });
            const payload = await response.json().catch(() => ({}));
            if (!response.ok) {
                const validationMessage = payload.errors?.message?.[0];
                throw new Error(validationMessage || payload.message || 'وقع مشكل. عاود جرّب من بعد.');
            }
            addMessage(payload.reply || 'ما وصلنيش جواب واضح. جرب تسول بطريقة أخرى.', 'assistant');
        } catch (error) {
            addMessage(error.message || 'ما قدرش Copilot يجاوب دابا.', 'error');
        } finally {
            setBusy(false);
            input.focus();
        }
    }

    launcher.addEventListener('click', () => setOpen(panel.hidden));
    closeButton.addEventListener('click', () => setOpen(false));

    resetButton.addEventListener('click', async () => {
        if (busy) return;
        try {
            await fetch(root.dataset.endpoint, {
                method: 'POST',
                credentials: 'same-origin',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf || '',
                },
                body: JSON.stringify({ reset: true }),
            });
        } catch (_) {
            // A new local conversation can still start if the reset request is unavailable.
        }
        messages.replaceChildren();
        const welcome = document.createElement('div');
        welcome.className = 'copilot-welcome';
        const kicker = document.createElement('span');
        kicker.className = 'copilot-welcome-kicker';
        kicker.textContent = 'Nouvelle conversation';
        const text = document.createElement('p');
        text.textContent = 'مرحبا من جديد! شنو نقدر نعاونك فيه؟';
        welcome.append(kicker, text);
        messages.append(welcome);
        input.focus();
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        sendMessage(input.value);
    });

    input.addEventListener('input', () => {
        input.style.height = 'auto';
        input.style.height = `${Math.min(input.scrollHeight, 120)}px`;
    });

    input.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' && !event.shiftKey) {
            event.preventDefault();
            form.requestSubmit();
        }
    });

    root.querySelectorAll('[data-copilot-prompt]').forEach((button) => {
        button.addEventListener('click', () => sendMessage(button.dataset.copilotPrompt || ''));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !panel.hidden) setOpen(false);
    });
})();
