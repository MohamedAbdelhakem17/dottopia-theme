<?php
// Define category color mapping as a global constant
if (!defined('CATEGORY_COLOR_MAP')) {
    define('CATEGORY_COLOR_MAP', [
        'seo' => 'seo',
        'performance' => 'performance',
        'digital' => 'digital',
    ]);
}

// Define the helper function globally
if (!function_exists('detect_color')) {
    function detect_color($category)
    {
        $category = strtolower(trim($category));
        $color = CATEGORY_COLOR_MAP[$category] ?? 'main';

        return apply_filters('detect_category_color', $color, $category);
    }
}
