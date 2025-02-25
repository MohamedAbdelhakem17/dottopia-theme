<?php

if (!defined("ABSPATH")) exit;

function enable_svg_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function add_type_attribute_to_tailwind($tag, $handle)
{
    if ('tailwind-css' === $handle) {
        return str_replace("rel='stylesheet'", "rel='stylesheet' type='text/tailwindcss'", $tag);
    }
    return $tag;
}

function populate_acf_post_slug_dropdown($field)
{
    $field['choices'] = array(); 

    // Get all posts
    $posts = get_posts([
        'post_type'      => 'post', 
        'posts_per_page' => -1, 
        'post_status'    => 'publish'
    ]);

    if ($posts) {
        foreach ($posts as $post) {
            $field['choices'][$post->post_name] = $post->post_title; 
        }
    }

    return $field;
}


add_filter('acf/load_field/name=blog_slug_selector', 'populate_acf_post_slug_dropdown');
add_filter('style_loader_tag', 'add_type_attribute_to_tailwind', 10, 2);
add_filter('upload_mimes', 'enable_svg_uploads');
