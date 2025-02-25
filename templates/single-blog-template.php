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
    $image      = get_the_post_thumbnail_url($post_id, 'thumbnail') ?: $fallback_image;
    // $user_avatar = get_avatar($user_id) ?: $user_avatar_fallback;
    $user_fullname = $user_info->first_name . ' ' . $user_info->last_name;

    // Content
    $blog_content = get_post_field('post_content', $post_id);
    ?>

    <!-- Start <hero> -->
    <header class="h-screen w-full bg-black text-white">

        <div class="container h-full flex flex-col items-center justify-center mx-auto">
            <h1 class="text-6xl font-bold w-[50%] text-center leading-[70px] mx-auto"><?= $title ?></h1>
            <p class="my-5 text-lg text-normal">Last updated <?= get_the_modified_date() ?></p>
            <!-- user -->
            <div class="flex gap-3.5 items-center my-3">
                <img src="<?= $user_avatar_fallback ?>" alt="<?= $user_fullname ?>" class="w-[80px] h-[80px] rounded-full">
                <p> <strong>Written by</strong> <?= $user_fullname ?></p>
            </div>
        </div>

    </header>
    <!-- End </hero> -->

    <!-- start <main content> -->
    <article class="container mx-auto relative  top-[-200px]">
        <img src="<?= $image ?>" alt="<?= $title ?>" class="object-fit mx-auto w-full aspect-[1/.4] ">
        <!-- image -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-5">
            <!-- table of Content -->
            <div class="col-span-1"></div>
            <!-- blog content -->
            <div class="col-span-2 [&_h2]:font-bold [&_h2]:text-4xl [&_h2]:w-[90%] [&_h2]:py-5 [&_p]:font-normal [&_p]:text-xl [&_p]:py-5 ">
                <?= $blog_content ?>
            </div>
        </div>

    </article>
    <!-- End </main content> -->

    <!-- Start <blog> -->
    <section class="py-5 px-4 relative  top-[-125px]">
        <div class="container md:w-[90%] px-5 md:px-0 mx-auto text-center">
            <div class="px-4">
                <!-- Header -->
                <div class="text-center">
                    <h2 class="text-[16px] font-bold text-main mb-[14px] md:mb-[16px] font-sub title">Blogs</h2>
                    <h3 class="font-bold text-3xl">Related Insights</h3>
                    <p
                        class="mb-6 text-[14px] font-normal py-3">
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