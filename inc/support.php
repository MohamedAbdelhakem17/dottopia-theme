<!-- This File For Theme Support  -->

<?php
// Add theme support for SVG Image 
function enable_svg_uploads($mimes) {
    // Allow SVG file upload
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}


// Add Actions 
add_filter('upload_mimes', 'enable_svg_uploads');