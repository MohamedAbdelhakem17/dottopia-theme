<?php //Template Name: Case Studies Template
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->

<main class="bg-[#FFF9E5] pt-3">
    <div class="text-center p-20">
        <h2 class="text-5xl font-bold mb-10">OUR WORK</h2>
        <div class="flex gap-16 justify-center py-4">
            <button class="px-4 py-2 text-center min-w-[180px] cursor-pointer inline-block rounded-lg bg-black text-white">All</button>
            <?php
            $categories = get_categories();
            if (! empty($categories)) {
                foreach ($categories as $category) {
                    echo '<button class="px-4 py-2 text-center min-w-[180px] cursor-pointer inline-block rounded-lg border border-black">' . $category->name . '</button>';
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