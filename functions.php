<?php
function productstore_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'productstore_theme_setup');

function productstore_enqueue() {
    wp_enqueue_style('productstore-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'productstore_enqueue');
?>
