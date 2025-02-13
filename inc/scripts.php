<!-- This File For Load Scripts  -->

<?php
// Check if accessed directly
if (!defined("ABSPATH")) exit();

// Enqueue Styles
function load_Css()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style('main-css-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $version, 'all');
    wp_enqueue_style('main-css-tailwind', get_stylesheet_directory_uri() . '/assets/css/tailwind.css', array(), "2.2.19", 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
}

function load_Js()
{
    // Motion One Library
    wp_enqueue_script('motion-js', 'https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js', array(), null, true);

    // Bootstrap Bundle
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), "5.3.3", true);

    // Main JS
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('motion-js'), "1.0.0", true);
}
add_action('wp_enqueue_scripts', 'load_Js');

// add Actions 
add_action("wp_enqueue_scripts", "load_Css");
add_action("wp_enqueue_scripts", "load_Js");
