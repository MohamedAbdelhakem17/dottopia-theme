<?php
// Template Name: Blog Single
?>

<!-- Header -->
<?php get_header(); ?>

<main>
    <?php
    $fallback_image = get_template_directory_uri() . "/assets/images/backgrounds/seo_solution.png";
    $user_avatar_fallback = get_template_directory_uri() . "/assets/images/user.jpg";
    $post_id    = get_the_ID();
    $user_info = get_userdata(get_post_field('post_author', $post_id));
    $user_id = $user_info->user_id;

    // Hero Section
    $title      = get_the_title($post_id);
    $image      = get_the_post_thumbnail_url($post_id, 'full') ?: $fallback_image;
    // $user_avatar = get_avatar($user_id) ?: $user_avatar_fallback;
    $user_fullname = $user_info->first_name . ' ' . $user_info->last_name;

    // Content
    $blog_content = get_post_field('post_content', $post_id);
    ?>


    <!-- Start <hero> -->
    <header class="w-full bg-black text-white py-12 md:py-16 min-h-screen flex items-center justify-center">
        <div class="container mx-auto flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-[1.2] w-full md:w-[55%] mx-auto"><?= $title ?></h1>
            <p class="mt-6 mb-4 text-base md:text-lg">Last updated <?= get_the_modified_date() ?></p>
            <!-- User -->
            <div class="flex gap-3 items-center mt-2 mb-6">
                <img src="<?= $user_avatar_fallback ?>" alt="<?= $user_fullname ?>" class="w-16 h-16 md:w-20 md:h-20 rounded-full">
                <p class="text-base md:text-lg"><strong>Written by</strong> <?= $user_fullname ?></p>
            </div>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <main content> -->
    <article class="container mx-auto relative -mt-24 md:-mt-32 px-4">
        <!-- Image -->
        <img src="<?= $image ?>" alt="<?= $title ?>" class="w-full aspect-video md:aspect-[1/.4] object-cover rounded-lg mb-6 blog-image">

        <!-- Table of Content (for small screens) -->
        <div class="block md:hidden rounded-lg mb-6">
            <div class="toc-list">
                <?php echo do_shortcode('[ez-toc header_label="Table of content" toggle_view="no" initial_view="show" heading_levels="2"]'); ?>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative">
            <!-- Table of Content and Form (Sticky Sidebar for md and larger screens) -->
            <div class="hidden md:block md:col-span-1 md:sticky md:top-20 md:h-fit">
                <!-- Table of Contents -->
                <div class="toc-list">
                    <?php echo do_shortcode('[ez-toc header_label="Table of content" toggle_view="no" initial_view="show" heading_levels="2"]'); ?>
                </div>

                <!-- Action Form -->
                <div class="action-form">
                    <?php echo do_shortcode('[contact-form-7 id="b71e6e5" title="action form"]'); ?>
                </div>
            </div>
            <?php echo do_shortcode('[wpforms id="512"]'); ?>

            <!-- Blog Content -->
            <div class="col-span-1 md:col-span-2 [&_h2]:font-bold [&_h2]:text-2xl md:[&_h2]:text-4xl [&_h2]:w-full md:[&_h2]:w-[90%] [&_h2]:py-4 [&_p]:font-normal [&_p]:text-base md:[&_p]:text-xl [&_p]:py-4 [&_p]:mb-5">
                <?= $blog_content ?>
            </div>
        </div>

        <!-- Action Form  (for small screens) -->
        <div class="block md:hidden rounded-lg mb-6">
            <div class="action-form">
                <?php echo do_shortcode('[contact-form-7 id="b71e6e5" title="action form"]'); ?>
            </div>
        </div>
    </article>
    <!-- End </main content> -->

    <!-- Start <blog> -->
    <section class="py-5 px-4">
        <div class="container md:w-[90%] md:px-0 mx-auto text-center">
            <div>
                <!-- Header -->
                <div class="text-center">
                    <h2 class="text-[16px] font-bold text-main mb-[5px] md:mb-[16px] roboto-font title">Blogs</h2>
                    <h3 class="font-bold text-3xl">Related Insights</h3>
                    <p
                        class="mb-4 text-[14px] font-normal py-3">
                        Welcome to our world! At our marketing agency, we don’t just focus on marketing, <br class="hidden md:block"> we’re passionate about sharing our knowledge with our visitors.
                    </p>
                </div>
                <?php require_once get_template_directory() . "/templates-parts/blog-part.php";
                blog()
                ?>
            </div>
    </section>
    <!-- End </blog -->

    <!-- Start <discover> -->
    <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
    <!-- End </discover> -->
</main>


<!-- Footer -->
<?php get_footer(); ?>