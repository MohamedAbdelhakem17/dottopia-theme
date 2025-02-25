<?php
if (!defined("ABSPATH")) exit;

function register_footer_widget()
{
    register_sidebar(array(
        'name' => esc_html__('Footer Links', 'dottopia'),
        'id' => "footer_links",
        'description' => esc_html__("Add All Footer Links", "dottopia"),
        'class'         => 'col-span-1 md:col-span-1 p-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-[17px] font-bold font-roboto mb-6 text-start capitalize">',
        'after_title'   => '</h6>',
    ));
}

add_action('widgets_init', 'register_footer_widget');
