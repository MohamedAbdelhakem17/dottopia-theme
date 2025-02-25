<?php // Template Name: Careers Page  
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>

    <!-- Start <hero> -->
    <header class="w-full h-screen bg-black relative overflow-hidden">
        <!-- Content -->
        <div class="container w-full h-full flex items-center justify-center flex-col p-5 relative z-10 mx-auto">
            <h3 class="capitalize text-white text-center text-[20px] leading-[1.6] md:text-5xl font-main md:leading-[54px] mx-auto"
                data-inview="text-fadeInUp">
                We’re not just building <span class="font-bold text-main">careers</span> <br>
                we’re shaping the future of 
                <br>
                <span class="text-main font-bold">digital marketing. </span>
            </h3>

            <p class="font-roboto my-4 md:my-8 font-normal text-white text-center mx-auto" data-inview="text-fadeInUp">
                Are you passionate about making an impact and driving results?
                <br class="hidden md:block">  Explore our opportunities and become a part of our dynamic team.
            </p>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <who we are> -->
    <section class="bg-[#FFF9E5] w-full p-3">
        <div class="container flex md:flex-row w-full lg:w-[90%] mx-auto flex-col items-center justify-around lg:p-8 gap-5">

            <!-- Image Container -->
            <div class="w-full ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dottopia_3.png'); ?>" alt="Video Cover" class="w-full mx-auto" />
            </div>

            <!-- Info Text -->
            <div class="w-full px-3">
                <h3 class="text-[16px] font-bold text-main mb-[14px] title">About Dottopia</h3>

                <p class="text-[25px] md:text-[30px] lg:text-[40px] font-bold leading-[50px] mt-5 font-main title">
                    Who We Are
                </p>

                <p class="py-3 md:py-6 font-normal text-[18px] md:text-[16px] lg:w-[70%] md:w-[90%] description">
                    At Dottopia digital marketing company, we’re a passionate team of digital innovators, creators, and strategists dedicated to helping brands shine in the digital landscape. Our journey began with a simple idea: to blend creativity with data-driven strategies to deliver impactful digital marketing solutions.
                </p>
            </div>
        </div>
    </section>
    <!-- End </who we are> -->


    <!-- Start <gallery > -->
    <section class="py-10">
        <div class="container mx-auto">
            <h2 class="text-[40px] text-center font-main font-bold">Meet The People Behind Dottopia</h2>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dottopia_2.png'); ?>" alt="Meet The People Behind Dottopia" class="w-full mx-auto">
        </div>
    </section>
    <!-- End </gallery > -->

    <!-- Start <benefits> -->
    <?php require_once get_template_directory() . "/templates-parts/team-benefits-part.php" ?>
    <!-- End </benefits> -->

    <!-- Start <jobs> -->
    <section class="bg-main w-full p-6">
        <div class="container mx-auto">
            <!-- HEADER -->
            <h2 class="text-center font-bold font-main text-[16px]">
                Explore Digital Marketing Jobs
            </h2>
            <p class="text-center text-black font-bold text-[40px]">
                Open Vacancies at Dottopia
            </p>

            <!-- Jobs Listing -->
            <?php
            $args = array(
                "post_type"      => "careers",
                "posts_per_page" => -1, // Corrected to an integer
            );

            $jobs = new WP_Query($args);
            if ($jobs->have_posts()) :
                while ($jobs->have_posts()) :
                    $jobs->the_post();
                    $desc = get_post_meta(get_the_ID(), "job_description", true);
            ?>
                    <div class="bg-white rounded-md w-full sm:w-[95%] mx-auto py-4 my-10 fade">
                        <!-- Job Heading -->
                        <div class="flex flex-wrap justify-between items-center py-4 px-10">
                            <h3 class="font-bold font-main text-2xl md:text-3xl">
                                <?php the_title(); ?>
                            </h3>

                            <a href="<?php the_permalink(); ?>" class="flex items-center gap-x-2 cursor-pointer mt-3 md:mt-0 md:ml-auto -translate-x-10">
                                <p class="font-normal text-[14px]">Apply Now</p>
                                <span class="bg-main h-[28px] w-[28px] rounded-full text-black flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>

                        <!-- Job Content -->
                        <div class="p-4 rounded-lg border-transparent border-[2px] border-t-main  px-10">
                            <p class="text-[14px] md:text-[15px] font-normal text-[#3A3A3A] w-full md:w-[90%] my-2 leading-[1.8]">
                                <?php echo esc_html($desc); ?>
                            </p>
                            <!-- tag -->
                            <span class="inline-block rounded-full px-6 py-2 text-[16px] font-[400] bg-main my-3"> Digital</span>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data after the loop
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