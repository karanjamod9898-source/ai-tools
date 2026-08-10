const navbar = document.querySelector('.ai-navbar');

const updateNavbar = () => {
    if (!navbar) {
        return;
    }

    navbar.classList.toggle('is-scrolled', window.scrollY > 12);
};

updateNavbar();
window.addEventListener('scroll', updateNavbar, { passive: true });

const revealItems = document.querySelectorAll('.reveal-up');

if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.14 });

    revealItems.forEach((item) => revealObserver.observe(item));
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}

document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (event) => {
        const target = document.querySelector(link.getAttribute('href'));

        if (!target) {
            return;
        }

        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});

document.querySelectorAll('form[action="#"]').forEach((form) => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    });
});
