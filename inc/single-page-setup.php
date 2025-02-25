<?php
function load_single_page_template($template)
{
    if (is_singular('careers')) {
        return get_theme_file_path('/templates/single-career-template.php');
    }
    if (is_singular('case_studies')) {
        return get_theme_file_path('/templates/single-case-study-template.php');
    }
    if (is_singular('post')) {
        return get_theme_file_path('/templates/single-blog-template.php');
    }
    return $template;
}

add_filter('single_template', 'load_single_page_template');
