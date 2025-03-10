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

function add_post_category_to_cf7($form_tag)
{
    if ($form_tag['name'] == 'post_category') {
        if (is_single()) {
            $categories = get_the_category();
            $category_name = !empty($categories) ? $categories[0]->name : 'Uncategorized';
            $form_tag['values'] = [$category_name];
        }
    }
    return $form_tag;
}
add_filter('wpcf7_form_tag', 'add_post_category_to_cf7', 10, 2);


function save_cf7_to_custom_post($contact_form)
{
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) {
        return;
    }

    $posted_data = $submission->get_posted_data();

    if (isset($posted_data['your-name'], $posted_data['your-email'], $posted_data['post_category'])) {
        $user_name = sanitize_text_field($posted_data['your-name']);
        $user_email = sanitize_email($posted_data['your-email']);
        $services = sanitize_text_field($posted_data['post_category']);

        // Create a new post
        $new_post = array(
            'post_title'   => 'New Inquiry from ' . $user_name . ' About ' . $services . ' Services',
            'post_type'    => 'action_form',
            'post_status'  => 'publish'
        );

        // Insert the post and get the post ID
        $post_id = wp_insert_post($new_post);

        if ($post_id) {
            // Add custom fields
            update_post_meta($post_id, 'user_name', $user_name);
            update_post_meta($post_id, 'user_email', $user_email);
            update_post_meta($post_id, 'service', $services);
        }
    }
}
add_action('wpcf7_mail_sent', 'save_cf7_to_custom_post');
