<?php
function case_studies($cases_number = 2, $background_color = "bg-main")
{
    $fallback_image = get_template_directory_uri() . '/assets/images/backgrounds/seo_solution.png';

    $args = array(
        "post_type"      => "case_studies",
        "posts_per_page" => $cases_number,
        "fields"         => "ids",
    );

    $case_studies_query = new WP_Query($args);

    if ($case_studies_query->have_posts()): ?>
        <div class="<?= esc_attr($background_color); ?> px-4 sm:px-6 lg:px-8">
            <?php while ($case_studies_query->have_posts()):
                $case_studies_query->the_post();
                $post_id = get_the_ID();

                $main_title  = get_the_title($post_id);
                $title       = get_field("hero_title", $post_id) ?: 'Default Title';
                $description = get_field("hero_discreption", $post_id) ?: 'No description available.';
                $statistics  = get_field("hero_statistics", $post_id) ?: [];
                $image       = get_the_post_thumbnail_url($post_id, 'full') ?: $fallback_image;

                $categories = get_the_category($post_id);
                $category = !empty($categories) ? $categories[0]->name : 'main';
                $category_slug = !empty($categories) ? $categories[0]->slug : 'main';
            ?>

                <div class="post-item bg-white rounded-md w-full max-w-7xl mx-auto py-4 my-6 sm:my-8 lg:my-10 fade"
                    data-aos="zoom-in" data-aos-duration="1000" data-category="<?php echo esc_attr($category_slug); ?>">
                    <!-- heading -->
                    <div
                        class="flex flex-col sm:flex-row flex-wrap justify-between items-start sm:items-center py-4 px-4 sm:px-6 lg:px-10 gap-4">
                        <h3 class="font-bold hanuman-font text-xl sm:text-2xl lg:text-3xl" data-aos="fade-right"
                            data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                            <?= esc_html($main_title); ?>
                        </h3>
                        <a href="<?= esc_url(get_permalink($post_id)); ?>"
                            class="flex items-center gap-x-2 cursor-pointer mt-2 sm:mt-0">
                            <p class="font-normal text-xs sm:text-sm">Show Full Case</p>
                            <span
                                class="bg-main h-6 w-6 sm:h-7 sm:w-7 rounded-full text-black flex items-center justify-center">
                                <i class="fa-solid fa-arrow-right text-xs sm:text-sm"></i>
                            </span>
                        </a>
                    </div>

                    <!-- content -->
                    <div class="p-4 rounded-lg border-transparent border-[2px] border-t-<?= esc_attr(detect_color($category_slug)); ?> 
                                grid grid-cols-1 md:grid-cols-5 gap-4 sm:gap-6 lg:gap-8 px-4 sm:px-6 lg:px-10">
                        <!-- Image -->
                        <div class="md:col-span-2 self-center">
                            <img src="<?= esc_url($image); ?>" alt="<?= esc_attr($main_title); ?> Image"
                                class="w-full h-auto rounded-md object-cover max-h-[400px]" />

                            <!-- category button -->
                            <h4 class="bg-main text-white px-3 py-1 sm:px-4 sm:py-2 
                                       rounded-[50px] font-normal text-xs sm:text-sm mt-3 sm:mt-4 w-fit">
                                <?= esc_html($category); ?>
                            </h4>
                        </div>

                        <!-- Content info -->
                        <div class="md:col-span-3 py-4 flex flex-col gap-y-4 sm:gap-y-6">
                            <h5 class="font-normal hanuman-font text-xl sm:text-2xl md:text-3xl lg:text-4xl mb-3 sm:mb-4 lg:mb-6"
                                data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                <?= esc_html($title); ?>
                            </h5>
                            <p class="text-sm sm:text-base font-normal text-[#3A3A3A] w-full">
                                <?= esc_html($description); ?>
                            </p>

                            <!-- details -->
                            <div class="mt-4 sm:mt-6 flex flex-wrap items-start gap-3 sm:gap-4 justify-center md:justify-start"
                                data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                <?php if (!empty($statistics) && is_array($statistics)): ?>
                                    <?php foreach ($statistics as $statistic): ?>
                                        <div class="text-center">
                                            <span class="block font-bold hanuman-font text-2xl sm:text-3xl md:text-4xl lg:text-5xl 
                                                        bg-black py-2 px-3 sm:py-3 sm:px-4 text-white relative overflow-hidden 
                                                        rounded-[5px] after:absolute after:top-[100%] after:left-[50%] 
                                                        after:w-[15px] after:h-[15px] after:bg-white 
                                                        after:z-[2] after:transform after:-translate-x-[50%] after:-translate-y-[50%] 
                                                        after:rotate-[-45deg] after:rounded-tr-[2px]">
                                                <?= esc_html($statistic["hero_statistics_number"]); ?>
                                                <span class="text-lg sm:text-xl md:text-2xl">%</span>
                                            </span>

                                            <p class="text-xs  font-light roboto-font text-gray-900 mt-2 ">
                                                <?= esc_html($statistic["hero_statistics_title"]); ?>
                                            </p>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    <?php else: ?>
        <p class="text-center py-8">No case studies found.</p>
<?php endif;
}
?>