<?php
if (!defined(("ABSPATH"))) exit;

// Load CSS 
function load_css()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style('main-css-custom', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', array(), $version, 'all');
    wp_enqueue_style('main-css-tailwind', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), "2.2.19", 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
}


// Load JS
function load_js()
{
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('swiper-script'), null, true);
}


// add Actions 
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');
