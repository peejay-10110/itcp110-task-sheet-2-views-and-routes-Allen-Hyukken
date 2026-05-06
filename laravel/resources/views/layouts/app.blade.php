<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Hyukken') — Allen Carl Odang</title>
    <meta name="description" content="@yield('meta_desc', 'Portfolio of Allen Carl Odang — BTVTEICT student at TUP Taguig, Computer Programming major.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

    {{-- ── NOISE OVERLAY ── --}}
    <div class="noise-overlay" aria-hidden="true"></div>

    {{-- ── NAVIGATION ── --}}
    <header class="site-header">
        <nav class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">
                <span class="logo-bracket">[</span>hyukken<span class="logo-bracket">]</span>
            </a>

            <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>

            <ul class="nav-links" id="navLinks">
                <li><a href="{{ route('home') }}"           class="{{ request()->routeIs('home')             ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}"          class="{{ request()->routeIs('about')            ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('skills') }}"         class="{{ request()->routeIs('skills')           ? 'active' : '' }}">Skills</a></li>
                <li><a href="{{ route('projects.index') }}" class="{{ request()->routeIs('projects.*')       ? 'active' : '' }}">Projects</a></li>
                <li><a href="{{ route('blog.index') }}"     class="{{ request()->routeIs('blog.*')           ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ route('resume') }}"         class="{{ request()->routeIs('resume')           ? 'active' : '' }}">Resume</a></li>
                <li><a href="{{ route('contact') }}"        class="nav-cta {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    {{-- ── MAIN CONTENT ── --}}
    <main class="site-main">
        @if(session('success'))
            <div class="flash-success">
                <span>✅</span> {{ session('success') }}
                <button class="flash-close" onclick="this.parentElement.remove()">×</button>
            </div>
        @endif

        @yield('content')
    </main>

    {{-- ── FOOTER ── --}}
    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-brand">
                <span class="logo-bracket">[</span>hyukken<span class="logo-bracket">]</span>
                <p>Allen Carl Odang</p>
                <p class="footer-sub">BTVTEICT — Computer Programming<br>TUP Taguig</p>
            </div>

            <div class="footer-links">
                <h4>Navigate</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('projects.index') }}">Projects</a></li>
                    <li><a href="{{ route('certifications') }}">Certifications</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Connect</h4>
                <ul>
                    <li><a href="https://github.com/hyukken" target="_blank">GitHub</a></li>
                    <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
                    <li><a href="{{ route('contact') }}">Contact Me</a></li>
                    <li><a href="{{ route('resume') }}">Resume</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© {{ date('Y') }} Allen Carl Odang. Built with <span class="accent">Laravel</span> &amp; passion.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
