@extends('layouts.app')
@section('title', 'Contact')
@section('meta_desc', 'Get in touch with Allen Carl Odang — available for internships, collaborations, and freelance projects.')

@section('content')

<section class="page-hero">
    <div class="section-inner">
        <span class="section-tag">// contact</span>
        <h1 class="page-title">Get In <span class="accent">Touch</span></h1>
        <p class="page-sub">Let's talk — I don't bite 😄</p>
    </div>
</section>

<section class="section">
    <div class="section-inner contact-grid">

        {{-- Info --}}
        <div class="contact-info">
            <h3>Say Hello</h3>
            <p>
                I'm open to internship opportunities, freelance web development projects,
                academic collaborations, or just a friendly chat about tech.
                Fill out the form or reach me through any of the channels below.
            </p>

            <div class="contact-items">
                @foreach($contact_info as $item)
                <div class="contact-item">
                    <span class="ci-icon">{{ $item['icon'] }}</span>
                    <div>
                        <div class="ci-label">{{ $item['label'] }}</div>
                        @if($item['link'])
                            <a href="{{ $item['link'] }}" class="ci-value link" target="_blank">{{ $item['value'] }}</a>
                        @else
                            <div class="ci-value">{{ $item['value'] }}</div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Form --}}
        <div class="contact-form-wrap">
            <form action="{{ route('contact.store') }}" method="POST" class="contact-form" novalidate>
                @csrf

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name"
                           value="{{ old('name') }}"
                           placeholder="Your name"
                           class="{{ $errors->has('name') ? 'input-error' : '' }}">
                    @error('name')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email"
                           value="{{ old('email') }}"
                           placeholder="you@example.com"
                           class="{{ $errors->has('email') ? 'input-error' : '' }}">
                    @error('email')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject"
                           value="{{ old('subject') }}"
                           placeholder="What's this about?"
                           class="{{ $errors->has('subject') ? 'input-error' : '' }}">
                    @error('subject')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5"
                              placeholder="Tell me more..."
                              class="{{ $errors->has('message') ? 'input-error' : '' }}">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" style="width:100%;">
                    Send Message 🚀
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
