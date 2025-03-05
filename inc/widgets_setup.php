<?php
if (!defined("ABSPATH")) exit;

function register_footer_widgets()
{
    register_sidebar(array(
        'name'          => esc_html__('Services', 'dottopia'),
        'id'            => 'footer_services',
        'description'   => esc_html__("Services section in footer", "dottopia"),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-[17px] font-bold font-roboto mb-3 text-start capitalize">',
        'after_title'   => '</h6>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Resources', 'dottopia'),
        'id'            => 'footer_resources',
        'description'   => esc_html__("Resources section in footer", "dottopia"),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-[17px] font-bold font-roboto mb-3 text-start capitalize">',
        'after_title'   => '</h6>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Case Studies', 'dottopia'),
        'id'            => 'footer_case_studies',
        'description'   => esc_html__("Case Studies section in footer", "dottopia"),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-[17px] font-bold font-roboto mb-3 text-start capitalize">',
        'after_title'   => '</h6>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Social Links', 'dottopia'),
        'id'            => 'footer_social_links',
        'description'   => esc_html__("Social Links in footer", "dottopia"),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
    ));
}

add_action('widgets_init', 'register_footer_widgets');
