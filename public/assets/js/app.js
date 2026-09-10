document.addEventListener('DOMContentLoaded', () => {
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (reduceMotion || typeof window.gsap === 'undefined') {
        return;
    }

    const introTargets = [
        ...document.querySelectorAll('main > .eyebrow, main > h1, main > .lead, .section-header, .about-copy > *'),
    ];

    const timeline = window.gsap.timeline({ defaults: { ease: 'power3.out' } });

    timeline
        .from('.site-header', { y: -24, autoAlpha: 0, duration: 0.55 })
        .from(introTargets, { y: 24, autoAlpha: 0, duration: 0.55, stagger: 0.07 }, '-=0.2')
        .from('.actions', { y: 18, autoAlpha: 0, duration: 0.45 }, '-=0.3')
        .from('.card', { y: 28, autoAlpha: 0, duration: 0.5, stagger: 0.1 }, '-=0.25')
        .from('.panel', { y: 20, autoAlpha: 0, duration: 0.45 }, '-=0.25')
        .from('tbody tr', { x: -16, autoAlpha: 0, duration: 0.35, stagger: 0.06 }, '-=0.2');

    document.querySelectorAll('.button').forEach((button) => {
        button.addEventListener('mouseenter', () => {
            window.gsap.to(button, { y: -3, scale: 1.02, duration: 0.2, ease: 'power2.out' });
        });

        button.addEventListener('mouseleave', () => {
            window.gsap.to(button, { y: 0, scale: 1, duration: 0.25, ease: 'power2.out' });
        });
    });
});
