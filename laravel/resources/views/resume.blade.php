@extends('layouts.app')
@section('title', 'Resume')
@section('meta_desc', 'Resume of Allen Carl Odang — education, experience, and technical skills.')

@section('content')

<section class="page-hero">
    <div class="section-inner" style="display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:1rem;">
        <div>
            <span class="section-tag">// resume</span>
            <h1 class="page-title">My <span class="accent">Resume</span></h1>
        </div>
        <a href="{{ route('certifications') }}" class="btn btn-ghost">View Certifications →</a>
    </div>
</section>

<section class="section">
    <div class="section-inner resume-layout">

        {{-- Education --}}
        <div>
            <h3 class="resume-section-title"><span class="accent">◆</span> Education</h3>
            @foreach($education as $edu)
            <div class="resume-card">
                <div class="resume-card-year">{{ $edu['year'] }}</div>
                <div class="resume-card-body">
                    <h4>{{ $edu['degree'] }}</h4>
                    @if($edu['major'])
                    <p class="resume-sub accent">{{ $edu['major'] }}</p>
                    @endif
                    <p class="resume-school">🏫 {{ $edu['school'] }}</p>
                    <p>{{ $edu['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Experience --}}
        <div>
            <h3 class="resume-section-title"><span class="accent">◆</span> Experience</h3>
            @foreach($experience as $exp)
            <div class="resume-card">
                <div class="resume-card-year">{{ $exp['year'] }}</div>
                <div class="resume-card-body">
                    <h4>{{ $exp['role'] }}</h4>
                    <p class="resume-sub accent">{{ $exp['company'] }}</p>
                    <ul class="resume-bullets">
                        @foreach($exp['bullets'] as $b)
                        <li>{{ $b }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Quick Links --}}
    <div class="section-inner" style="margin-top:3rem;display:flex;gap:1rem;flex-wrap:wrap;">
        <a href="{{ route('skills') }}"          class="btn btn-outline">View Skills →</a>
        <a href="{{ route('certifications') }}"  class="btn btn-outline">Certifications →</a>
        <a href="{{ route('contact') }}"         class="btn btn-primary">Contact Me</a>
    </div>
</section>

@endsection
