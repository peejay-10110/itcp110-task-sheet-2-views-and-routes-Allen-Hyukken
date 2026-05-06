@extends('layouts.app')
@section('title', 'Skills')
@section('meta_desc', 'Technical skills of Allen Carl Odang — PHP, Laravel, Python, JavaScript, MySQL, and more.')

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <span class="section-tag">// skills</span>
        <h1 class="page-title">What I <span class="accent">Know</span></h1>
        <p class="page-sub">Tools, technologies, and frameworks I work with</p>
    </div>
</section>

<section class="section">
    <div class="section-inner">
        @foreach($skills as $category => $items)
        <div class="skill-category">
            <h3 class="skill-category-title">
                <span class="accent">›</span> {{ $category }}
            </h3>
            <div class="skills-grid">
                @foreach($items as $skill)
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-icon">{{ $skill['icon'] }}</span>
                        <span class="skill-name">{{ $skill['name'] }}</span>
                        <span class="skill-pct">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" style="width: {{ $skill['level'] }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- Soft Skills --}}
<section class="section section-alt">
    <div class="section-inner">
        <div class="section-header">
            <span class="section-tag">// soft skills</span>
            <h2 class="section-title">Beyond the Code</h2>
        </div>
        <div class="soft-skills-wrap">
            @foreach($soft_skills as $s)
            <div class="soft-chip">{{ $s }}</div>
            @endforeach
        </div>
    </div>
</section>

@endsection
