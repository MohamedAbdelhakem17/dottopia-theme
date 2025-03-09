<?php
function blog($number = 3, $color = "main")
{ ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 px-4 sm:px-6 lg:px-8">
        <?php
        $fallback_image = get_template_directory_uri() . '/assets/images/backgrounds/seo_solution.png';
        $args = array(
            "post_type"      => "post",
            "posts_per_page" => $number,
            "fields"         => "ids",
        );
        $blog_query = new WP_Query($args);
        ?>
        <?php if ($blog_query->have_posts()): ?>
            <?php while ($blog_query->have_posts()):
                $blog_query->the_post();
                $post_id    = get_the_ID();
                $title      = get_the_title($post_id);
                $image      = get_the_post_thumbnail_url($post_id, 'full') ?: $fallback_image;
                $categories = get_the_category($post_id);
                $category   = !empty($categories) ? $categories[0]->name : 'main';

                $word_count = str_word_count(strip_tags(get_the_content()));
                $reading_time = ceil($word_count / 200);
            ?>
                <div class="relative overflow-hidden rounded-md w-full">
                    <!-- Image with responsive height -->
                    <img src="<?php echo esc_url($image); ?>"
                        alt="<?php echo esc_attr($title); ?>"
                        class="w-full h-48 sm:h-56 md:h-auto  object-cover"
                        loading="lazy" />

                    <!-- Text Overlay -->
                    <div class="absolute inset-0 flex flex-col justify-end p-4 sm:p-5"
                        style="background: var(--gradient-blog)">
                        <p class="text-<?php echo $color; ?> text-start text-xs sm:text-[13px] font-light py-2 sm:py-4">
                            <?php echo esc_html($category); ?>
                        </p>
                        <h3 class="font-<?php echo $color; ?> text-white font-bold text-lg sm:text-xl md:text-2xl text-start">
                            <a href="<?php echo esc_url(get_permalink($post_id)); ?>"
                                class="hover:underline">
                                <?php echo esc_html($title); ?>
                            </a>
                        </h3>
                        <p class="text-<?php echo $color; ?> text-end text-xs sm:text-[13px] mt-2">
                            <?php echo esc_html($reading_time . " mins read"); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
<?php } ?>