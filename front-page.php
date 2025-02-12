<?php get_header(); ?>

<main class="site-content">
    <!-- Hero Section  -->
    <?php include get_template_directory() . '/components/Home/Hero/hero.php'; ?>
    <!-- Clients Section  -->
    <?php include get_template_directory() . '/components/Home/Clients/clients.php'; ?>
    <!-- Who We Are Section  -->
    <?php include get_template_directory() . '/components/Home/WhoWeAre/whoWeAre.php'; ?>
    <!-- Roadblocks Section  -->
    <?php include get_template_directory() . '/components/Home/Roadblocks/roadblocks.php'; ?>
    <!-- Server Section -->
    <?php include get_template_directory() . '/components/Home/Service/service.php'; ?>
    <!-- Partners Section -->
    <?php include get_template_directory() . '/components/Home/Partners/partners.php'; ?>
    <!-- Book Section -->
    <?php include get_template_directory() . '/components/Home/Book/book.php'; ?>
    <!-- Testimonial Section -->
    <?php include get_template_directory() . '/components/Home/Testimonial/testimonial.php'; ?>
    <!-- Insights Section -->
    <?php include get_template_directory() . '/components/Home/Insights/insights.php'; ?>
    <!-- Discover Section -->
    <?php include get_template_directory() . '/components/Home/Discover/discover.php'; ?>
</main>

<?php get_footer(); ?>