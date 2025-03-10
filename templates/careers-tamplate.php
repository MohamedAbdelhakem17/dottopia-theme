<?php // Template Name: Careers Page  
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>

    <!-- Start <hero> -->
    <header class="w-full md:min-h-screen h-[50vh]  bg-black  overflow-hidden">
        <!-- Content -->
        <div class="container w-full min-h-full flex items-center justify-center flex-col p-5  z-10 mx-auto">
            <p class="capitalize text-white text-center text-lg sm:text-xl md:text-4xl lg:text-5xl hanuman-font leading-snug md:leading-[54px] mx-auto max-w-4xl"
                data-aos="zoom-in-down">
                We’re not just building <span class="font-bold text-main">careers</span>
                <br class="block sm:hidden">
                <span class="block sm:inline">we’re shaping the future of</span>
                <br class="hidden sm:block">
            <h1 class="text-main font-bold capitalize text-center text-lg sm:text-xl md:text-4xl lg:text-5xl hanuman-font leading-snug md:leading-[54px] mx-auto inline"
                data-aos="fade-down" data-aos-delay="200">digital marketing.</h1>
            </p>

            <p class="font-roboto my-4 md:my-8 font-normal text-white text-center mx-auto max-w-2xl text-sm sm:text-base md:text-lg"
                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                Are you passionate about making an impact and driving results?
                <br class="hidden md:block">
                Explore our opportunities and become a part of our dynamic team.
            </p>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <who we are> -->
    <section class="bg-[#FFF9E5] w-full p-3">
        <div
            class="container flex md:flex-row w-full lg:w-[90%] mx-auto flex-col items-center justify-around lg:p-8 gap-5">

            <!-- Image Container -->
            <div class="w-full ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dottopia_3.png'); ?>"
                    alt="Video Cover" class="w-full mx-auto" />
            </div>

            <!-- Info Text -->
            <div class="w-full px-3">
                <div data-aos="fade-left">
                    <h3 class="text-[16px] font-bold text-main mb-[14px] title">About Dottopia</h3>

                    <p
                        class="text-[25px] md:text-[30px] lg:text-[40px] font-bold leading-[50px] mt-5 hanuman-font title">
                        Who We Are
                    </p>
                </div>

                <p class="py-3 md:py-6 font-normal text-[18px] md:text-[16px] lg:w-[70%] md:w-[90%] description">
                    At Dottopia digital marketing company, we’re a passionate team of digital innovators, creators, and
                    strategists dedicated to helping brands shine in the digital landscape. Our journey began with a
                    simple idea: to blend creativity with data-driven strategies to deliver impactful digital marketing
                    solutions.
                </p>
            </div>
        </div>
    </section>
    <!-- End </who we are> -->

    <!-- Start <gallery > -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-[40px] text-center hanuman-font font-bold"
            data-aos="fade-down">
            Meet The People Behind Dottopia
        </h2>
        <div class="mt-6 flex justify-center">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dottopia_2.png'); ?>"
                data-aos="fade-in"
                alt="Meet The People Behind Dottopia"
                class="w-full max-w-2xl sm:max-w-3xl md:max-w-4xl lg:max-w-5xl h-auto object-cover">
        </div>
    </div>
    <!-- End </gallery > -->

    <!-- Start <benefits> -->
    <?php require_once get_template_directory() . "/templates-parts/team-benefits-part.php" ?>
    <!-- End </benefits> -->

    <!-- Start <jobs> -->
    <section class="bg-main w-full p-6 md:p-8 lg:p-10">
        <div class="container mx-auto">
            <!-- HEADER -->
            <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                <h2 class="text-center font-bold hanuman-font text-base md:text-lg">
                    Explore Digital Marketing Jobs
                </h2>
                <p class="text-center text-black font-bold text-2xl md:text-3xl lg:text-[40px]">
                    Open Vacancies at Dottopia
                </p>
            </div>

            <!-- Jobs Listing -->
            <?php
            $args = array(
                "post_type"      => "careers",
                "posts_per_page" => -1,
            );

            $jobs = new WP_Query($args);
            if ($jobs->have_posts()) :
                while ($jobs->have_posts()) :
                    $jobs->the_post();
                    $desc = get_post_meta(get_the_ID(), "job_description", true);
                    $categories = get_the_category((get_the_ID()));
                    $category = !empty($categories) ? $categories[0]->name : 'main';
            ?>
                    <div class="bg-white rounded-md w-full sm:w-[95%] mx-auto py-4 my-10" data-aos="fade-in">
                        <!-- Job Heading -->
                        <div class="flex flex-col lg:flex-row justify-between items-center py-4 px-4 sm:px-6 md:px-10 gap-4">
                            <h3 class="font-bold hanuman-font text-xl sm:text-2xl md:text-3xl">
                                <?php the_title(); ?>
                            </h3>
                            <a href="<?php the_permalink(); ?>" class="flex items-center gap-x-2 cursor-pointer">
                                <p class="font-normal text-sm md:text-base">Apply Now</p>
                                <span class="bg-main h-7 w-7 rounded-full text-black flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>

                        <!-- Job Content -->
                        <div class="p-4 md:p-6 rounded-lg border-transparent border-[2px] border-t-main px-4 sm:px-6 md:px-10">
                            <p class="text-sm md:text-[15px] font-normal text-[#3A3A3A] w-full md:w-[90%] my-2 leading-[1.8]">
                                <?php echo esc_html($desc); ?>
                            </p>
                            <span class="inline-block rounded-full px-6 py-2 text-base font-[400] bg-main/40 my-3">
                                <?= $category ?>
                            </span>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
    <!-- End </jobs> -->

    <!-- Start <discover> -->
    <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
    <!-- End </discover> -->

</main>
<!-- Footer -->

<?php get_footer(); ?>