<?php
/**
 * Feature Benefits Block Template (Updated for new structure)
 */

$heading = get_field('features_heading');
$description = get_field('features_description');
$features = get_field('features');
?>

<section class="feature-section section">
  <div class="container">
    <?php if ($heading || $description): ?>
      <div class="section-header text-center mb-5">
        <?php if ($heading): ?>
          <h2 class="section-title"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <?php if ($description): ?>
          <p class="section-subtitle"><?php echo esc_html($description); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($features)): ?>
      <div class="row justify-content-center g-4">
        <?php foreach ($features as $feature): ?>
          <div class="col-md-6 col-lg-4">
            <div class="feature-card h-100">
              <?php if (!empty($feature['image'])): ?>
                <div class="feature-icon mb-3">
                  <img
                    src="<?php echo esc_url($feature['image']['url']); ?>"
                    alt="<?php echo esc_attr($feature['image']['alt']); ?>"
                    loading="lazy"
                  />
                </div>
              <?php endif; ?>

              <?php if (!empty($feature['heading'])): ?>
                <h5 class="feature-heading"><?php echo esc_html($feature['heading']); ?></h5>
              <?php endif; ?>

              <?php if (!empty($feature['description'])): ?>
                <p class="feature-text text-muted"><?php echo esc_html($feature['description']); ?></p>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
