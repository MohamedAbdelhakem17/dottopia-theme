<?php //Template Name: Case Studies Template
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->

<main class="bg-[#FFF9E5] pt-3">

    <!-- Header -->
    <div class="text-center px-4 py-10 md:py-20 my-4 md:my-0" data-aos="fade-down" data-aos-delay="200">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 md:mb-10 mt-10 md:mt-0">OUR WORK</h2>
        <div class="flex flex-wrap gap-4 md:gap-8 lg:gap-16 justify-center py-4">
            <button
                class="category-btn px-4 py-2 text-center w-full sm:w-auto min-w-[150px] sm:min-w-[180px] cursor-pointer rounded-lg bg-black text-white border hover:bg-gray-800 transition-colors"
                data-category="all">
                All
            </button>
            <?php
            $categories = get_categories();
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo '<button class="category-btn px-4 py-2 w-full sm:w-auto min-w-[150px] sm:min-w-[180px] rounded-lg border border-black hover:bg-gray-100 transition-colors" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</button>';
                }
            }
            ?>
        </div>
    </div>
    
    <!-- Start <case studies> -->
    <?php require_once get_template_directory() . "/templates-parts/case-studies-part.php";
    case_studies(-1, "bg-[#FFF9E5]", false)
    ?>
    <!-- End </case studies> -->

    <!-- Start <discover> -->
    <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
    <!-- End </discover> -->
</main>

<!-- Footer -->
<?php get_footer(); ?>