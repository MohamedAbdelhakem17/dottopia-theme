<?php
// Template Name: New Inquiry Single

if (! defined("ABSPATH")) exit;

if (!is_admin() && !is_user_logged_in()) {
    wp_redirect(home_url("/"));
}
?>

<h1> <?php the_title(); ?></h1>
<h2> <?php the_field("user_name"); ?></h2>
<h3> <?php the_field("user_email"); ?></h3>
<h4> <?php the_field("service"); ?></h4>