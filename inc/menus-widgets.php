<!-- This File For Define Menu and Widgets  -->

<?php
if (!defined("ABSPATH")) exit();


// Register Menu 
function register_my_menu()
{
    register_nav_menu('primary', __('Primary Menu'));
}




function custom_theme_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'custom-theme'),
        'id'            => 'footer-widget-1',
        'description'   => __('Widgets in this area will be shown in the first footer column.', 'custom-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'custom-theme'),
        'id'            => 'footer-widget-2',
        'description'   => __('Widgets in this area will be shown in the second footer column.', 'custom-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'custom-theme'),
        'id'            => 'footer-widget-3',
        'description'   => __('Widgets in this area will be shown in the third footer column.', 'custom-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}


// add Action 
add_action('after_setup_theme', 'register_my_menu');

add_action('widgets_init', 'custom_theme_widgets_init');













// class Tailwind_Nav_Walker extends Walker_Nav_Menu
// {
//     function start_lvl(&$output, $depth = 0, $args = null)
//     {
//         $output .= '<ul class="ml-4 space-y-2 ">';
//     }

//     function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
//     {
//         $output .= '<li class="inline-block">';
//         $output .= '<a href="' . $item->url . '" class="px-4 py-2 text-white hover:bg-gray-700 rounded">' . $item->title . '</a>';
//     }
// }
