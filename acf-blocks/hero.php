<?php
/**
 * Hero Section Block Template (Updated Structure)
 */

$headline = get_field('headline');
$supporting_text = get_field('supporting_text');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$hero_image = get_field('hero_image');

// Handle image
$image_url = '';
$image_alt = '';

if (is_array($hero_image)) {
  $image_url = $hero_image['url'] ?? '';
  $image_alt = $hero_image['alt'] ?? '';
} elseif (is_string($hero_image)) {
  $image_url = esc_url($hero_image);
  $image_alt = '';
} elseif (is_int($hero_image)) {
  $image_url = wp_get_attachment_url($hero_image);
  $image_alt = get_post_meta($hero_image, '_wp_attachment_image_alt', true);
}
?>

<!-- Hero Section -->
<section class="hero-section section">
  <div class="container text-center">

    <?php if ($headline): ?>
      <h1 class="hero-title mb-3"><?php echo esc_html($headline); ?></h1>
    <?php endif; ?>

    <?php if ($supporting_text): ?>
      <p class="lead text-muted mb-4 mx-auto hero-subtext">
        <?php echo esc_html($supporting_text); ?>
      </p>
    <?php endif; ?>

    <?php if ($button_text && $button_link): ?>
      <div class="d-flex justify-content-center gap-3 flex-wrap mb-3">
        <a href="<?php echo esc_url($button_link['url']); ?>"
          target="<?php echo esc_attr($button_link['target'] ?? '_self'); ?>"
          class="btn hero-btn theme__btn btn-gradient">
          <?php echo esc_html($button_text); ?>
        </a>
      </div>
    <?php endif; ?>

    <?php if ($image_url): ?>
      <div class="hero-image mt-5">
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="img-fluid"
          loading="lazy" />
      </div>
    <?php endif; ?>

  </div>
</section>