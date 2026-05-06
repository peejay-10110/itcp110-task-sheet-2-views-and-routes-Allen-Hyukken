@extends('layouts.app')

@section('title', 'Home')
@section('meta_desc', 'Allen Carl Odang — BTVTEICT Computer Programming student at TUP Taguig. Full-stack developer, problem solver.')

@section('content')

{{-- ── HERO ── --}}
<section class="hero">
    <div class="hero-bg-grid" aria-hidden="true"></div>
    <div class="hero-glow" aria-hidden="true"></div>

    <div class="hero-inner">
        <div class="hero-badge">
            <span class="badge-dot"></span>
            Available for internship &amp; freelance
        </div>

        <h1 class="hero-title">
            Hey, I'm <br>
            <span class="hero-name">Allen Carl</span><br>
            <span class="hero-alias">aka <em>Hyukken</em></span>
        </h1>

        <p class="hero-desc">
            BTVTEICT student at <strong>TUP Taguig</strong>, majoring in Computer Programming.
            I build web apps, desktop tools, and write about learning to code.
        </p>

        <div class="hero-cta">
            <a href="{{ route('projects.index') }}" class="btn btn-primary">View My Projects</a>
            <a href="{{ route('about') }}"          class="btn btn-ghost">About Me</a>
        </div>

        <div class="hero-scroll-hint" aria-hidden="true">
            <span>scroll</span>
            <div class="scroll-line"></div>
        </div>
    </div>

    <div class="hero-terminal" aria-hidden="true">
        <div class="terminal-bar">
            <span class="dot red"></span>
            <span class="dot yellow"></span>
            <span class="dot green"></span>
            <span class="terminal-title">~/hyukken</span>
        </div>
        <div class="terminal-body">
            <p><span class="t-prompt">$</span> whoami</p>
            <p class="t-output">allen_carl_odang</p>
            <p><span class="t-prompt">$</span> cat info.txt</p>
            <p class="t-output">Role    : CS Student + Developer</p>
            <p class="t-output">School  : TUP Taguig</p>
            <p class="t-output">Major   : Computer Programming</p>
            <p class="t-output">Stack   : PHP, Laravel, Python, JS</p>
            <p><span class="t-prompt">$</span> <span class="t-cursor">█</span></p>
        </div>
    </div>
</section>

{{-- ── STATS ── --}}
<section class="stats-section">
    <div class="section-inner">
        <div class="stats-grid">
            @foreach($stats as $stat)
            <div class="stat-card">
                <div class="stat-value">{{ $stat['value'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── FEATURED PROJECTS ── --}}
<section class="section">
    <div class="section-inner">
        <div class="section-header">
            <span class="section-tag">// work</span>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-sub">A selection of things I've built</p>
        </div>

        <div class="projects-grid">
            @foreach($featured_projects as $project)
            <div class="project-card">
                <div class="project-icon">{{ $project['icon'] }}</div>
                <h3 class="project-title">{{ $project['title'] }}</h3>
                <p class="project-desc">{{ $project['description'] }}</p>
                <div class="project-tags">
                    @foreach($project['tech'] as $t)
                    <span class="tag">{{ $t }}</span>
                    @endforeach
                </div>
                <a href="{{ route('projects.show', $project['id']) }}" class="project-link">
                    View Details <span>→</span>
                </a>
            </div>
            @endforeach
        </div>

        <div class="section-cta">
            <a href="{{ route('projects.index') }}" class="btn btn-outline">See All Projects</a>
        </div>
    </div>
</section>

{{-- ── CTA BAND ── --}}
<section class="cta-band">
    <div class="section-inner cta-inner">
        <div>
            <h2>Let's build something together.</h2>
            <p>Open to internships, freelance projects, and collaborations.</p>
        </div>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary">Get In Touch</a>
            <a href="{{ route('resume') }}"  class="btn btn-ghost">Download CV</a>
        </div>
    </div>
</section>

@endsection
