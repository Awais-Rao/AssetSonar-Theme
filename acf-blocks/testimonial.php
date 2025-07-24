<?php
/**
 * Testimonial ACF Block Template
 */

$heading = get_field('testimonial_heading');
$testimonials = get_field('testimonials'); 
$quote_icon = get_template_directory_uri() . '/assets/images/quotes.png';
?>

<?php if ($testimonials): ?>
  <section class="testimonial-section section">
    <div class="container">
      <div class="section-header">
        <h6 class="text-uppercase text-gradient fw-bold small"><?php echo esc_html('Testimonials', 'assetsonar'); ?></h6>
        <h2 class="section-title"><?php echo esc_html($heading); ?></h2>
      </div>

      <div class="swiper testimonialSwiper">
        <div class="swiper-wrapper">
          <?php foreach ($testimonials as $t): ?>
            <div class="swiper-slide">
              <div class="row align-items-center gx-5">
                <div class="col-md-5 text-center">
                  <?php if (!empty($t['photo'])): ?>
                    <img src="<?php echo esc_url($t['photo']['url']); ?>"
                      alt="<?php echo esc_attr($t['photo']['alt'] ?? 'Client Photo'); ?>" class="img-fluid" loading="lazy">
                  <?php endif; ?>
                </div>

                <div class="col-md-7 mt-4 mt-md-0">
                  <div class="testimonial-content">
                    <div class="quote-icon-wrapper">
                      <img src="<?php echo esc_url($quote_icon); ?>" class="quote-icon" alt="Quote icon">
                    </div>

                    <div class="stars mb-2 text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="fs-5 text-dark">
                      "<?php echo esc_html($t['quote']); ?>"
                    </p>

                    <div class="client-info mt-4">
                      <strong><?php echo esc_html($t['name']); ?></strong><br />
                      <span class="text-muted small"><?php echo esc_html($t['designation']); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="swiper-pagination mt-4"></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof Swiper !== 'undefined') {
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
      }
    });
  </script>
<?php endif; ?>