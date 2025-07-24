<?php
/**
 * AssetSonar Theme Functions
 * @package AssetSonar
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
if (!function_exists('assetsonar_theme_setup')) {
    function assetsonar_theme_setup()
    {
        // Load theme text domain
        load_theme_textdomain('assetsonar', get_template_directory() . '/languages');

        // Theme supports
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
        add_theme_support('align-wide');
        add_theme_support('editor-styles');

        // Register navigation menus
        register_nav_menus([
            'primary' => __('Primary Menu', 'assetsonar'),
        ]);
    }
}
add_action('after_setup_theme', 'assetsonar_theme_setup');



/**
 * Enqueue Styles and Scripts
 */
if (!function_exists('assetsonar_enqueue_assets')) {
    function assetsonar_enqueue_assets()
    {
        $theme_version = wp_get_theme()->get('Version');

        // CSS
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', [], null);
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', [], '5.3.2');
        wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0');
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', [], '10.0.0');
        wp_enqueue_style('assetsonar-style', get_stylesheet_uri(), [], $theme_version);

        // JS
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', ['jquery'], '5.3.2', true);
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], '10.0.0', true);
        wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal', [], null, true);
        wp_enqueue_script('assetsonar-main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], $theme_version, true);
    }
}
add_action('wp_enqueue_scripts', 'assetsonar_enqueue_assets');




/**
 * Register ACF Blocks
 */
if (!function_exists('assetsonar_register_acf_blocks')) {
    function assetsonar_register_acf_blocks()
    {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        $blocks = [
            'hero' => [
                'title' => 'Hero Section',
                'icon' => 'cover-image',
                'keywords' => ['hero', 'landing', 'header']
            ],
            'features' => [
                'title' => 'Features Section',
                'icon' => 'star-filled',
                'keywords' => ['features', 'benefits', 'why']
            ],
            'testimonial' => [
                'title' => 'Testimonial',
                'icon' => 'format-quote',
                'keywords' => ['testimonial', 'quote', 'feedback']
            ],
            'contact-form' => [
                'title' => 'Contact Form',
                'icon' => 'email',
                'keywords' => ['form', 'contact', 'message']
            ],
            'nav-bar' => [
                'title' => 'Navigation Bar',
                'icon' => 'menu',
                'keywords' => ['nav', 'menu', 'header']
            ],
        ];

        foreach ($blocks as $slug => $args) {
            acf_register_block_type([
                'name' => $slug,
                'title' => __($args['title'], 'assetsonar'),
                'render_template' => get_template_directory() . "/acf-blocks/{$slug}.php",
                'category' => 'layout',
                'icon' => $args['icon'],
                'keywords' => $args['keywords'],
                'mode' => 'preview',
                'supports' => [
                    'align' => true,
                    'anchor' => true,
                    'customClassName' => true,
                ],
                'enqueue_assets' => function () {
                    wp_enqueue_style('assetsonar-main', get_template_directory_uri() . '/assets/css/main.css');
                    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], null, true);
                    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
                    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
                    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');


                }
            ]);
        }

    }
}
add_action('acf/init', 'assetsonar_register_acf_blocks', 10);

/**
 * Register ACF Fields
 */
add_action('acf/init', 'assetsonar_load_acf_fields', 20);
function assetsonar_load_acf_fields() {
    require get_template_directory() . '/inc/acf-fields.php';
}














