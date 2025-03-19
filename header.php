<?php
/**
 * Header Template
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-light shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                bloginfo('name');
            }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            use darshanpatani\Wordpress\Theme\StarterTemplate\WP_Bootstrap_Navwalker;
            wp_nav_menu([
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_class'     => 'navbar-nav ms-auto',
                'fallback_cb'    => '__return_false',
                'depth'          => 2,
                'walker'         => new WP_Bootstrap_Navwalker(), // Add Bootstrap NavWalker for better support
            ]);
            ?>
        </div>
    </nav>
</header>

<main class="container mt-4">