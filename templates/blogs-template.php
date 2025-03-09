<?php //Template Name: Blog Template
?>

<!-- Header -->
<?php get_header(); ?>

<main>
    <!-- Start <hero> -->
    <header class="bg-black py-10">
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

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-5 min-h-[70vh] flex items-center mt-10 mt-0">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">
                <div class="col-span-1 flex justify-center flex-col order-2 lg:order-1" data-aos="fade-down-right">
                    <h1 class="text-main text-[16px] sm:text-[20px] font-bold">
                        <?= esc_html($category) ?>.
                        <span class="font-normal text-sm sm:text-lg"><?= esc_html($reading_time) ?> mins read</span>
                    </h1>
                    <p class="text-white font-bold text-3xl sm:text-4xl md:text-5xl leading-tight sm:leading-[48px] md:leading-[60px] my-4 w-full md:w-[80%]">
                        <?= esc_html($title) ?>
                    </p>
                    <?php if ($post_id): ?>
                        <a href="<?= esc_url(get_permalink($post_id)) ?>" class="flex items-center gap-x-2 cursor-pointer mt-3 w-fit">
                            <p class="font-normal text-base sm:text-[20px] text-white hover:text-main transition-colors">Read More</p>
                            <span class="bg-main h-6 w-6 sm:h-7 sm:w-7 rounded-full text-black flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-arrow-right text-sm sm:text-base"></i>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="col-span-1 p-0 sm:p-5 order-1 lg:order-2">
                    <img data-aos="fade-down-left"
                        src="<?= esc_url($image) ?>"
                        alt="Blog Image"
                        class="mx-auto rounded-lg object-contain w-[90%]">
                </div>
            </div>
        </div>

    </header>
    <!-- End </hero> -->

    <!-- Start <blog header> -->
    <section class="text-center p-5 mt-10">
        <div data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 md:mb-10">All Insights</h2>
            <p class="font-light text-[13px] sm:text-[14px] md:text-[16px] lg:w-[70%] md:w-[90%] w-full mx-auto">
                Welcome to our world! At our marketing agency, we don’t just focus on marketing, we’re passionate about
                sharing our knowledge with our visitors.
            </p>
        </div>

        <div class="flex flex-wrap gap-4 sm:gap-6 md:gap-8 justify-center py-4 mt-6 md:mt-10 category-filter">
            <button class="category-btn active px-4 py-2 min-w-[140px] sm:min-w-[160px] md:min-w-[180px] rounded-lg border bg-black text-white text-sm sm:text-base" data-category="all">All</button>
            <?php
            $categories = get_categories();
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo '<button class="category-btn px-4 py-2 min-w-[140px] sm:min-w-[160px] md:min-w-[180px] rounded-lg border border-black text-sm sm:text-base" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</button>';
                }
            }
            ?>
        </div>
    </section>
    <!-- End </blog header> -->

    <!-- Start <blog> -->
    <section class="py-5 px-4">
        <div class="container md:w-[90%] px-5 md:px-0 mx-auto text-center">
            <div id="blog-posts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-10 mt-10">
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
                        <div class="post-item relative overflow-hidden col-span-1 rounded-md"
                            data-category="<?php echo esc_attr($categories[0]->slug); ?>"
                            data-aos="fade-up"
                            data-aos-delay="<?php echo esc_attr($animation_time); ?>">
                            <img src="<?php echo esc_url($image); ?>"
                                alt="<?php echo esc_attr($title); ?>"
                                class="fit-full w-full object-cover"
                                loading="lazy" />
                            <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-end px-4 sm:px-5 py-6 sm:py-8"
                                style="background: var(--gradient-blog)">
                                <p class="text-main text-start text-xs sm:text-[13px] font-light py-3 sm:py-4">
                                    <?php echo esc_html($category); ?>
                                </p>
                                <h3 class="hanuman-font text-white font-bold text-xl sm:text-2xl text-start">
                                    <a href="<?php echo esc_url(get_permalink()); ?>"
                                        class="hover:text-gray-200 transition-colors">
                                        <?php echo esc_html($title); ?>
                                    </a>
                                </h3>
                                <p class="text-main text-end text-xs sm:text-[13px] mt-2">
                                    <?php echo esc_html($reading_time . " mins read"); ?>
                                </p>
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