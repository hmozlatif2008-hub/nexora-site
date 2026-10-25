@extends('layouts.app')

@section('title', $filiere['title'].' — NEXORA')
@section('meta_description', $filiere['description'])

@section('content')
    <section class="detail-hero">
        <div class="container detail-hero-inner">
            <div class="detail-copy">
                <a class="back-link" href="{{ route('filieres') }}">← Toutes les filières</a>
                <p class="eyebrow"><span class="eyebrow-dot"></span> {{ $filiere['category'] }}</p>
                <h1>{{ $filiere['title'] }}<span>.</span></h1>
                <p>{{ $filiere['intro'] }}</p>
                <div class="detail-actions">
                    <a class="button button--violet" href="{{ route('contact') }}">Parler de ce domaine <span aria-hidden="true">↗</span></a>
                    <span class="detail-counter">PARCOURS / {{ strtoupper($filiere['slug']) }}</span>
                </div>
            </div>
            <figure class="detail-art">
                <img src="{{ asset('images/fields/'.$filiere['slug'].'.svg') }}" alt="Illustration du domaine {{ $filiere['title'] }}" width="640" height="360" fetchpriority="high">
                <figcaption>NEXORA · {{ $filiere['category'] }}</figcaption>
            </figure>
        </div>
    </section>

    <section class="section detail-overview" aria-labelledby="overview-title">
        <div class="container">
            <div class="section-heading section-heading--split">
                <div><p class="eyebrow"><span class="eyebrow-dot"></span> Ce que vous allez explorer</p><h2 id="overview-title">Un domaine, <span>plusieurs angles.</span></h2></div>
                <p class="section-intro">Les sujets ci-dessous donnent une première carte du territoire. Le programme est présenté ici à titre d’exemple pédagogique.</p>
            </div>
            <div class="detail-topic-grid">
                @foreach ($filiere['modules'] as $index => $module)
                    <article class="detail-topic-card">
                        <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $module }}</h3>
                        <i aria-hidden="true">↗</i>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="detail-project-band">
        <div class="container detail-project-inner">
            <div><p class="eyebrow eyebrow--light"><span class="eyebrow-dot"></span> Atelier de découverte</p><h2>Une idée à mettre en pratique.</h2><p>{{ $filiere['project'] }}</p></div>
            <div class="detail-project-stamp" aria-hidden="true"><span>N</span><b>FAIRE<br>POUR<br>COMPRENDRE</b></div>
        </div>
    </section>

    <section class="section detail-careers" aria-labelledby="careers-title">
        <div class="container detail-careers-layout">
            <div><p class="eyebrow"><span class="eyebrow-dot"></span> Des pistes à explorer</p><h2 id="careers-title">Et après&nbsp;?</h2><p class="section-intro">Quelques rôles liés à cet univers. Les intitulés et perspectives dépendent des parcours et du marché du travail.</p></div>
            <div class="career-chip-grid">
                @foreach ($filiere['careers'] as $index => $career)
                    <div class="career-chip"><span>0{{ $index + 1 }}</span>{{ $career }}</div>
                @endforeach
            </div>
        </div>
        <div class="container"><p class="illustrative-note"><span class="note-mark" aria-hidden="true">i</span> NEXORA est fictif. Cette page ne décrit pas un diplôme, un cursus certifié ni une promesse d’insertion.</p></div>
    </section>

    <section class="section related-programs" aria-labelledby="related-title">
        <div class="container">
            <div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-dot"></span> À explorer ensuite</p><h2 id="related-title">D’autres univers <span>vous attendent.</span></h2></div><a class="text-link" href="{{ route('filieres') }}">Voir les 12 filières <span aria-hidden="true">↗</span></a></div>
            <div class="related-grid">
                @foreach ($suggestions as $suggestion)
                    <a class="related-card" href="{{ route('filieres.'.$suggestion['slug']) }}"><span>{{ $suggestion['category'] }}</span><strong>{{ $suggestion['title'] }}</strong><i aria-hidden="true">↗</i></a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
