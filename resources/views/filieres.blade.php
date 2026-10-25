@extends('layouts.app')

@section('title', 'Nos 12 filières — NEXORA, Institut du Digital')
@section('meta_description', 'Explorez les 12 filières numériques de NEXORA : code, cloud, intelligence artificielle, cybersécurité, data, design, marketing et plus encore.')

@section('content')
    <section class="page-intro page-intro--programs">
        <div class="container page-intro-inner">
            <div class="page-intro-copy">
                <p class="eyebrow"><span class="eyebrow-dot"></span> Trouvez votre voie · 12 univers</p>
                <h1>Des idées aux métiers,<br><span>explorez le digital.</span></h1>
                <p>Du code à la création, de la cybersécurité à la data, comparez les domaines qui façonnent notre quotidien et imaginez la suite.</p>
            </div>
            <div class="page-intro-aside" aria-hidden="true">
                <span class="aside-orbit aside-orbit--one"></span>
                <span class="aside-orbit aside-orbit--two"></span>
                <span class="aside-node aside-node--one">12</span>
                <span class="aside-node aside-node--two">06</span>
                <span class="aside-node aside-node--three">03</span>
                <span class="aside-cross">+</span>
            </div>
        </div>
    </section>

    <section class="section programs-section" aria-labelledby="programs-title">
        <div class="container">
            <div class="section-heading section-heading--programs">
                <div>
                    <p class="eyebrow"><span class="eyebrow-dot"></span> Le catalogue NEXORA</p>
                    <h2 id="programs-title">Quel domaine vous <span>intrigue&nbsp;?</span></h2>
                </div>
                <p class="section-intro">Chaque carte ouvre une page dédiée avec des sujets à explorer, une idée de projet et des métiers à découvrir.</p>
            </div>

            <div class="program-grid">
                @foreach ($filieres as $index => $filiere)
                    <article class="program-card">
                        <div class="program-card-media">
                            <img src="{{ asset('images/fields/'.$filiere['slug'].'.svg') }}" alt="" width="640" height="360" loading="lazy" decoding="async">
                        </div>
                        <div class="program-card-topline">
                            <span class="program-index">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="program-category">{{ $filiere['category'] }}</span>
                        </div>
                        <div class="program-icon" aria-hidden="true"><span>{{ $filiere['symbol'] }}</span></div>
                        <h3><a class="program-title-link" href="{{ route('filieres.'.$filiere['slug']) }}">{{ $filiere['title'] }}</a></h3>
                        <p>{{ $filiere['description'] }}</p>
                        <div class="program-card-footer">
                            <a class="program-explore-link" href="{{ route('filieres.'.$filiere['slug']) }}">Explorer cette filière <span aria-hidden="true">↗</span></a>
                            <span class="program-card-footer-mark" aria-hidden="true">NEXORA / {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                    </article>
                @endforeach
            </div>

            <p class="illustrative-note"><span class="note-mark" aria-hidden="true">i</span> Les filières et les métiers cités sont des exemples pédagogiques. Ils ne constituent pas une offre de formation ou une promesse d’emploi réelle.</p>
        </div>
    </section>

    <section class="programs-cta">
        <div class="container programs-cta-inner">
            <div>
                <p class="eyebrow eyebrow--light"><span class="eyebrow-dot"></span> Une question&nbsp;?</p>
                <h2>Échangeons autour de votre projet.</h2>
            </div>
            <a class="button button--cyan" href="{{ route('contact') }}">Nous contacter <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h11m-4-4 4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
    </section>
@endsection
