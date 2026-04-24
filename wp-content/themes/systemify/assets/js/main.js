/**
 * Systemify Automation — Main JavaScript
 */

(function () {
  'use strict';

  /* ----------------------------------------------------------------
     Sticky header
     ---------------------------------------------------------------- */
  const header = document.getElementById('masthead');
  if (header) {
    const onScroll = () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ----------------------------------------------------------------
     Mobile nav toggle
     ---------------------------------------------------------------- */
  const navToggle = document.querySelector('.nav-toggle');
  const mobileNav = document.getElementById('mobile-nav');

  if (navToggle && mobileNav) {
    navToggle.addEventListener('click', () => {
      const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
      navToggle.setAttribute('aria-expanded', String(!isOpen));
      navToggle.classList.toggle('open', !isOpen);
      mobileNav.hidden = isOpen;
      mobileNav.classList.toggle('open', !isOpen);
    });

    // Close mobile nav on link click
    mobileNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.classList.remove('open');
        mobileNav.hidden = true;
        mobileNav.classList.remove('open');
      });
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
      if (!header.contains(e.target)) {
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.classList.remove('open');
        mobileNav.hidden = true;
        mobileNav.classList.remove('open');
      }
    });
  }

  /* ----------------------------------------------------------------
     Active nav link highlight (smooth-scroll pages)
     ---------------------------------------------------------------- */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-menu a, .nav-links a');

  if (sections.length && navLinks.length) {
    const observerOpts = { rootMargin: '-50% 0px -50% 0px' };
    const sectionObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          navLinks.forEach((link) => {
            link.classList.toggle(
              'active',
              link.getAttribute('href') === '#' + id || link.getAttribute('href')?.endsWith('/#' + id)
            );
          });
        }
      });
    }, observerOpts);
    sections.forEach((s) => sectionObserver.observe(s));
  }

  /* ----------------------------------------------------------------
     Scroll-reveal animation
     ---------------------------------------------------------------- */
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12 }
    );
    revealEls.forEach((el) => revealObserver.observe(el));
  } else {
    // Fallback for no IntersectionObserver
    revealEls.forEach((el) => el.classList.add('visible'));
  }

  /* ----------------------------------------------------------------
     Smooth scroll for anchor links
     ---------------------------------------------------------------- */
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const headerOffset = header ? header.offsetHeight + 16 : 88;
        const top = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ----------------------------------------------------------------
     Contact form — AJAX submit
     ---------------------------------------------------------------- */
  const form = document.getElementById('systemify-contact-form');
  const feedback = document.getElementById('form-feedback');

  if (form && feedback && typeof systemifyData !== 'undefined') {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const submitBtn = form.querySelector('[type="submit"]');
      const originalText = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';

      feedback.hidden = true;
      feedback.className = '';

      const nonce = document.getElementById('systemify_nonce_field')?.value || '';
      const formData = new FormData(form);
      formData.append('action', 'systemify_contact');
      formData.append('nonce', nonce);

      try {
        const response = await fetch(systemifyData.ajaxUrl, {
          method: 'POST',
          body: formData,
        });

        if (!response.ok) {
          throw new Error(`Server responded with status ${response.status} ${response.statusText}`);
        }

        const data = await response.json();

        feedback.hidden = false;
        feedback.textContent = data.data?.message || '';

        if (data.success) {
          feedback.className = 'form-success';
          feedback.style.cssText =
            'padding:.75rem 1rem;border-radius:8px;background:rgba(0,212,170,.12);color:#00a88a;font-weight:600;margin-bottom:1rem;';
          form.reset();
        } else {
          feedback.className = 'form-error';
          feedback.style.cssText =
            'padding:.75rem 1rem;border-radius:8px;background:rgba(239,68,68,.08);color:#dc2626;font-weight:600;margin-bottom:1rem;';
        }
      } catch (err) {
        feedback.hidden = false;
        feedback.textContent =
          err.message
            ? `Something went wrong (${err.message}). Please try again or email us directly at hello@systemifyautomation.com.`
            : 'Something went wrong. Please try again or email us directly at hello@systemifyautomation.com.';
        feedback.style.cssText =
          'padding:.75rem 1rem;border-radius:8px;background:rgba(239,68,68,.08);color:#dc2626;font-weight:600;margin-bottom:1rem;';
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
      }
    });
  }

})();
