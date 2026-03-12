document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Toggle
    const hamburger = document.querySelector('.hamburger-menu');
    const nav = document.querySelector('.main-nav');
    const navLinks = document.querySelectorAll('.main-nav a, .cta-button');

    if (hamburger && nav) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('active');
            nav.classList.toggle('active');
        });

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                hamburger.classList.remove('active');
                nav.classList.remove('active');
            });
        });
    }

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', function () {
                const isOpen = item.classList.contains('open');

                // Close all other items
                faqItems.forEach(i => i.classList.remove('open'));

                if (!isOpen) {
                    item.classList.add('open');
                }
            });
        }
    });

    // Sticky Header Scroll Effect
    const headerWrapper = document.querySelector('.header-wrapper');
    if (headerWrapper) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                headerWrapper.classList.add('header-scrolled');
            } else {
                headerWrapper.classList.remove('header-scrolled');
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = headerWrapper ? headerWrapper.offsetHeight : 0;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Reveal on Scroll Initialization
    const revealElements = document.querySelectorAll('.reveal-on-scroll');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            } else {
                // Remove class when scrolling away to trigger animation again next time
                entry.target.classList.remove('is-visible');
            }
        });
    }, {
        threshold: 0.15 // Slightly lower threshold for better reactivity
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // Floating Cursor Logic for Marquee
    const marqueeWrapper = document.querySelector('.creators-marquee-wrapper');
    const floatingCursor = document.querySelector('.floating-chat-cursor');

    if (marqueeWrapper && floatingCursor && window.innerWidth > 900) {
        marqueeWrapper.addEventListener('mousemove', function (e) {
            requestAnimationFrame(() => {
                floatingCursor.style.left = e.clientX + 'px';
                floatingCursor.style.top = e.clientY + 'px';
            });
        });

        marqueeWrapper.addEventListener('mouseenter', function () {
            floatingCursor.style.opacity = '1';
            floatingCursor.style.transform = 'translate(-50%, -50%) scale(1)';
        });

        marqueeWrapper.addEventListener('mouseleave', function () {
            floatingCursor.style.opacity = '0';
            floatingCursor.style.transform = 'translate(-50%, -50%) scale(0)';
        });
    }
});
