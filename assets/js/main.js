jQuery(document).ready(function ($) {

  /*=============== TESTIMONIAL SWIPPER ===============*/

  const swiper = new Swiper(".testimonialSwiper", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

/*=============== SCROLL REVEAL ANIMATION ===============*/

  const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 1800,
    delay: 200,
    reset: false
  });

  sr.reveal('.hero-title', { delay: 100 });
  sr.reveal('.hero-subtext', { delay: 300 });
  sr.reveal('.hero-image', { delay: 500, origin: 'bottom' });
  sr.reveal('.hero-btn', { delay: 600, origin: 'bottom' });

  sr.reveal('.section-header', { delay: 100 });
  sr.reveal('.feature-card', {
    origin: 'bottom',
    distance: '40px',
    delay: 300,
    interval: 400,
  });

  sr.reveal('.testimonial-section .section-header', { delay: 100 });
  // sr.reveal('.testimonial-content', { origin: 'right', delay: 300 });
  sr.reveal('.testimonial-img-wrapper', { origin: 'left', delay: 300 });

  sr.reveal('#contact .section-header', { delay: 100 });
  sr.reveal('.contact-info-tile', { interval: 200, origin: 'left' });
  sr.reveal('.contact-form-card', { origin: 'right', delay: 400 });
});
