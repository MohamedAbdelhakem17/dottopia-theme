<?php
function blog($number = 3, $color = "main")
{ ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
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

                <div class="relative overflow-hidden col-span-1 rounded-md">

                    <!-- Image -->
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>"
                        class="fit-full w-full" loading="lazy" />

                    <!-- Text -->
                    <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-end px-5 py-8"
                        style="background: var(--gradient-blog)">
                        <p class="text-<?=$color?> text-start text-[13px] font-light py-4">
                            <?php echo esc_html($category); ?>
                        </p>
                        <h3 class="font-<?=$color?> text-white font-bold text-2xl text-start">
                            <a href="<?php echo esc_url(get_permalink($post_id)); ?>"> <?php echo esc_html($title); ?></a>
                        </h3>
                        <p class="text-<?=$color?> text-end text-[13px]">
                            <?php echo esc_html($reading_time . " mins read"); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php } ?>