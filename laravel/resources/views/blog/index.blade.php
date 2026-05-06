@extends('layouts.app')
@section('title', 'Blog')
@section('meta_desc', 'Articles and thoughts from Allen Carl Odang on Laravel, PHP, Python, and student developer life.')

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <span class="section-tag">// blog</span>
        <h1 class="page-title">My <span class="accent">Thoughts</span></h1>
        <p class="page-sub">Dev learnings, opinions, and student life</p>
    </div>
</section>

<section class="section">
    <div class="section-inner">
        <div class="blog-grid">
            @foreach($posts as $post)
            <article class="blog-card">
                <div class="blog-card-top">
                    <span class="blog-emoji">{{ $post['emoji'] }}</span>
                    <span class="tag">{{ $post['category'] }}</span>
                </div>
                <div class="blog-meta">
                    <span>{{ $post['date'] }}</span>
                    <span>·</span>
                    <span>{{ $post['read_time'] }}</span>
                </div>
                <h3 class="blog-title">
                    <a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a>
                </h3>
                <p class="blog-excerpt">{{ $post['excerpt'] }}</p>
                <div class="blog-tags">
                    @foreach($post['tags'] as $t)
                    <span class="tag tag-sm">#{{ $t }}</span>
                    @endforeach
                </div>
                <a href="{{ route('blog.show', $post['slug']) }}" class="project-link">
                    Read More <span>→</span>
                </a>
            </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
