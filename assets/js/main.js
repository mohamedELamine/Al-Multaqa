document.addEventListener('DOMContentLoaded', () => {
    const smoothScroll = () => {
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const href = a.getAttribute('href');
                if (href === '#') return;
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) target.scrollIntoView({ behavior: 'smooth' });
            });
        });
    };
    smoothScroll();
});
