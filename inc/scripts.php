<!-- This File For Load Scripts  -->

<?php
// Check if accessed directly
if (!defined("ABSPATH")) exit();

// Enqueue Styles
function load_Css()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style('tam-ir-slick-style', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css", array(), '1.2.6', 'all');

    wp_enqueue_style('main-css-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $version, 'all');
    wp_enqueue_style('main-css-tailwind', get_stylesheet_directory_uri() . '/assets/css/tailwind.css', array(), "2.2.19", 'all');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css');
}

function load_Js()
{
    // Motion One Library
    wp_enqueue_script('motion-js', 'https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js', array(), null, true);

    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, true);

    // Bootstrap Bundle
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), "5.3.3", true);

    // Main JS
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array("jquery-cdn", "tam-7fitness-slick", 'motion-js'), "1.0.0", true);

    wp_enqueue_script('tam-7fitness-slick', get_template_directory_uri() . "/assets/js/slick.min.js", array(), '1.8.1', 'all');
}
add_action('wp_enqueue_scripts', 'load_Js');

// add Actions 
add_action("wp_enqueue_scripts", "load_Css");
add_action("wp_enqueue_scripts", "load_Js");
