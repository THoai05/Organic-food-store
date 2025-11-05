<?php
// =======================
// Load CSS cho theme
// =======================
function doAnCMS_enqueue_styles() {
    wp_enqueue_style('doAnCMS-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'doAnCMS_enqueue_styles');

// =======================
// Khai báo các hỗ trợ của theme
// =======================
function doAnCMS_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Main Menu', 'doAnCMS'),
    ));
}
add_action('after_setup_theme', 'doAnCMS_setup');
?>
