<?php


if (!defined("ABSPATH")) exit;



require_once(get_template_directory() . '/inc/common-acf-setup.php');
require_once(get_template_directory() . '/inc/theme-filter.php');
require_once(get_template_directory() . '/inc/theme-setup.php');
require_once(get_template_directory() . '/inc/load-assets.php');
require_once(get_template_directory() . '/inc/menus-setup.php');
require_once(get_template_directory() . '/inc/widgets_setup.php');
require_once(get_template_directory() . '/inc/single-page-setup.php');
require_once(get_template_directory() . '/helpers/change-color.php');


function hubspot_form_shortcode()
{
    ob_start();
?>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
    <script>
        hbspt.forms.create({
            region: "na1",
            portalId: "25241510", // استبدله بالـ Portal ID الخاص بك
            formId: "bcf181e9-7f9e-4558-a432-5794e00b939d" // استبدله بـ Form ID الخاص بك
        });
    </script>
<?php
    return ob_get_clean();
}
add_shortcode('hubspot_form', 'hubspot_form_shortcode');
