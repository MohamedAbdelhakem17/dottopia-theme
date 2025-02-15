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
    // Fetch the menu items from WordPress
    $menu_items = [
        ['name' => 'Home', 'path' => home_url('/')],
        ['name' => 'About', 'path' => home_url('/about')],
        ['name' => 'Services', 'path' => home_url('/services')],
        ['name' => 'Contact', 'path' => home_url('/contact')],
    ];

    // Logo URL
    $logo_url = get_template_directory_uri() . '/assets/image/logo.png';
    ?>

    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 bg-white transition-all duration-300 py-2 px-5">
        <div class="container mx-auto flex justify-between items-center px-5 md:px-10">
            <div class="brand">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo esc_url($logo_url); ?>" alt="dottopia logo" class="w-[135px]" />
                </a>
            </div>

            <!-- Hamburger Menu Icon -->
            <button id="menu-toggle" class="text-black focus:outline-none md:hidden" aria-label="Open menu">
                <span id="menu-icon">&#9776;</span>
            </button>

            <!-- Navigation Links -->
            <div id="menu" class="hidden md:flex flex-col md:flex-row md:items-center gap-5 absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none px-5 md:px-0 py-3">
                <ul class="flex flex-col md:flex-row items-start md:items-center gap-y-5 md:gap-y-0 gap-x-5 w-full md:w-auto py-3 md:py-0">
                    <?php foreach ($menu_items as $item) : ?>
                        <li>
                            <a href="<?php echo esc_url($item['path']); ?>" class="text-black font-roboto font-normal text-[16px] hover:text-primary transition-all duration-300 flex items-center gap-1">
                                <?php echo esc_html($item['name']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="text-[16px] text-center mx-10 md:mx-0">العربية</p>
                <a href="#" class="bg-black text-white py-1.5 px-3 rounded-md font-sub font-normal text-[14px] hover:bg-primary transition-[background-color] duration-300">
                    Get a Proposal
                </a>
            </div>
        </div>
    </nav>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>