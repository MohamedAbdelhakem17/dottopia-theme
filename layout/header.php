<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="main-nav w-full z-50 shadow-md py-3 px-5 fixed top-0 left-0 bg-white">
        <div class="container mx-auto flex justify-between items-center px-5 md:px-10">
            <div class="brand">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="w-[135px]">
                </a>
            </div>

            <button class="menu-toggle" id="menu-toggle">
                <i class="fa-solid fa-bars"></i>
            </button>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav-menu',
                'link_after' => '<i class="fa-solid fa-chevron-down mx-2"></i>'
            ));
            ?>
        </div>
    </nav>