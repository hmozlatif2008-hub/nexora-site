@extends('layouts.app')

@section('title', $page['eyebrow'].' — NEXORA, Institut du Digital')
@section('meta_description', $page['lead'])

@section('content')
    <section class="info-hero info-hero--{{ $page['tone'] }}">
        <div class="container info-hero-inner">
            <div class="info-hero-copy">
                <p class="eyebrow"><span class="eyebrow-dot"></span> {{ $page['eyebrow'] }}</p>
                <h1>{{ $page['title'] }}</h1>
                <p>{{ $page['lead'] }}</p>
                <div class="info-hero-links"><a class="button button--violet" href="{{ route($page['cta_route']) }}">{{ $page['cta'] }} <span aria-hidden="true">↗</span></a><span>UNE PAGE À EXPLORER · NEXORA</span></div>
            </div>
            <div class="info-hero-emblem" aria-hidden="true"><span>{{ $page['symbol'] }}</span><i></i><b></b></div>
        </div>
        <div class="info-orbit info-orbit--one" aria-hidden="true"></div><div class="info-orbit info-orbit--two" aria-hidden="true"></div>
    </section>

    <section class="section info-highlight-section" aria-label="Repère clé">
        <div class="container info-highlight">
            <span class="info-highlight-mark" aria-hidden="true">N</span>
            <div><p class="eyebrow"><span class="eyebrow-dot"></span> {{ $page['highlight_title'] }}</p><p>{{ $page['highlight'] }}</p></div>
            <span class="info-highlight-index" aria-hidden="true">N / {{ strtoupper(substr($slug, 0, 2)) }}</span>
        </div>
    </section>

    <section class="section info-content-section" aria-labelledby="info-content-title">
        <div class="container">
            <div class="section-heading section-heading--split">
                <div><p class="eyebrow"><span class="eyebrow-dot"></span> {{ $page['layout'] === 'resources' ? 'Le studio des idées' : 'À découvrir' }}</p><h2 id="info-content-title">{{ $page['section_heading'] }} <span>{{ $page['section_focus'] }}</span></h2></div>
                <p class="section-intro">Explorez ces repères à votre rythme, puis poursuivez vers les domaines qui vous parlent le plus.</p>
            </div>

            <div class="info-card-grid info-card-grid--{{ $page['layout'] }}">
                @foreach ($page['cards'] as $index => $card)
                    @if (!empty($card['href']))
                        <a class="info-card info-card--linked" href="{{ route($card['href']) }}">
                    @else
                        <article class="info-card">
                    @endif
                        <div class="info-card-top"><span>{{ $card['number'] }}</span><i aria-hidden="true">{{ !empty($card['href']) ? '↗' : '✳' }}</i></div>
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                        @if (!empty($card['href'])) <span class="info-card-cta">Ouvrir le parcours <span aria-hidden="true">→</span></span> @endif
                    @if (!empty($card['href']))
                        </a>
                    @else
                        </article>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @if (count($page['sections']) > 0)
        <section class="section info-reading-section">
            <div class="container info-reading-layout">
                <div class="info-reading-label"><p class="eyebrow"><span class="eyebrow-dot"></span> Le carnet NEXORA</p><span class="info-reading-stamp" aria-hidden="true">{{ $page['symbol'] }}</span></div>
                <div class="info-reading-copy">
                    @foreach ($page['sections'] as $index => $section)
                        <article class="info-reading-block" id="guide-{{ $index + 1 }}"><span class="info-reading-count">0{{ $index + 1 }}</span><div><h3>{{ $section['title'] }}</h3><p>{{ $section['text'] }}</p></div></article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="info-cta-band">
        <div class="container info-cta-inner"><div><p class="eyebrow eyebrow--light"><span class="eyebrow-dot"></span> Continuez votre exploration</p><h2>Le prochain pas commence ici.</h2></div><a class="button button--cyan" href="{{ route('filieres') }}">Comparer les filières <span aria-hidden="true">↗</span></a></div>
    </section>
@endsection
