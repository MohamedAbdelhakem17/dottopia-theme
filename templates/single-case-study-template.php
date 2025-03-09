<?php
// Template Name: Career Single

get_header();

while (have_posts()) : the_post();
    $fallback_image = get_template_directory_uri() . "/assets/images/backgrounds/seo_solution.png";
    // Hero Data
    $case_title = get_field("hero_title") ?? '';
    $hero_description = get_field("hero_discreption") ?? '';
    $hero_statistics = get_field("hero_statistics") ?? '';
    $category = wp_get_post_terms(get_the_ID(), 'category');
    $service_link = get_field('service_link')["url"] ?? '';
    $category_slug = $category[0]->slug ?? "main";
    $service_name = $category[0]->name ?? '';


    // About Data
    $about_title = get_field("about_title") ?? '';
    $about_description = get_field("about_info") ?? '';
    $what_we_did = get_field("what_we_did") ?? '';
    $about_statistics  = get_field("about_statistics") ?? '';
    $challenges = get_field("challenges") ?? "";
    // Strategy Data
    $strategy__title = get_field("strategy__title") ?? '';
    $strategy_description = get_field("strategy_discription") ?? '';
    $challenges = get_field("challenges") ?? '';

    // Solution Data
    $solution  = get_field("solution") ?? '';

    // Results Data
    $result_text = get_field("result_text") ?? '';
    $results_statistics = get_field("results_statistics") ?? '';

    $result_text = get_field("result_text") ?? [];
    $result_image = get_field("result_image") ?? [];
?>

    <main>
        <!-- Start <hero> -->
        <header class="py-5">
            <div class="container mx-auto py-5 px-4 sm:px-6 lg:px-8">
                <!-- First Row -->
                <div class="lg:w-[50%] mb-6 lg:mb-8">
                    <a href="<?php echo esc_url(home_url('/case-studies')); ?>"
                        class="flex items-center gap-x-4 mt-10 mb-4">
                        <span
                            class="w-6 h-6 rounded-full bg-<?= esc_attr(detect_color($category_slug)); ?> flex items-center justify-center">
                            <i class="fa-solid fa-arrow-left text-[14px]"></i>
                        </span>
                        <span class="text-base font-bold uppercase">Our Work</span>
                    </a>
                    <h1 class="text-3xl sm:text-4xl md:text-[47px] font-bold"><?php echo esc_html($case_title); ?></h1>

                    <p class="my-5 flex flex-wrap items-center gap-2">
                        <span
                            class="bg-<?= esc_attr(detect_color($category_slug)); ?> text-white py-1 px-5 rounded-full text-base">
                            <?= esc_html($service_name); ?>
                        </span>
                        <span class="text-base sm:text-lg font-normal p-2"><?php echo esc_html(the_date()); ?></span>
                    </p>

                    <p class="py-4 text-sm sm:text-base font-normal my-5"><?php echo esc_html($hero_description); ?></p>
                </div>

                <!-- Second Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-6">
                    <div class="col-span-1">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url() ?: $fallback_image); ?>"
                            alt="<?php echo esc_attr(get_the_title()); ?>"
                            class="w-full aspect-[1/0.8] md:aspect-[1/0.5] object-cover">
                    </div>

                    <div class="col-span-1">
                        <!-- details -->
                        <div class="mx-0 md:mx-6 flex flex-col items-start gap-4 justify-evenly h-full py-4 md:py-0">
                            <?php if (!empty($hero_statistics) && is_array($hero_statistics)): ?>
                                <?php foreach ($hero_statistics as $statistic): ?>
                                    <div class="flex items-center gap-x-4 w-full">
                                        <span
                                            class="block font-bold hanuman-font text-3xl md:text-5xl bg-black py-3 px-4 md:px-5 text-white relative overflow-hidden rounded-[5px] 
                                    after:absolute after:top-[50%] after:left-[100%] after:w-[15px] after:h-[15px] after:bg-white after:z-[2] 
                                    after:transform after:-translate-x-[50%] after:-translate-y-[50%] after:rotate-[-45deg] after:rounded-tr-[2px] shrink-0">
                                            <?= esc_html($statistic["hero_statistics_number"]); ?>
                                            <span class="text-xl md:text-2xl">%</span>
                                        </span>
                                        <p
                                            class="text-xs sm:text-sm md:text-[14px] font-light w-[100px] md:w-[120px] roboto-font text-gray-900">
                                            <?= esc_html($statistic["hero_statistics_title"]); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End </hero> -->

        <!-- Start <about> -->
        <section class="bg-<?= esc_attr(detect_color($category_slug)); ?>/20 py-10">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- First Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
                    <div class="col-span-1 lg:col-span-2 py-3">
                        <h3 class="font-bold py-3 text-2xl sm:text-3xl md:text-4xl capitalize"><?= esc_html($about_title); ?></h3>
                        <p class="text-base sm:text-lg font-normal leading-8 sm:leading-[40px] lg:w-[80%]"><?= esc_html($about_description); ?></p>
                    </div>

                    <div class="col-span-1 bg-white p-4 sm:p-5 rounded-lg">
                        <h3 class="text-center py-3 font-bold text-2xl sm:text-3xl md:text-4xl">WHAT WE DID</h3>
                        <ul class="list-disc list-inside [&_li]:border-t-[1px] [&_li]:border-gray-300 [&_li]:py-3 sm:[&_li]:py-5 [&_li]:text-base sm:[&_li]:text-[18px] [&_li]:px-3 [&_li]:my-2">
                            <?php if (is_array($what_we_did)): ?>
                                <?php foreach ($what_we_did as $item): ?>
                                    <li><?= esc_html($item["item"]); ?></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>

                        <a href="<?= esc_url($service_link); ?>" class="flex items-center gap-x-4 my-4 justify-center">
                            <span class="text-base sm:text-[17px] font-normal uppercase">Go To <?= $service_name; ?> Service</span>
                            <span class="w-6 h-6 rounded-full bg-seo flex items-center justify-center">
                                <i class="fa-solid fa-arrow-right text-[14px]"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 mt-10 sm:mt-16 lg:mt-20 mb-10">
                    <?php
                    $stats = [
                        ["value" => "77%", "text" => "Of Users Click On Organic Results"],
                        ["value" => "50K", "text" => "Searches Every Day"],
                        ["value" => "92%", "text" => "Of All Search Is In Google"]
                    ];
                    ?>

                    <?php foreach ($stats as $index => $stat): ?>
                        <div class="text-center border-l-[2px] border-gray-400 p-4 sm:p-6">
                            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-black"><?php echo $stat['value']; ?></h2>
                            <p class="text-base sm:text-lg text-black mt-2"><?php echo $stat['text']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- End </about -->

        <!-- Start <STRATEGY> -->
        <section class="py-5 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto my-5">
                <h2 class="text-base sm:text-lg text-seo font-bold mt-5">OUR STRATEGY</h2>
                <h3 class="text-2xl sm:text-3xl md:text-[40px] font-bold py-4"><?= esc_html($strategy__title); ?></h3>
                <p class="w-full sm:w-[90%] font-normal text-base sm:text-lg leading-8 sm:leading-10"><?= esc_html($strategy_description); ?></p>
            </div>

            <!-- Challenge Section -->
            <?php if (is_array($challenges)) : ?>
                <div class="container mx-auto grid grid-cols-1 gap-y-6 md:gap-y-8 mt-10 sm:mt-16 lg:mt-20">
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold py-4 mb-5">Challenges</h3>
                    <?php foreach ($challenges as $index => $value) :
                        $image = $value["challenges_image"];
                        $image_url = $image['url'] ?? $fallback_image;
                        $image_alt = !empty($image['alt']) ? esc_attr($image['alt']) : 'Challenge Image';
                    ?>
                        <div class="flex flex-col md:flex-row <?= $index % 2 === 0 ? 'md:flex-row-reverse' : '' ?> items-center gap-4 lg:gap-6">
                            <!-- Image Section -->
                            <div class="w-full md:w-1/2 px-4">
                                <img src="<?= esc_url($image_url) ?>" alt="<?= $image_alt ?>" class="w-full aspect-[1/0.5] object-cover mx-auto">
                            </div>
                            <!-- Text Section -->
                            <div class="w-full md:w-1/2 px-4 text-start [&_li]:my-2 [&_li]:text-base sm:[&_li]:text-[17px] [&_ul]:list-disc [&_ul]:list-inside">
                                <?= $value['challenges_items'] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
        <!-- End </STRATEGY> -->

        <!-- Start <solution> -->
        <section class="py-5 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto my-5">
                <h2 class="text-2xl sm:text-3xl md:text-[40px] font-bold py-4">Strategic Solutions</h2>
                <div class="my-4 [&_li]:my-4 sm:[&_li]:my-6 text-base sm:text-[17px] [&_ul]:list-disc [&_ul]:list-inside">
                    <?= $solution ?>
                </div>
            </div>
        </section>
        <!-- End </solution> -->

        <!-- Start <results> -->
        <section class="py-5 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto my-2">
                <h2 class="text-2xl sm:text-3xl md:text-[40px] font-bold py-3">Results</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
                    <div class="col-span-1 lg:col-span-2 py-3 [&_p]:my-4 [&_p]:text-base sm:[&_p]:text-[17px] [&_p]:py-3 sm:[&_p]:py-5 [&_p]:leading-7 sm:[&_p]:leading-[30px]">
                        <?= $result_text ?>
                    </div>

                    <div class="col-span-1 bg-white p-4 sm:p-5 rounded-lg">
                        <img src="<?= esc_url($result_image['url'] ?? $fallback_image) ?>"
                            alt="<?php echo !empty($result_image['alt']) ? esc_attr($result_image['alt']) : 'Result Image'; ?>"
                            class="w-full max-w-fit mx-auto object-cover">
                    </div>
                </div>
            </div>
        </section>
        <!-- End </results> -->

        <!-- Start <testimonials> -->
        <?php require_once get_template_directory() . "/templates-parts/testimonials-part.php";
        Testimonials("#ffdd6a", "text-" . detect_color($category_slug), "#FFF9E6", "text-" . detect_color($category_slug))
        ?>
        <!-- End </testimonials> -->

        <!-- Start <case studies> -->
        <section class="bg-main p-3">
            <div class="px-4">
                <!-- Header -->
                <div class="text-center">
                    <h3 class="text-[16px] font-bold mb-[14px] md:mb-[16px] roboto-font title">Case Studies</h3>
                    <p
                        class="mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] hanuman-font description">
                        Real Results, Real Feedback. <br class="hidden md:block" /> Hear From our Clients.
                    </p>
                </div>
                <?php require_once get_template_directory() . "/templates-parts/case-studies-part.php";
                case_studies()
                ?>
                <div class="my-6 text-center">
                    <a href="<?= esc_url(home_url('/case-studies')); ?>"
                        class="w-fit inline-block bg-black text-white py-2 px-6 rounded-lg text-lg font-normal">
                        Show All
                    </a>
                </div>
            </div>
        </section>
        <!-- End </case studies> -->

        <!-- Start <discover> -->
        <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
        <!-- End </discover> -->

    </main>

<?php
endwhile;
get_footer();
