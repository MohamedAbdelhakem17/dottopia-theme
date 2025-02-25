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

        // Responsibilities and skills handling
        $responsibilities =  get_field("responsibilities");
        $skills_and_qualifications = get_field("skills_and_qualifications");
        function render_list($items)
        {
            if (empty($items)) return '';
            $output = '<ul class="list-disc pl-5 py-2">';
            foreach ($items as $item) {
                $output .= '<li class="py-3 font-normal text-[20px]">' . esc_html($item["item"]) . '</li>';
            }
            $output .= '</ul>';
            return $output;
        }
    ?>

        <!-- Basic data  -->
        <section class="bg-[#FFF9E5] py-5"
            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/dottopia_career.png') center right/contain  no-repeat, #FFF9E5">
            <div class=" container mx-auto flex flex-col items-start justify-center min-h-[70vh]">
                <p class="text-[16px] font-bold uppercase">Jobs / Digital Communication</p>
                <h2 class="text-5xl font-bold text-main mt-4 mb-6">Senior Graphic Designer</h2>
                <p class=" text-lg leading-relaxed mb-4 md:w-[50%] font-normal">
                    <?php echo esc_html($content); ?>
                </p>
                <p class=" font-[500] mt-4  text-[18px]">
                    <?php echo esc_html($job_location); ?> • <?php echo esc_html($job_time_type); ?> • <?php echo esc_html($job_level); ?>
                </p>
                <a href="#" class="mt-6 inline-block bg-black text-white py-2 px-6 rounded-lg text-lg font-normal">Apply Now</a>
            </div>
        </section>

        <!-- Main Data -->
        <section class="container mx-auto py-8 px-4">
            <!-- Responsibilities Section -->
            <h2 class="text-main text-[40px] font-bold py-5">Responsibilities</h2>
            <?php echo render_list($responsibilities); ?>

            <!-- Skills and Qualifications Section -->
            <h2 class="text-main text-[40px] font-bold py-5">Skills and Qualifications</h2>
            <?php echo render_list($skills_and_qualifications); ?>
            </div>
            <!-- Apply Button -->

            <div class="mt-6">
                <a href="#" target="_blank"
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