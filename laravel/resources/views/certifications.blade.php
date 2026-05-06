@extends('layouts.app')
@section('title', 'Certifications')
@section('meta_desc', 'Certifications and credentials of Allen Carl Odang — TESDA NC II, freeCodeCamp, Udemy, and more.')

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <a href="{{ route('resume') }}" class="back-link">← Back to Resume</a>
        <span class="section-tag">// credentials</span>
        <h1 class="page-title">My <span class="accent">Certifications</span></h1>
        <p class="page-sub">Certificates and courses I've completed</p>
    </div>
</section>

<section class="section">
    <div class="section-inner">
        <div class="cert-grid">
            @foreach($certifications as $cert)
            <div class="cert-card">
                <div class="cert-emoji">{{ $cert['emoji'] }}</div>
                <div class="cert-body">
                    <span class="tag {{ $cert['status'] === 'Certified' ? 'tag-done' : 'tag-wip' }}">
                        {{ $cert['status'] }}
                    </span>
                    <h4 class="cert-title">{{ $cert['title'] }}</h4>
                    <p class="cert-issuer">{{ $cert['issuer'] }}</p>
                    <p class="cert-date">📅 {{ $cert['date'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div style="margin-top:3rem;text-align:center;">
            <p style="color:var(--text-muted);margin-bottom:1.5rem;">Always learning something new 🚀</p>
            <a href="{{ route('skills') }}" class="btn btn-outline">See My Skills →</a>
        </div>
    </div>
</section>

@endsection
