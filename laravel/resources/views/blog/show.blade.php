@extends('layouts.app')
@section('title', $post['title'])
@section('meta_desc', $post['excerpt'])

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <a href="{{ route('blog.index') }}" class="back-link">← Back to Blog</a>
        <div class="blog-post-meta">
            <span class="tag">{{ $post['category'] }}</span>
            <span>{{ $post['date'] }}</span>
            <span>·</span>
            <span>{{ $post['read_time'] }}</span>
        </div>
        <h1 class="page-title" style="max-width:750px;">{{ $post['title'] }}</h1>
    </div>
</section>

<section class="section">
    <div class="section-inner blog-post-grid">

        <article class="blog-post-body">
            <p class="blog-lead">{{ $post['excerpt'] }}</p>
            <hr class="blog-divider">
            <p>{{ $post['content'] }}</p>

            <blockquote class="blog-quote">
                "Keep building, keep shipping. The best way to learn is to make real things for real people."
                <cite>— Hyukken</cite>
            </blockquote>

            <div class="blog-tags" style="margin-top:2rem;">
                @foreach($post['tags'] as $t)
                <span class="tag">#{{ $t }}</span>
                @endforeach
            </div>
        </article>

        <aside class="blog-sidebar">
            <div class="sidebar-card">
                <h4>About the Author</h4>
                <div class="author-mini">
                    <div class="avatar-sm">AC</div>
                    <div>
                        <strong>Allen Carl Odang</strong>
                        <p>BTVTEICT – CP @ TUP Taguig</p>
                    </div>
                </div>
            </div>

            @if(!empty($related))
            <div class="sidebar-card">
                <h4>More Posts</h4>
                @foreach($related as $rp)
                <div class="related-post">
                    <span>{{ $rp['emoji'] }}</span>
                    <a href="{{ route('blog.show', $rp['slug']) }}">{{ $rp['title'] }}</a>
                </div>
                @endforeach
            </div>
            @endif

            <a href="{{ route('blog.index') }}" class="btn btn-outline" style="width:100%;text-align:center;">
                ← All Posts
            </a>
        </aside>
    </div>
</section>

@endsection
