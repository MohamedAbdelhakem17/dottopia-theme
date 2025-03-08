<?php // Template Name: SEO Solutions Template
?>

<!-- Get Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>
    <!-- Start <hero> -->
    <?php
    $hero_section_title = get_field("title") ?? "";
    // $hero_section_sub_title = preg_replace('/\{\{(.*?)\}\}/', '<span class="text-seo inline-block">$1</span>', get_field("sub_title"));
    $hero_description = get_field("info");
    // $background_image = esc_url(get_field("background_image"));
    ?>
    <header class="py-10 mb-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 px-4">
                <div class="col-span-1 flex justify-center flex-col text-center md:text-start items-center md:items-start" data-aos="fade-down-right">
                    <h1 class="text-seo text-sm font-[400] "><?= $hero_section_title ?></h1>
                    <p class="text-[30px] md:text-[48px] font-normal leading-[40px] md:leading-[60px] mt-2 mb-4 py-2 md:w-[90%] uppercase">We increase your <br class="hidden md:block"> <span class="text-seo font-bold">website traffic</span>, so you won’t have to worry about
                        <span class='inline-block p-0 m-0 text-seo font-bold'> ranking. <img src='<?= get_template_directory_uri() . '/assets/images/backgrounds/seo_line.svg' ?>' class='-translate-y-2'></span>
                    </p>
                    <p class="md:w-[80%]"><?= $hero_description ?></p>
                    <a href="#" target="_blank"
                        class="w-fit block bg-black text-white py-2 px-6 rounded-lg text-sm font-normal my-3">
                        Let's Talk
                    </a>
                </div>

                <div class="col-span-1">
                    <img data-aos="fade-down-left" src="<?= get_template_directory_uri() . '/assets/images/backgrounds/seo_solution.png' ?>" alt="Search Engine Optimization" class=" mx-auto rounded-lg">
                </div>
            </div>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <clients> -->
    <?php
    require_once get_template_directory() . '/templates-parts/clients-part.php';
    Clients("text-seo", "text-white", "color_seo_bg.svg");
    ?>
    <!-- End </clients> -->

    <!-- Start <Strategies> -->
    <section class="bg-[#FAF1FF] w-full p-3">
        <div class="container flex md:flex-row w-full lg:w-[90%] mx-auto flex-col items-center justify-around lg:p-8 gap-5">
            <!-- Image Container -->
            <div class="w-full">
                <img src="<?php echo esc_url(get_field("strategy_image") ?: get_template_directory_uri() . '/assets/images/backgrounds/video_Cover.png'); ?>"
                    alt="Video Cover"
                    class="w-fit mx-auto" />

            </div>

            <!-- Info Text -->
            <div class="w-full px-3">
                <div data-aos="fade-left" data-aos-offset="50">
                    <h3 class="text-[16px] font-bold text-seo mb-[14px] title">OUR STRATEGIES</h3>

                    <p class="text-[25px] md:text-[30px] lg:text-[40px] font-bold leading-[50px] mt-5 hanuman-font title">
                        <?= the_field("strategy_title") ?>
                    </p>
                </div>

                <p class="py-3 md:py-6 font-normal text-[18px] md:text-[16px] lg:w-[70%] md:w-[90%] description text-lg roboto-font">
                    <?= the_field("strategy_info") ?>
                </p>

                <a class="flex items-center gap-x-5 cursor-pointer" href="<?php echo esc_url(home_url('/about')); ?>">
                    <p class="font-normal text-[16px] md:text-[16px]">Let’s Chat and make it happen</p>
                    <span class="bg-seo h-[26px] w-[26px] rounded-full text-black flex items-center justify-center">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- End </Strategies> -->

    <!-- Start <traffic> -->
    <section class="w-full p-3">
        <div class="container flex md:flex-row w-full lg:w-[90%] mx-auto flex-col items-center justify-around lg:p-8 gap-5">
            <!-- Info Text -->
            <div class="w-full px-3">
                <div data-aos="fade-right" data-aos-offset="50">
                    <h3 class="text-[16px] font-bold text-seo mb-[14px] title">organic traffic</h3>
                    <p class="text-[25px] md:text-[30px] lg:text-[40px] font-bold leading-[50px] mt-5 hanuman-font title">
                        <?= the_field("traffic_title") ?>
                    </p>
                </div>

                <p class="py-3 md:py-6 font-normal text-[18px] md:text-[16px] lg:w-[70%] md:w-[90%] description text-lg roboto-font">
                    <?= the_field("traffic_info") ?>
                </p>
            </div>

            <!-- Image Container -->
            <div class="w-full">
                <img src="<?php echo esc_url(get_field("traffic_image") ?: get_template_directory_uri() . '/assets/images/backgrounds/video_Cover.png'); ?>"
                    alt="Video Cover"
                    class="w-fit mx-auto" />
            </div>
        </div>
    </section>
    <!-- End </traffic> -->


    <!-- Start <service> -->
    <section class="py-10 px-4">
        <div class="md:w-[90%] px-5 md:px-0 mx-auto text-center" style="margin: 0 auto;">
            <!-- Header -->
            <div data-aos="fade-up" data-aos-offset="50">
                <h3 class="text-[16px] font-bold  mb-[14px] md:mb-[16px] text-seo title">traffic increase</h3>
                <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] title">
                    How It Works<br class="hidden md:block" /> Step-by-Step to Traffic Increase
                </p>
            </div>
            <p
                class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] roboto-font description">
                Our approach to increase website traffic is methodical and results-oriented.Discover our detailed strategic process to maximize your website visits.
            </p>

            <!-- Services -->
            <?php $steps = get_field("steps"); ?>
            <?php if ($steps) : ?>
                <?php foreach ($steps as $step) :
                    $title = $step['title'];
                    $desc = $step['info'];
                    $image = $step['image'];
                    $image_default = get_template_directory_uri() . '/assets/images/backgrounds/video_Cover.png'
                ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-y-4 items-center parallax mt-3">

                        <!-- Info Section -->
                        <div class="px-4 md:px-8 text-start col-span-1 md:col-span-1 info">

                            <p class="font-bold text-[40px] hanuman-font my-2 leading-10">
                                <?= $title ?>
                            </p>

                            <p class="mt-4 text-lg text-gray-700 md:w-[80%]  roboto-font">
                                <?= $desc ?>
                            </p>
                        </div>

                        <!-- Image Container -->
                        <div class="px-4 md:px-8 col-span-1 md:col-span-1">
                            <img src="<?= esc_url($image ?: $image_default) ?>"
                                alt="<?= esc_attr(strip_tags($title)) ?>" class=" object-contain mx-auto">
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </section>
    <!-- End </service> -->

    <!-- Start <partners> -->
    <?php require_once get_template_directory() . "/templates-parts/partners-part.php" ?>
    <!-- End </partners> -->

    <!-- Start <solutions> -->
    <?php require_once get_template_directory() . "/templates-parts/solutions-part.php" ?>
    <!-- End </solutions> -->

    <!-- Start <testimonials> -->
    <?php require_once get_template_directory() . "/templates-parts/testimonials-part.php";
    Testimonials()
    ?>
    <!-- End </testimonials> -->

    <!-- Start <discover> -->
    <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
    <!-- End </discover> -->

</main>

<!-- Get Footer -->
<?php get_footer(); ?>