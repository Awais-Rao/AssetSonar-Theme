<?php
/**
 * Navigation Bar Block Template (Updated Structure)
 */

$logo  = get_field('logo');
$links = get_field('nav_links');

// Extract logo details
$logo_url = $logo['url'] ?? '';
$logo_alt = $logo['alt'] ?? 'Logo';
?>

<nav class="navbar navbar-expand-lg bg-white global-navbar px-2" aria-label="Main Navigation">
  <div class="container">

    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if ($logo_url): ?>
        <img src="<?php echo esc_url($logo_url); ?>" class="navbar__logo" alt="<?php echo esc_attr($logo_alt); ?>" loading="lazy">
      <?php else: ?>
        <strong class="text-gradient"><?php echo esc_html__('AssetSonar', 'assetsonar'); ?></strong>
      <?php endif; ?>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <?php if (!empty($links)): ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center">
          <?php foreach ($links as $link): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url($link['link']['url']); ?>" target="<?php echo esc_attr($link['link']['target'] ?? '_self'); ?>">
                <?php echo esc_html($link['label']); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo esc_html__('Login', 'assetsonar'); ?></a>
        </li>
          <li class="nav-item">
            <a class="btn btn-gradient navbar-btn ms-lg-3" href="#contact" target="_self">
              <?php echo esc_html__('Get Started', 'assetsonar'); ?>
            </a>
          </li>
      </ul>
    </div>

  </div>
</nav>
