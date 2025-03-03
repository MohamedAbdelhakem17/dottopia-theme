<?php
function case_studies($cases_number = 2, $background_color = "bg-main")
{
    $fallback_image = get_template_directory_uri() . '/assets/images/backgrounds/seo_solution.png';

    $args = array(
        "post_type"      => "case_studies",
        "posts_per_page" => $cases_number,
        "fields"         => "ids", // Optimize query by fetching only post IDs

    );

    $case_studies_query = new WP_Query($args);

    if ($case_studies_query->have_posts()): ?>
        <div class="<?= esc_attr($background_color); ?>">
            <?php while ($case_studies_query->have_posts()):
                $case_studies_query->the_post();
                $post_id = get_the_ID();

                // Ensure ACF fields exist
                $main_title  = get_the_title($post_id);
                $title       = get_field("hero_title", $post_id) ?: 'Default Title';
                $description = get_field("hero_discreption", $post_id) ?: 'No description available.';
                $statistics  = get_field("hero_statistics", $post_id) ?: [];
                $image       = get_the_post_thumbnail_url($post_id, 'thumbnail') ?: $fallback_image;

                // Ensure category exists
                $categories = get_the_category($post_id);
                $category = !empty($categories) ? $categories[0]->name : 'main';
                $category_slug = !empty($categories) ? $categories[0]->slug : 'main';
            ?>

                <div class="bg-white rounded-md w-full sm:w-[95%] mx-auto py-4 my-10 fade" data-aos="zoom-in" data-aos-duration="1000">
                    <!-- heading -->
                    <div class="flex flex-wrap justify-between items-center py-4 px-10">
                        <h3 class="font-bold hanuman-font text-2xl md:text-3xl " data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="100"><?= esc_html($main_title); ?></h3>
                        <a href="<?= esc_url(get_permalink($post_id)); ?>"
                            class="flex items-center gap-x-2 cursor-pointer mt-3 md:mt-0 md:ml-auto -translate-x-10">
                            <p class="font-normal text-[12px]">Show Full Case</p>
                            <span class="bg-<?= esc_attr($category_slug); ?>  h-[28px] w-[28px] rounded-full text-black flex items-center justify-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>

                    <!-- content -->
                    <div class="p-4 rounded-lg border-transparent border-[2px] border-t-<?= esc_attr(detect_color($category_slug)); ?> grid grid-cols-1 md:grid-cols-5 gap-4 md:gap-8 px-10">
                        <!-- Image -->
                        <div class="lg:col-span-2 md:col-span-5 self-center">
                            <img src="<?= esc_url($image); ?>" alt="<?= esc_attr($main_title); ?> Image" class="w-fit md:aspect-[1/.6] rounded-md" />

                            <!-- category button -->
                            <h4 class="bg-<?= esc_attr(detect_color($category_slug)); ?> text-white px-4 py-2 rounded-[50px] font-normal text-[12px] mt-4 md:mt-6 w-fit">
                                <?= esc_html($category); ?>
                            </h4>
                        </div>

                        <!-- Content info -->
                        <div class="lg:col-span-3 md:col-span-5 py-4 flex flex-col gap-y-4">
                            <h5 class="font-normal hanuman-font text-2xl md:text-4xl mb-4 md:mb-6" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="100"><?= esc_html($title); ?></h5>
                            <p class="text-[14px] md:text-[15px] font-normal text-[#3A3A3A] w-full md:w-[90%] my-2">
                                <?= esc_html($description); ?>
                            </p>

                            <!-- details -->
                            <div class="mt-6 flex flex-wrap items-start gap-4 justify-center md:justify-start" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                <?php if (!empty($statistics) && is_array($statistics)): ?>
                                    <?php foreach ($statistics as $statistic): ?>
                                        <div>
                                            <span class="block font-bold hanuman-font text-3xl md:text-5xl bg-black py-3 px-4 md:px-5 text-white relative overflow-hidden rounded-[5px] 
                                            after:absolute after:top-[100%] after:left-[50%] after:w-[15px] after:h-[15px] after:bg-white after:z-[2] 
                                            after:transform after:-translate-x-[50%] after:-translate-y-[50%] after:rotate-[-45deg] after:rounded-tr-[2px]">
                                                <?= esc_html($statistic["hero_statistics_number"]); ?><span class="text-xl md:text-2xl">%</span>
                                            </span>
                                            <p class="text-[12px] md:text-[14px] font-light w-[100px] md:w-[120px] font-sub text-gray-900">
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
        <p class="text-center">No case studies found.</p>
<?php endif;
} ?>