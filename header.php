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

<body class="font-main">




    <?php


    wp_nav_menu(array(
        'menu' => 'primary',
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => 'nav',
        'items_wrap'     => '<ul className="flex flex-col md:flex-row items-start md:items-center gap-y-5 md:gap-y-0 gap-x-5 w-full md:w-auto py-3 md:py-0">%3$s</ul>',
    ));



    ?>