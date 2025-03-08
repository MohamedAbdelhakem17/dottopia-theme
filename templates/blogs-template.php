<?php //Template Name: Blog Template
?>

<!-- Header -->
<?php get_header(); ?>

<main>
    <!-- Start <hero> -->
    <header class="bg-black">
        <?php
        $fallback_image = get_template_directory_uri() . '/assets/images/backgrounds/seo_solution.png';
        $selected_slug = get_field('blog_slug_selector');
        if ($selected_slug) {
            $post = get_page_by_path($selected_slug, OBJECT, 'post');
            $post_id = $post ? $post->ID : null;
            $title = $post_id ? get_the_title($post_id) : 'No Post Found';
            $image = $post_id ? get_the_post_thumbnail_url($post_id, 'full') ?: $fallback_image : $fallback_image;
            $categories = $post_id ? get_the_category($post_id) : [];
            $category = !empty($categories) ? $categories[0]->name : 'Main';
            $word_count = $post_id ? str_word_count(strip_tags(get_post_field('post_content', $post_id))) : 0;
            $reading_time = ceil($word_count / 200);
        }
        ?>

        <div class="container mx-auto py-5 min-h-[70vh] flex items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="col-span-1 flex justify-center flex-col" data-aos="fade-down-right">
                    <h1 class="text-main text-[20px] font-bold "><?= esc_html($category) ?>.
                        <span class="font-normal text-lg"><?= esc_html($reading_time) ?> mins read</span>
                    </h1>
                    <p class="md:w-[80%] text-white font-bold text-5xl leading-[60px] my-4"><?= esc_html($title) ?> </p>
                    <?php if ($post_id): ?>
                        <a href="<?= esc_url(get_permalink($post_id)) ?>" class="flex items-center gap-x-2 cursor-pointer mt-3">
                            <p class="font-normal text-[20px] text-white">Read More</p>
                            <span class="bg-main h-[28px] w-[28px] rounded-full text-black flex items-center justify-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="col-span-1 p-5">
                    <img data-aos="fade-down-left" src="<?= esc_url($image) ?>" alt="Blog Image" class="mx-auto rounded-lg object-contain">
                </div>
            </div>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <blog header> -->
    <section class="text-center p-5 mt-10">
        <div data-aos="fade-up">
            <h2 class="text-5xl font-bold mb-10">All Insights</h2>
            <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto">
                Welcome to our world! At our marketing agency, we don’t just focus on marketing, we’re passionate about
                sharing our knowledge with our visitors.
            </p>
        </div>

        <div class="flex gap-8 justify-center py-4 mt-10 category-filter">
            <button class="category-btn active px-4 py-2 min-w-[180px] rounded-lg border bg-black text-white" data-category="all">All</button>
            <?php
            $categories = get_categories();
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo '<button class="category-btn px-4 py-2 min-w-[180px] rounded-lg border border-black" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</button>';
                }
            }
            ?>
        </div>
    </section>
    <!-- End </blog header> -->

    <!-- Start <blog> -->
    <section class="py-5 px-4">
        <div class="container md:w-[90%] px-5 md:px-0 mx-auto text-center">
            <div id="blog-posts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
                <?php
                $args = array(
                    "post_type"      => "post",
                    "posts_per_page" => -1,
                );
                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()):
                    while ($blog_query->have_posts()):
                        $blog_query->the_post();
                        $post_id = get_the_ID();
                        $title = get_the_title();
                        $image = get_the_post_thumbnail_url($post_id, 'full') ?: $fallback_image;
                        $categories = get_the_category();
                        $category = !empty($categories) ? esc_html($categories[0]->name) : 'Main';
                        $word_count = str_word_count(strip_tags(get_the_content()));
                        $reading_time = ceil($word_count / 200);
                        $animation_time = $blog_query->current_post * 100;
                ?>
                        <div class="post-item relative overflow-hidden col-span-1 rounded-md" data-category="<?php echo esc_attr($categories[0]->slug); ?>" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($animation_time); ?>">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" class="fit-full w-full" loading="lazy" />
                            <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-end px-5 py-8"
                                style="background: var(--gradient-blog)">
                                <p class="text-main text-start text-[13px] font-light py-4"><?php echo esc_html($category); ?></p>
                                <h3 class="hanuman-font text-white font-bold text-2xl text-start">
                                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($title); ?></a>
                                </h3>
                                <p class="text-main text-end text-[13px]"><?php echo esc_html($reading_time . " mins read"); ?></p>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- End </blog> -->
</main>

<!-- Footer -->
<?php get_footer(); ?>