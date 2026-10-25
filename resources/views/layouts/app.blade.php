<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#101936">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'NEXORA, Institut du Digital : explorez les métiers du numérique et construisez votre avenir.')">
    <title>@yield('title', 'NEXORA — Institut du Digital')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a class="skip-link" href="#main-content">Aller au contenu principal</a>

    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="NEXORA, accueil">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 40 40" fill="none">
                        <path d="M9 29V11l22 18V11" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="31" cy="11" r="3" fill="currentColor" />
                    </svg>
                </span>
                <span class="brand-copy">
                    <strong>NEXORA</strong>
                    <small>INSTITUT DU DIGITAL</small>
                </span>
            </a>

            <details class="nav-menu">
                <summary class="menu-toggle mega-trigger {{ request()->routeIs('filieres*', 'information.*', 'contact*') ? 'is-active' : '' }}">
                    <span>Explorer le site</span>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m7 10 5 5 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    <span class="visually-hidden">Ouvrir le menu des pages NEXORA</span>
                </summary>
                <nav class="mega-menu" aria-label="Toutes les pages NEXORA">
                    <section class="mega-column">
                        <p class="mega-heading">Découvrir</p>
                        <a class="mega-link {{ request()->routeIs('home') ? 'is-active' : '' }}" href="{{ route('home') }}">Accueil <span>01</span></a>
                        <a class="mega-link {{ request()->routeIs('information.institut') ? 'is-active' : '' }}" href="{{ route('information.institut') }}">L’institut <span>02</span></a>
                        <a class="mega-link {{ request()->routeIs('information.pedagogie') ? 'is-active' : '' }}" href="{{ route('information.pedagogie') }}">Pédagogie <span>03</span></a>
                        <a class="mega-link {{ request()->routeIs('information.vie-etudiante') ? 'is-active' : '' }}" href="{{ route('information.vie-etudiante') }}">Vie étudiante <span>04</span></a>
                        <a class="mega-link {{ request()->routeIs('contact*') ? 'is-active' : '' }}" href="{{ route('contact') }}">Contact <span>05</span></a>
                    </section>
                    <section class="mega-column mega-column--programs">
                        <p class="mega-heading">12 filières à explorer <a href="{{ route('filieres') }}">Voir le catalogue ↗</a></p>
                        <a class="mega-link {{ request()->routeIs('filieres.developpement-web-mobile') ? 'is-active' : '' }}" href="{{ route('filieres.developpement-web-mobile') }}">Développement Web & Mobile</a>
                        <a class="mega-link {{ request()->routeIs('filieres.cloud-devops') ? 'is-active' : '' }}" href="{{ route('filieres.cloud-devops') }}">Cloud & DevOps</a>
                        <a class="mega-link {{ request()->routeIs('filieres.intelligence-artificielle') ? 'is-active' : '' }}" href="{{ route('filieres.intelligence-artificielle') }}">Intelligence Artificielle</a>
                        <a class="mega-link {{ request()->routeIs('filieres.cybersecurite') ? 'is-active' : '' }}" href="{{ route('filieres.cybersecurite') }}">Cybersécurité</a>
                        <a class="mega-link {{ request()->routeIs('filieres.data-science-analytics') ? 'is-active' : '' }}" href="{{ route('filieres.data-science-analytics') }}">Data Science & Analytics</a>
                        <a class="mega-link {{ request()->routeIs('filieres.ux-ui-product-design') ? 'is-active' : '' }}" href="{{ route('filieres.ux-ui-product-design') }}">UX/UI & Product Design</a>
                        <a class="mega-link {{ request()->routeIs('filieres.marketing-digital-growth') ? 'is-active' : '' }}" href="{{ route('filieres.marketing-digital-growth') }}">Marketing Digital & Growth</a>
                        <a class="mega-link {{ request()->routeIs('filieres.ecommerce-business-digital') ? 'is-active' : '' }}" href="{{ route('filieres.ecommerce-business-digital') }}">E-commerce & Business Digital</a>
                        <a class="mega-link {{ request()->routeIs('filieres.design-graphique-motion') ? 'is-active' : '' }}" href="{{ route('filieres.design-graphique-motion') }}">Design Graphique & Motion</a>
                        <a class="mega-link {{ request()->routeIs('filieres.game-design-developpement') ? 'is-active' : '' }}" href="{{ route('filieres.game-design-developpement') }}">Game Design & Développement</a>
                        <a class="mega-link {{ request()->routeIs('filieres.iot-systemes-embarques') ? 'is-active' : '' }}" href="{{ route('filieres.iot-systemes-embarques') }}">IoT & Systèmes Embarqués</a>
                        <a class="mega-link {{ request()->routeIs('filieres.blockchain-fintech') ? 'is-active' : '' }}" href="{{ route('filieres.blockchain-fintech') }}">Blockchain & Fintech</a>
                    </section>
                    <section class="mega-column">
                        <p class="mega-heading">Construire son parcours</p>
                        <a class="mega-link {{ request()->routeIs('information.admissions') ? 'is-active' : '' }}" href="{{ route('information.admissions') }}">Admissions & orientation</a>
                        <a class="mega-link {{ request()->routeIs('information.financement') ? 'is-active' : '' }}" href="{{ route('information.financement') }}">Financement · repères</a>
                        <a class="mega-link {{ request()->routeIs('information.alternance') ? 'is-active' : '' }}" href="{{ route('information.alternance') }}">Comprendre l’alternance</a>
                        <a class="mega-link {{ request()->routeIs('information.debouches') ? 'is-active' : '' }}" href="{{ route('information.debouches') }}">Métiers & perspectives</a>
                        <a class="mega-link {{ request()->routeIs('information.ressources') ? 'is-active' : '' }}" href="{{ route('information.ressources') }}">Ressources pratiques</a>
                        <p class="mega-note">Site fictif de démonstration pédagogique · Casablanca</p>
                    </section>
                </nav>
            </details>

            <a class="header-cta" href="{{ route('contact') }}">
                Échanger avec nous
                <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 10h11m-4-4 4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </header>

    <main id="main-content" tabindex="-1">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <div class="footer-brand-block">
                <a class="brand brand--footer" href="{{ route('home') }}" aria-label="NEXORA, retour à l’accueil">
                    <span class="brand-mark" aria-hidden="true">
                        <svg viewBox="0 0 40 40" fill="none">
                            <path d="M9 29V11l22 18V11" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="31" cy="11" r="3" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="brand-copy">
                        <strong>NEXORA</strong>
                        <small>INSTITUT DU DIGITAL</small>
                    </span>
                </a>
                <p>Apprendre, expérimenter et imaginer la suite du numérique.</p>
            </div>

            <div class="footer-links-block">
                <span class="footer-label">Formations</span>
                <a href="{{ route('filieres') }}">Les 12 filières</a>
                <a href="{{ route('filieres.developpement-web-mobile') }}">Développement web</a>
                <a href="{{ route('filieres.cybersecurite') }}">Cybersécurité</a>
                <a href="{{ route('filieres.ux-ui-product-design') }}">UX/UI & design produit</a>
                <a href="{{ route('filieres.intelligence-artificielle') }}">Intelligence artificielle</a>
                <a href="{{ route('filieres.cloud-devops') }}">Cloud & DevOps</a>
            </div>

            <div class="footer-links-block">
                <span class="footer-label">La vie NEXORA</span>
                <a href="{{ route('information.institut') }}">L’institut</a>
                <a href="{{ route('information.pedagogie') }}">Pédagogie</a>
                <a href="{{ route('information.admissions') }}">Admissions</a>
                <a href="{{ route('information.alternance') }}">Alternance</a>
                <a href="{{ route('information.vie-etudiante') }}">Vie étudiante</a>
            </div>

            <div class="footer-links-block">
                <span class="footer-label">Ressources & contact</span>
                <a href="{{ route('information.financement') }}">Financement</a>
                <a href="{{ route('information.debouches') }}">Métiers & perspectives</a>
                <a href="{{ route('information.ressources') }}">Guides pratiques</a>
                <a href="{{ route('contact') }}">Nous contacter</a>
                <p class="footer-note-block">NEXORA est un institut fictif. Les contenus, coordonnées et parcours sont illustratifs.</p>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>© {{ date('Y') }} NEXORA</span>
            <span>Projet pédagogique · Tous les contenus sont illustratifs</span>
        </div>
    </footer>
    @include('partials.copilot')
    <script src="{{ asset('js/copilot.js') }}" defer></script>
</body>
</html>
