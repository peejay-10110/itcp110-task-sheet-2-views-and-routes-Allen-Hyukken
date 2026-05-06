@extends('layouts.app')
@section('title', 'About Me')
@section('meta_desc', 'Learn more about Allen Carl Odang — BTVTEICT student, developer, and aspiring educator at TUP Taguig.')

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <span class="section-tag">// about</span>
        <h1 class="page-title">A Bit About <span class="accent">Me</span></h1>
        <p class="page-sub">Student. Developer. Curious human.</p>
    </div>
</section>

<section class="section">
    <div class="section-inner about-grid">

        {{-- Profile Card --}}
        <div class="profile-card">
            <div class="profile-avatar">
                <div class="avatar-placeholder">
                    <span>AC</span>
                </div>
                <div class="profile-status">
                    <span class="badge-dot"></span> Open to opportunities
                </div>
            </div>
            <div class="profile-info">
                <h2>Allen Carl Odang</h2>
                <p class="profile-alias">/ Hyukken</p>
                <ul class="profile-details">
                    <li><span class="pi-label">Program</span> BTVTEICT – Computer Programming</li>
                    <li><span class="pi-label">School</span>  TUP Taguig</li>
                    <li><span class="pi-label">Location</span> Taguig City, Metro Manila</li>
                    <li><span class="pi-label">Email</span>   allencarl.odang@tup.edu.ph</li>
                </ul>
                <div class="profile-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-sm">Contact Me</a>
                    <a href="{{ route('resume') }}"  class="btn btn-ghost btn-sm">My Resume</a>
                </div>
            </div>
        </div>

        {{-- Bio --}}
        <div class="about-bio">
            <h3>Who I Am</h3>
            <p>
                I'm <strong>Allen Carl Odang</strong>, but most people online know me as <strong>Hyukken</strong>.
                I'm currently in my third year of the <em>Bachelor of Technical-Vocational Teacher Education in ICT</em>
                (BTVTEICT) program at <strong>Technological University of the Philippines – Taguig</strong>,
                majoring in Computer Programming.
            </p>
            <p>
                What drew me to programming was simple: I loved the idea that you could think of something,
                type it out, and make it real. That feeling never gets old. Whether it's a student management system,
                a personal portfolio, or a weekend script — building things is what I do.
            </p>
            <p>
                Beyond code, BTVTEICT shapes me to think like an educator too. I'm learning not just
                <em>how</em> to solve problems, but <em>how to teach</em> others to solve them — which I think
                is the deeper superpower.
            </p>

            <h3 style="margin-top:2rem;">When I'm Not Coding</h3>
            <div class="hobbies-grid">
                @foreach($hobbies as $h)
                <div class="hobby-chip">
                    <span>{{ $h['emoji'] }}</span> {{ $h['label'] }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Timeline --}}
<section class="section section-alt">
    <div class="section-inner">
        <div class="section-header">
            <span class="section-tag">// journey</span>
            <h2 class="section-title">My Timeline</h2>
        </div>

        <div class="timeline">
            @foreach($timeline as $i => $event)
            <div class="timeline-item {{ $i % 2 === 0 ? 'left' : 'right' }}">
                <div class="timeline-content">
                    <span class="timeline-year">{{ $event['year'] }}</span>
                    <h4>{{ $event['title'] }}</h4>
                    <p>{{ $event['desc'] }}</p>
                </div>
                <div class="timeline-dot"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
