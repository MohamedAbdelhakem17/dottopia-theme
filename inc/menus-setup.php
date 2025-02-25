<?php
if (!defined("ABSPATH")) exit;

// function register_my_menus()
// {
//     $locations = array(
//         'primary'     => "Desktop Primary Menu",
//         'footerMenu'  => "Footer Menu Items"
//     );
//     register_nav_menus($locations);
// }

// add_action('after_setup_theme', 'register_my_menus');


function moder_era_one_widgets_init()
{


    // Footer left
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Left', 'tamTheme'),
            'id'            => 'footer-left',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'tamTheme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );

    // Footer right
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Right', 'tamTheme'),
            'id'            => 'sidebar-right',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'tamTheme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );

    // For Add footer copyrights
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Copyrights', 'tamTheme'),
            'id'            => 'footer-copyrights',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'tamTheme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );




    // register_sidebar(
    // 	array(
    // 		'name'          => esc_html__( 'Header Right', 'tamTheme' ),
    // 		'id'            => 'header-right',
    // 		'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'tamTheme' ),
    // 		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    // 		'after_widget'  => '</div>',
    // 		'before_title'  => '<h6 class="widget-title">',
    // 		'after_title'   => '</h6>',
    // 	)
    // );




    // register_sidebar(
    // 	array(
    // 		'name'          => esc_html__('Ready To Book', 'tamTheme'),
    // 		'id'            => 'ready-to-book-widget',
    // 		'description'   => esc_html__('Add widgets here to appear in your footer.', 'tamTheme'),
    // 		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    // 		'after_widget'  => '</div>',
    // 		'before_title'  => '<h6 class="widget-title">',
    // 		'after_title'   => '</h6>',
    // 	)
    // );

    // register_sidebar(
    // 	array(
    // 		'name'          => esc_html__( 'Related News Section', 'tamTheme' ),
    // 		'id'            => 'sidebar-related-news',
    // 		'description'   => esc_html__( 'Add widgets here to appear in your header.', 'tamTheme' ),
    // 		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    // 		'after_widget'  => '</div>',
    // 		'before_title'  => '<h6>',
    // 		'after_title'   => '</h6>',
    // 	)
    // );

    // register_sidebar(
    // 	array(
    // 		'name'          => esc_html__( 'News Book Now Section', 'tamTheme' ),
    // 		'id'            => 'sidebar-news-book-now',
    // 		'description'   => esc_html__( 'Add widgets here to appear in your header.', 'tamTheme' ),
    // 		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    // 		'after_widget'  => '</div>',
    // 		'before_title'  => '<h6>',
    // 		'after_title'   => '</h6>',
    // 	)
    // );


}
add_action('widgets_init', 'moder_era_one_widgets_init');
