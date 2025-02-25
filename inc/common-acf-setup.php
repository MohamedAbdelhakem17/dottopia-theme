<?php

if (!defined("ABSPATH")) exit;

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => ' Common Posts ',
        'menu_title'    => ' Common Posts ',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => 'dashicons-admin-customizer',
    ));
}
