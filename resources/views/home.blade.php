@extends('layouts.app')

@section('title', 'Accueil — NEXORA, Institut du Digital')
@section('meta_description', 'Découvrez les filières digitales de NEXORA et une approche pédagogique axée sur la pratique, les projets et les compétences numériques.')

@section('content')
    <section class="hero">
        <div class="hero-grid-pattern" aria-hidden="true"></div>
        <div class="container hero-content">
            <div class="hero-copy">
                <p class="eyebrow eyebrow--light"><span class="eyebrow-dot"></span> Le numérique, en pratique</p>
                <h1>Construisez votre avenir <span>dans le digital.</span></h1>
                <p class="hero-description">Explorez les métiers du numérique, développez des compétences concrètes et donnez forme aux idées de demain.</p>
                <div class="hero-actions">
                    <a class="button button--cyan" href="{{ route('filieres') }}">
                        Découvrir nos filières
                        <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h11m-4-4 4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    </a>
                    <a class="button button--outline-light" href="{{ route('contact') }}">Nous contacter</a>
                </div>
                <div class="hero-caption">
                    <span class="caption-line" aria-hidden="true"></span>
                    <span>Des parcours pensés pour apprendre en faisant</span>
                </div>
            </div>

            <div class="hero-visual" aria-hidden="true">
                <div class="visual-orbit visual-orbit--outer"></div>
                <div class="visual-orbit visual-orbit--inner"></div>
                <span class="orbit-point orbit-point--one"></span>
                <span class="orbit-point orbit-point--two"></span>
                <span class="orbit-point orbit-point--three"></span>

                <div class="visual-card visual-card--main">
                    <div class="code-window-top">
                        <span class="window-dots"><i></i><i></i><i></i></span>
                        <span>atelier / projet-01</span>
                        <span class="window-lock">
                            <svg viewBox="0 0 16 16" fill="none"><path d="M4.5 7V5.5a3.5 3.5 0 0 1 7 0V7M3.5 7h9v6h-9V7Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </span>
                    </div>
                    <div class="code-window-body">
                        <div class="code-row"><span class="line-no">01</span><code><b>const</b> idee = <em>"curiosité"</em>;</code></div>
                        <div class="code-row"><span class="line-no">02</span><code><b>const</b> pratique = <em>true</em>;</code></div>
                        <div class="code-row"><span class="line-no">03</span><code><strong>construire</strong>(idee, pratique);</code></div>
                        <div class="code-row code-row--empty"><span class="line-no">04</span><code><span class="cursor-block"></span></code></div>
                    </div>
                    <div class="code-window-bottom">
                        <span><i class="status-dot"></i> Atelier en cours</span>
                        <span>01 / 04</span>
                    </div>
                </div>

                <div class="visual-card visual-card--floating">
                    <span class="floating-icon">
                        <svg viewBox="0 0 24 24" fill="none"><path d="m12 3 1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8L12 3Zm6.5 12 1 2.5L22 18.5l-2.5 1-1 2.5-1-2.5-2.5-1 2.5-1 1-2.5Z" stroke="currentColor" stroke-width="1.35" stroke-linejoin="round" /></svg>
                    </span>
                    <span><strong>Idée → prototype</strong><small>Le prochain projet commence ici</small></span>
                    <span class="floating-arrow">↗</span>
                </div>

                <div class="visual-label visual-label--top"><span class="label-square"></span> Imaginer</div>
                <div class="visual-label visual-label--bottom"><span class="label-square label-square--cyan"></span> Construire</div>
            </div>
        </div>
        <div class="hero-bottom-rule" aria-hidden="true"></div>
    </section>

    <section class="section section-features" aria-labelledby="features-title">
        <div class="container">
            <div class="section-heading section-heading--split">
                <div>
                    <p class="eyebrow"><span class="eyebrow-dot"></span> L’expérience NEXORA</p>
                    <h2 id="features-title">Apprendre avec les mains.<br><span>Progresser avec confiance.</span></h2>
                </div>
                <p class="section-intro">Le digital évolue vite. Une approche active aide à comprendre les outils, à résoudre de vrais problèmes et à trouver son propre chemin.</p>
            </div>

            <div class="feature-grid">
                <article class="feature-card">
                    <span class="feature-number">01</span>
                    <div class="icon-tile icon-tile--violet" aria-hidden="true">
                        <svg viewBox="0 0 28 28" fill="none"><path d="m10 8-6 6 6 6M18 8l6 6-6 6m-3-14-2 16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    </div>
                    <h3>Apprentissage pratique</h3>
                    <p>Comprendre en explorant, en testant et en apprenant de chaque étape.</p>
                    <span class="feature-card-line" aria-hidden="true"></span>
                </article>

                <article class="feature-card">
                    <span class="feature-number">02</span>
                    <div class="icon-tile icon-tile--cyan" aria-hidden="true">
                        <svg viewBox="0 0 28 28" fill="none"><path d="M14 3.5v5M14 19.5v5M3.5 14h5m11 0h5M6.6 6.6l3.5 3.5m7.8 7.8 3.5 3.5m0-14.8-3.5 3.5m-7.8 7.8-3.5 3.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><circle cx="14" cy="14" r="4.2" stroke="currentColor" stroke-width="1.7"/></svg>
                    </div>
                    <h3>Compétences recherchées</h3>
                    <p>Se familiariser avec les outils et les méthodes du monde numérique.</p>
                    <span class="feature-card-line" aria-hidden="true"></span>
                </article>

                <article class="feature-card">
                    <span class="feature-number">03</span>
                    <div class="icon-tile icon-tile--navy" aria-hidden="true">
                        <svg viewBox="0 0 28 28" fill="none"><rect x="4" y="5" width="20" height="15" rx="2.5" stroke="currentColor" stroke-width="1.7"/><path d="M10 24h8m-4-4v4m-5-11 3 3 6-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3>Projets concrets</h3>
                    <p>Transformer une idée en réalisation et valoriser chaque étape du parcours.</p>
                    <span class="feature-card-line" aria-hidden="true"></span>
                </article>
            </div>
        </div>
    </section>

    <section class="stats-band" aria-labelledby="stats-title">
        <div class="container stats-layout">
            <div class="stats-intro">
                <p class="eyebrow eyebrow--light"><span class="eyebrow-dot"></span> En un coup d’œil</p>
                <h2 id="stats-title">Un terrain de jeu<br>pour les idées.</h2>
                <p>Les métiers du digital sont multiples. Commencez par explorer, puis choisissez la direction qui vous ressemble.</p>
            </div>
            <div class="stats-list">
                <div class="stat-item"><strong>12</strong><span>filières à découvrir</span></div>
                <div class="stat-item"><strong>03</strong><span>façons d’apprendre</span></div>
                <div class="stat-item"><strong>∞</strong><span>idées à expérimenter</span></div>
            </div>
            <p class="stats-disclaimer">Repères illustratifs pour cette maquette pédagogique, sans données institutionnelles.</p>
        </div>
        <div class="stats-accent" aria-hidden="true"></div>
    </section>

    <section class="section section-portal" aria-labelledby="portal-title">
        <div class="container">
            <div class="section-heading section-heading--split">
                <div><p class="eyebrow"><span class="eyebrow-dot"></span> Bienvenue chez NEXORA</p><h2 id="portal-title">Un institut, <span>mille façons d’explorer.</span></h2></div>
                <p class="section-intro">Découvrez les coulisses de l’institut, les repères pour construire votre parcours et les ressources pour nourrir vos idées.</p>
            </div>
            <div class="portal-grid">
                <a class="portal-card portal-card--large" href="{{ route('information.institut') }}"><span>01 · L’INSTITUT</span><strong>La vision NEXORA</strong><p>Curiosité, pratique et projets utiles au quotidien.</p><i aria-hidden="true">↗</i></a>
                <a class="portal-card" href="{{ route('information.pedagogie') }}"><span>02 · APPRENDRE</span><strong>Notre pédagogie</strong><p>Découvrir, prototyper et améliorer.</p><i aria-hidden="true">↗</i></a>
                <a class="portal-card" href="{{ route('information.admissions') }}"><span>03 · S’ORIENTER</span><strong>Admissions & repères</strong><p>Un parcours d’orientation illustratif.</p><i aria-hidden="true">↗</i></a>
                <a class="portal-card" href="{{ route('information.financement') }}"><span>04 · PRÉPARER</span><strong>Financement</strong><p>Des questions utiles pour planifier son budget.</p><i aria-hidden="true">↗</i></a>
                <a class="portal-card" href="{{ route('information.alternance') }}"><span>05 · EXPÉRIMENTER</span><strong>L’alternance</strong><p>Comprendre les rythmes et les rôles.</p><i aria-hidden="true">↗</i></a>
                <a class="portal-card portal-card--large" href="{{ route('information.vie-etudiante') }}"><span>06 · PARTAGER</span><strong>La vie étudiante</strong><p>Des clubs, ateliers et projets imaginés pour le campus NEXORA.</p><i aria-hidden="true">↗</i></a>
                <a class="portal-card" href="{{ route('information.debouches') }}"><span>07 · SE PROJETER</span><strong>Métiers & perspectives</strong><p>Des rôles numériques à découvrir.</p><i aria-hidden="true">↗</i></a>
                <a class="portal-card" href="{{ route('information.ressources') }}"><span>08 · S’INSPIRER</span><strong>Ressources pratiques</strong><p>Des mini-guides pour démarrer.</p><i aria-hidden="true">↗</i></a>
            </div>
        </div>
    </section>

    <section class="section section-signal" aria-labelledby="signal-title">
        <div class="container">
            <div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-dot"></span> À la une · Filières</p><h2 id="signal-title">Trois univers, <span>trois portes d’entrée.</span></h2></div><a class="text-link" href="{{ route('filieres') }}">Explorer les 12 domaines <span aria-hidden="true">↗</span></a></div>
            <div class="signal-grid">
                <a class="signal-card signal-card--code" href="{{ route('filieres.developpement-web-mobile') }}"><img class="signal-card-art" src="{{ asset('images/fields/developpement-web-mobile.svg') }}" alt="" width="640" height="360" loading="lazy" decoding="async"><span>01 / CRÉER</span><strong>Du premier écran<br>au produit numérique.</strong><i aria-hidden="true">&lt;/&gt;</i></a>
                <a class="signal-card signal-card--data" href="{{ route('filieres.intelligence-artificielle') }}"><img class="signal-card-art" src="{{ asset('images/fields/intelligence-artificielle.svg') }}" alt="" width="640" height="360" loading="lazy" decoding="async"><span>02 / EXPLORER</span><strong>Comprendre les idées<br>derrière l’IA.</strong><i aria-hidden="true">✳</i></a>
                <a class="signal-card signal-card--design" href="{{ route('filieres.ux-ui-product-design') }}"><img class="signal-card-art" src="{{ asset('images/fields/ux-ui-product-design.svg') }}" alt="" width="640" height="360" loading="lazy" decoding="async"><span>03 / IMAGINER</span><strong>Concevoir des usages<br>qui font sens.</strong><i aria-hidden="true">◉</i></a>
            </div>
        </div>
    </section>

    <section class="section section-next-step" aria-labelledby="next-step-title">
        <div class="container next-step-card">
            <div class="next-step-symbol" aria-hidden="true">
                <svg viewBox="0 0 48 48" fill="none"><path d="M10 35V13l28 22V13" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="38" cy="13" r="3" fill="currentColor"/></svg>
            </div>
            <div>
                <p class="eyebrow"><span class="eyebrow-dot"></span> La suite commence par une question</p>
                <h2 id="next-step-title">Quel avenir numérique voulez-vous construire&nbsp;?</h2>
            </div>
            <a class="button button--violet" href="{{ route('contact') }}">Parlons-en <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h11m-4-4 4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg></a>
        </div>
    </section>
@endsection
