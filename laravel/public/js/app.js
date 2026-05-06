// ── Hyukken Portfolio — app.js ──

document.addEventListener('DOMContentLoaded', () => {

    // Mobile nav toggle
    const toggle = document.getElementById('navToggle');
    const links  = document.getElementById('navLinks');
    if (toggle && links) {
        toggle.addEventListener('click', () => {
            links.classList.toggle('open');
        });
    }

    // Animate skill bars on scroll
    const bars = document.querySelectorAll('.skill-bar-fill');
    if (bars.length) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.width = entry.target.dataset.width ||
                        entry.target.style.width;
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        bars.forEach(bar => {
            const target = bar.style.width;
            bar.style.width = '0%';
            bar.dataset.width = target;
            observer.observe(bar);
        });
    }

    // Fade-in cards on scroll
    const cards = document.querySelectorAll('.project-card, .blog-card, .cert-card, .stat-card');
    if (cards.length && 'IntersectionObserver' in window) {
        const fade = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    fade.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        cards.forEach((card, i) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = `opacity 0.5s ease ${i * 0.06}s, transform 0.5s ease ${i * 0.06}s, border-color 0.25s, box-shadow 0.25s`;
            fade.observe(card);
        });
    }
});
