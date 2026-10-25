@extends('layouts.app')

@section('title', 'Contact — NEXORA, Institut du Digital')
@section('meta_description', 'Contactez NEXORA pour échanger autour de votre projet et des parcours numériques présentés dans cette maquette pédagogique.')

@section('content')
    <section class="contact-section">
        <div class="container contact-layout">
            <aside class="contact-panel">
                <p class="eyebrow eyebrow--light"><span class="eyebrow-dot"></span> Faisons connaissance</p>
                <h1>Une idée en tête&nbsp;?<br><span>On vous écoute.</span></h1>
                <p class="contact-lead">Une question sur les filières ou simplement envie d’échanger&nbsp;? Écrivez-nous, nous serons ravis de vous orienter.</p>

                <div class="contact-details">
                    <div class="contact-detail">
                        <span class="contact-detail-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="5" width="17" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="m4.5 7 7.5 5.5L19.5 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span><small>E-mail exemple</small><a href="mailto:contact@nexora.example">contact@nexora.example</a></span>
                    </div>
                    <div class="contact-detail">
                        <span class="contact-detail-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M7.2 3.8h3.1l1.5 4.3-2 1.6a15 15 0 0 0 4.5 4.5l1.6-2 4.3 1.5v3.1a2 2 0 0 1-2.2 2A15.8 15.8 0 0 1 5.2 6a2 2 0 0 1 2-2.2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span><small>Téléphone exemple</small><a href="tel:+212520000000">+212 5 20 00 00 00</a></span>
                    </div>
                    <div class="contact-detail">
                        <span class="contact-detail-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.5"/></svg>
                        </span>
                        <span><small>Adresse exemple</small><span>Casablanca, Maroc</span></span>
                    </div>
                </div>

                <p class="contact-example-note">Ces coordonnées sont fictives et servent uniquement d’exemple pour l’exercice.</p>
                <div class="contact-decoration" aria-hidden="true"><span></span><span></span><span></span><i></i></div>
            </aside>

            <div class="contact-form-card">
                <div class="form-heading">
                    <p class="eyebrow"><span class="eyebrow-dot"></span> Votre message</p>
                    <h2>Parlons de la suite.</h2>
                    <p>Les champs marqués d’un astérisque sont obligatoires.</p>
                </div>

                @if (session('contact_status'))
                    <div class="form-notice" role="status">{{ session('contact_status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="form-errors" role="alert" aria-labelledby="form-errors-title">
                        <strong id="form-errors-title">Vérifiez les champs suivants&nbsp;:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-field">
                        <label for="name">Nom <span aria-hidden="true">*</span></label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" maxlength="120" required aria-describedby="name-hint @if ($errors->has('name')) name-error @endif">
                        <span class="visually-hidden" id="name-hint">Entrez votre nom.</span>
                        @error('name') <p class="field-error" id="name-error">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-field">
                        <label for="email">Adresse e-mail <span aria-hidden="true">*</span></label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" maxlength="190" required aria-describedby="email-hint @if ($errors->has('email')) email-error @endif">
                        <span class="visually-hidden" id="email-hint">Entrez une adresse e-mail valide.</span>
                        @error('email') <p class="field-error" id="email-error">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-field">
                        <label for="message">Votre message <span aria-hidden="true">*</span></label>
                        <textarea id="message" name="message" rows="5" minlength="10" maxlength="2000" required aria-describedby="message-hint @if ($errors->has('message')) message-error @endif">{{ old('message') }}</textarea>
                        <span class="field-hint" id="message-hint">Décrivez votre question en quelques mots (10 caractères minimum).</span>
                        @error('message') <p class="field-error" id="message-error">{{ $message }}</p> @enderror
                    </div>

                    <button class="button button--violet button--submit" type="submit">
                        Vérifier le formulaire
                        <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h11m-4-4 4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    </button>
                    <p class="form-disclaimer">Formulaire de démonstration&nbsp;: aucune donnée n’est envoyée par e-mail ni enregistrée.</p>
                </form>
            </div>
        </div>
    </section>
@endsection
