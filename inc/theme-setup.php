<!-- This File For Theme Setup  -->

<?php
// Add theme support for title tag
function theme_setup()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}

// Add Icon Uploaded 
function enqueue_favicon()
{
    $site_icon_id = get_option('site_icon');
    if ($site_icon_id) {
        $favicon_url = wp_get_attachment_url($site_icon_id);
        echo '<link rel="icon" type="image/png" href="' . esc_url($favicon_url) . '">';
    }
}


// add Actions
add_action('after_setup_theme', 'theme_setup');
add_action("wp_head", "enqueue_favicon");


