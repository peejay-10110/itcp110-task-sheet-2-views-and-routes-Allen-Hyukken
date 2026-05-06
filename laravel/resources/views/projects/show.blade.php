@extends('layouts.app')
@section('title', $project['title'])
@section('meta_desc', $project['description'])

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <a href="{{ route('projects.index') }}" class="back-link">← Back to Projects</a>
        <div class="project-detail-header">
            <span class="project-icon-lg">{{ $project['icon'] }}</span>
            <div>
                <span class="section-tag">// {{ $project['category'] }} — {{ $project['year'] }}</span>
                <h1 class="page-title">{{ $project['title'] }}</h1>
                <span class="tag tag-status {{ $project['status'] === 'Completed' ? 'tag-done' : 'tag-wip' }}">
                    {{ $project['status'] }}
                </span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-inner project-detail-grid">

        <div class="project-detail-main">
            <h3>About this Project</h3>
            <p>{{ $project['long_desc'] }}</p>

            <h3 style="margin-top:2rem;">Key Features</h3>
            <ul class="feature-list">
                @foreach($project['features'] as $feature)
                <li><span class="accent">▸</span> {{ $feature }}</li>
                @endforeach
            </ul>
        </div>

        <aside class="project-detail-sidebar">
            <div class="sidebar-card">
                <h4>Tech Stack</h4>
                <div class="project-tags" style="gap:.5rem;">
                    @foreach($project['tech'] as $t)
                    <span class="tag tag-lg">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            <div class="sidebar-card">
                <h4>Details</h4>
                <ul class="detail-list">
                    <li><span>Category</span> {{ $project['category'] }}</li>
                    <li><span>Year</span>     {{ $project['year'] }}</li>
                    <li><span>Status</span>   {{ $project['status'] }}</li>
                </ul>
            </div>

            <a href="{{ route('projects.index') }}" class="btn btn-outline" style="width:100%;text-align:center;">
                ← All Projects
            </a>
        </aside>
    </div>
</section>

@if(!empty($related))
<section class="section section-alt">
    <div class="section-inner">
        <h3 class="section-title">Related Projects</h3>
        <div class="projects-grid">
            @foreach($related as $rp)
            <div class="project-card">
                <span class="project-icon">{{ $rp['icon'] }}</span>
                <h3 class="project-title">{{ $rp['title'] }}</h3>
                <p class="project-desc">{{ $rp['description'] }}</p>
                <div class="project-tags">
                    @foreach($rp['tech'] as $t)
                    <span class="tag">{{ $t }}</span>
                    @endforeach
                </div>
                <a href="{{ route('projects.show', $rp['id']) }}" class="project-link">
                    View Details <span>→</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
