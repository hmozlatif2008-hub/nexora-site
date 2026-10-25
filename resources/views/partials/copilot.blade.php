<div class="copilot" data-endpoint="{{ route('copilot.reply', [], false) }}">
    <section class="copilot-panel" id="copilot-panel" aria-labelledby="copilot-title" aria-hidden="true" hidden>
        <header class="copilot-header">
            <div class="copilot-brand-mark" aria-hidden="true">
                <svg viewBox="0 0 40 40" fill="none"><path d="M8 29V11l24 18V11" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><circle cx="32" cy="11" r="3" fill="currentColor"/></svg>
            </div>
            <div class="copilot-heading">
                <p>Votre guide intelligent</p>
                <h2 id="copilot-title">Copilot NEXORA</h2>
                <span class="copilot-online"><i aria-hidden="true"></i> Gemini AI</span>
            </div>
            <div class="copilot-header-actions">
                <button class="copilot-icon-button" type="button" data-copilot-reset aria-label="Nouvelle conversation" title="Nouvelle conversation">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                </button>
                <button class="copilot-icon-button" type="button" data-copilot-close aria-label="Fermer Copilot" title="Fermer">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                </button>
            </div>
        </header>

        <div class="copilot-messages" data-copilot-messages role="log" aria-live="polite" aria-relevant="additions text" aria-label="Conversation avec Copilot">
            <div class="copilot-welcome">
                <span class="copilot-welcome-kicker">Salut, ana Copilot</span>
                <p>نعاونك تكتاشف filières ديال NEXORA، ونشرح ليك أي حاجة فالدجيتال. شنو بغيتي تعرف؟</p>
            </div>
            <div class="copilot-suggestions" aria-label="أسئلة مقترحة">
                <button type="button" data-copilot-prompt="Chno hiya ahsan filière ila kan3jebni design w technology?">نختار filière</button>
                <button type="button" data-copilot-prompt="Explique-moi la cybersécurité simplement">شرح cybersécurité</button>
                <button type="button" data-copilot-prompt="Quelle est la différence entre UX/UI et développement web ?">UX/UI ولا développement</button>
            </div>
        </div>

        <div class="copilot-status" data-copilot-status role="status" aria-live="polite"></div>
        <form class="copilot-form" data-copilot-form>
            <label class="visually-hidden" for="copilot-input">Écrire un message à Copilot</label>
            <textarea id="copilot-input" name="message" rows="1" maxlength="1400" placeholder="Écris ta question ici…" required></textarea>
            <button class="copilot-send" type="submit" aria-label="Envoyer le message">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </form>
        <p class="copilot-disclaimer">Réponses générées par Gemini. NEXORA est un site fictif.</p>
    </section>

    <button class="copilot-launcher" type="button" aria-controls="copilot-panel" aria-expanded="false" aria-label="Ouvrir Copilot NEXORA" data-copilot-open>
        <span class="copilot-launcher-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 2.8 14.2 9.8 21.2 12l-7 2.2-2.2 7-2.2-7-7-2.2 7-2.2L12 2.8Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="m19 2 .9 2.1L22 5l-2.1.9L19 8l-.9-2.1L16 5l2.1-.9L19 2Z" fill="currentColor"/></svg>
        </span>
        <span>Copilot</span>
        <span class="copilot-launcher-dot" aria-hidden="true"></span>
    </button>
</div>
