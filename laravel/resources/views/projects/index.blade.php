@extends('layouts.app')
@section('title', 'Projects')
@section('meta_desc', 'Browse projects by Allen Carl Odang — web apps, desktop apps, and more.')

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <span class="section-tag">// projects</span>
        <h1 class="page-title">My <span class="accent">Work</span></h1>
        <p class="page-sub">Things I've built, broken, and fixed</p>
    </div>
</section>

<section class="section">
    <div class="section-inner">

        {{-- Filter --}}
        <div class="filter-bar">
            <a href="{{ route('projects.index') }}"
               class="filter-btn {{ $filter === 'All' ? 'active' : '' }}">All</a>
            @foreach($categories as $cat)
            <a href="{{ route('projects.index', ['category' => $cat]) }}"
               class="filter-btn {{ $filter === $cat ? 'active' : '' }}">{{ $cat }}</a>
            @endforeach
        </div>

        <div class="projects-grid">
            @forelse($projects as $project)
            <div class="project-card">
                <div class="project-card-top">
                    <span class="project-icon">{{ $project['icon'] }}</span>
                    <span class="tag tag-status {{ $project['status'] === 'Completed' ? 'tag-done' : 'tag-wip' }}">
                        {{ $project['status'] }}
                    </span>
                </div>
                <span class="project-year">{{ $project['year'] }}</span>
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
            @empty
            <div class="empty-state">
                <p>No projects found in this category.</p>
                <a href="{{ route('projects.index') }}" class="btn btn-ghost btn-sm">Show All</a>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection
