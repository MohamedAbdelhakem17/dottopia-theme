<?php
// Template Name: Careers Single
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>
    <?php while (have_posts()) : the_post();
        $content = get_field("job_description") ?? '';
        $job_location = get_field('job_location') ?? '';
        $job_time_type = get_field('job_time_type') ?? '';
        $job_level = get_field('job_level') ?? '';
        $job_title = get_field('job_title') ?? '';
        $categories = get_the_category(get_post(get_the_ID()));
        $category = !empty($categories) ? $categories[0]->name : 'main';

        // Responsibilities and skills handling
        $responsibilities =  get_field("responsibilities");
        $skills_and_qualifications = get_field("skills_and_qualifications");
        function render_list($items)
        {
            if (empty($items)) return '';

            // Base classes with responsive typography and spacing
            $output = '<ul class="list-disc pl-5 py-2 md:pl-6 lg:pl-8 ' .
                'text-gray-800 font-sans ' .
                'data-aos=\"fade-in\" data-aos-delay=\"500\">';

            foreach ($items as $item) {
                $output .= '<li class="py-2 md:py-3 ' .
                    'text-base md:text-lg lg:text-xl ' .
                    'font-normal leading-relaxed ' .
                    'text-gray-800 hover:text-gray-600 transition-colors duration-200">' .
                    esc_html($item["item"]) . '</li>';
            }

            $output .= '</ul>';
            return $output;
        }
    ?>

        <!-- Basic data  -->
        <section class="bg-[#FFF9E5] py-5 bg-no-repeat 
                bg-contain sm:bg-contain md:bg-contain 
                bg-[right_top] sm:bg-[right_center] md:bg-[right_center] lg:bg-[right_center]"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/dottopia_career.png')">
            <div class="container mx-auto px-4 flex flex-col items-start justify-center min-h-[70vh]">
                <p class="text-[16px] font-bold uppercase tracking-wide"
                    data-aos="fade-down"
                    data-aos-anchor-placement="top-bottom">
                    Jobs / <?= $category ?>
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-main mt-4 mb-6"
                    data-aos="fade-right"
                    data-aos-anchor-placement="top-bottom">
                    <?= $job_title ?>
                </h2>

                <p class="text-lg leading-relaxed mb-4 md:w-1/2 font-normal"
                    data-aos="fade-left"
                    data-aos-anchor-placement="top-bottom">
                    <?php echo esc_html($content); ?>
                </p>

                <p class="font-medium mt-4 text-[18px] text-gray-800"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <?php echo esc_html($job_location); ?> •
                    <?php echo esc_html($job_time_type); ?> •
                    <?php echo esc_html($job_level); ?>
                </p>

                <a href="#"
                    class="mt-6 inline-block bg-black text-white py-2 px-6 rounded-lg text-lg font-normal hover:bg-gray-900 transition-colors"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    Apply Now
                </a>
            </div>
        </section>

        <!-- Main Data -->
        <section class="container mx-auto py-8 px-4">
            <!-- Responsibilities Section -->
            <?php if ($responsibilities) : ?>
                <h2 class="text-main text-[30px] md:text-[40px] font-bold py-5" data-aos="fade-down">Responsibilities</h2>
                <?php echo render_list($responsibilities); ?>
            <?php endif; ?>

            <!-- Skills and Qualifications Section -->
            <?php if ($skills_and_qualifications): ?>
                <h2 class="text-main text-[30px] md:text-[40px] font-bold py-5" data-aos="fade-down">Skills and Qualifications</h2>
                <?php echo render_list($skills_and_qualifications); ?>
                </div>
            <?php endif ?>
            <!-- Apply Button -->

            <div class="mt-6">
                <a href="#" target="_blank" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    class="w-fit block bg-main text-black py-2 px-6 rounded-lg text-lg font-normal mx-auto">
                    Apply Now
                </a>
            </div>
        </section>

        <!-- Start <Team benefits> -->
        <?php require_once get_template_directory() . "/templates-parts/team-benefits-part.php" ?>
        <!-- End </Team benefits> -->

        <!-- Start <discover> -->
        <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
        <!-- End </discover> -->

    <?php endwhile; ?>
</main>

<!-- Footer -->
<?php get_footer(); ?>