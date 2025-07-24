<?php
/**
 * Contact Form Block Template
 */

$section_title       = get_field('contact_title');
$contact_heading     = get_field('contact_heading');
$contact_description = get_field('contact_description');
$contact_address     = get_field('contact_address');
$contact_email       = get_field('contact_email');
?>

<section class="contact-section section" id="contact">
  <div class="container">
    <div class="section-header text-center mb-5">
        <h6 class="text-uppercase text-gradient fw-bold small"><?php echo esc_html('Contact Us', 'assetsonar'); ?></h6>
      <?php if ($section_title): ?>
        <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
      <?php endif; ?>
    </div>

    <div class="row g-5 align-items-start">
      <div class="col-lg-6">
        <?php if ($contact_heading): ?>
          <h3 class="fw-bold mb-3"><?php echo esc_html($contact_heading); ?></h3>
        <?php endif; ?>
        <?php if ($contact_description): ?>
          <p class="text-muted mb-4"><?php echo esc_html($contact_description); ?></p>
        <?php endif; ?>

        <?php if ($contact_address): ?>
          <div class="d-flex align-items-start mb-4 contact-info-tile">
            <div class="icon-wrapper me-3">
              <i class="fas fa-map-marker-alt fa-lg text-white"></i>
            </div>
            <div>
              <h6 class="mb-1 fw-semibold"><?php echo esc_html('Location', 'assetsonar'); ?></h6>
              <p class="mb-0 text-muted"><?php echo esc_html($contact_address); ?></p>
            </div>
          </div>
        <?php endif; ?>

        <?php if ($contact_email): ?>
          <div class="d-flex align-items-start contact-info-tile">
            <div class="icon-wrapper me-3">
              <i class="fas fa-envelope fa-lg text-white"></i>
            </div>
            <div>
              <h6 class="mb-1 fw-semibold"><?php echo esc_html('Email Us', 'assetsonar'); ?></h6>
              <p class="mb-0 text-muted"><?php echo esc_html($contact_email); ?></p>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <div class="col-lg-6">
        <div class="card contact-form-card">
          <form>
            <div class="row g-3">
              <div class="col-12">
                <input type="text" class="form-control custom-input" placeholder="Name" required>
              </div>
              <div class="col-12">
                <input type="email" class="form-control custom-input" placeholder="Email" required>
              </div>
              <div class="col-12">
                <input type="text" class="form-control custom-input" placeholder="Subject" required>
              </div>
              <div class="col-12">
                <textarea class="form-control custom-input" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="col-12 text-end">
                <button type="submit" class="btn theme__btn btn-gradient"><?php echo esc_html('Send Message', 'assetsonar'); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
