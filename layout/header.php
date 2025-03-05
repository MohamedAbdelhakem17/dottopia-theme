<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="w-full z-50 shadow-md py-3 px-5">
        <div class="container mx-auto flex justify-between items-center px-5 md:px-10">
            <div class="brand">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="w-[135px]">
                </a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <i class="fa-solid fa-bars"></i>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'ul',
                'container_class' => 'my-nav-container',
                'link_after' => '<i class="fa-solid fa-chevron-down mx-2"></i>'
            ));
            ?>
        </div>

        </div>
    </nav>