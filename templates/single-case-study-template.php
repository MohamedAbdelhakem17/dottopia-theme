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

    // About Data
    $about_title = get_field("about_title") ?? '';
    $about_description = get_field("about_discription") ?? '';
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
            <div class="container mx-auto py-5 ">
                <!-- First Row -->
                <div class="lg:w-[50%] ">
                    <a href="<?php echo esc_url(home_url('/case-studies')); ?>" class="flex items-center gap-x-4 my-4">
                        <span class="w-[24px] h-[24px] rounded-full bg-main flex items-center justify-center"><i class="fa-solid fa-arrow-left text-[14px]"></i></span>
                        <span class="text-[16px] font-bold uppercase">Our Work</span>
                    </a>
                    <h1 class="text-[47px] font-bold"><?php echo esc_html($case_title); ?></h1>

                    <p class="my-5">
                        <span class="bg-main text-white py-1 px-5 rounded-full text-normal"><?= esc_html($category[0]->name); ?></span>
                        <span class="text-[18px] font-normal p-2"><?php echo esc_html(the_date()); ?></span>
                    </p>

                    <p class="py-4 text-[15px] font-normal my-5"><?php echo esc_html($hero_description); ?></p>
                </div>

                <!-- Second Row -->

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="col-span-1">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url() ?: $fallback_image); ?>"
                            alt="<?php echo esc_attr(get_the_title()); ?>"
                            class="w-full aspect-[1/.5]">
                    </div>

                    <div class="col-span-1">
                        <!-- details -->
                        <div class=" mx-6 flex flex-col items-start gap-4 justify-evenly h-full">
                            <?php if (!empty($hero_statistics) && is_array($hero_statistics)): ?>
                                <?php foreach ($hero_statistics as $statistic): ?>
                                    <div class="flex items-center gap-x-4">
                                        <span class="block font-bold font-main text-3xl md:text-5xl bg-black py-3 px-4 md:px-5 text-white relative overflow-hidden rounded-[5px] 
                                            after:absolute after:top-[50%] after:left-[100%] after:w-[15px] after:h-[15px] after:bg-white after:z-[2] 
                                            after:transform after:-translate-x-[50%] after:-translate-y-[50%] after:rotate-[-45deg] after:rounded-tr-[2px]">
                                            <?= esc_html($statistic["hero_statistics_number"]); ?><span class="text-xl md:text-2xl">%</span>
                                        </span>
                                        <p class="text-[12px] md:text-[14px] font-light w-[100px] md:w-[120px] font-sub text-gray-900">
                                            <?= esc_html($statistic["hero_statistics_title"]); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

            </div>

            </div>

            </div>
        </header>
        <!-- End </hero> -->

        <!-- Start <about> -->
        <section class="bg-seo/20 py-10">
            <div class="container mx-auto">
                <!-- First Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="col-span-1 lg:col-span-2 py-3">
                        <h3 class="font-bold py-3 text-4xl capitalize"> <?= esc_html($about_title); ?></h3>
                        <p class="text-[18px] font-normal leading-[40px] lg:w-[80%] "> <?= esc_html($about_description); ?></p>
                    </div>

                    <div class="col-span-1 bg-white p-5 rounded-lg">

                        <h3 class="text-center py-3 font-bold text-4xl"> WHAT WE DID </h3>
                        <ul class="list-disc list-inside [&_li]:border-t-[1px] [&_li]:border-gray-300 [&_li]:py-5 [&_li]:text-[18px] [&_li]:px-3 [&_li]:my-2">
                            <?php if (is_array($what_we_did)): ?>
                                <?php foreach ($what_we_did as $item): ?>
                                    <li> <?= esc_html($item["item"]); ?> </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>

                        <a href="<?php echo esc_url(home_url('/case-studies')); ?>" class="flex items-center gap-x-4 my-4 justify-center">
                            <span class="text-[17px] font-normal uppercase">Go To SEO Service</span>
                            <span class="w-[24px] h-[24px] rounded-full bg-seo flex items-center justify-center"><i class="fa-solid fa-arrow-right text-[14px]"></i></span>
                        </a>
                    </div>

                </div>

                <!-- Second Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-20  mb-10">

                    <?php
                    $stats = [
                        ["value" => "77%", "text" => "Of Users Click On Organic Results"],
                        ["value" => "50K", "text" => "Searches Every Day"],
                        ["value" => "92%", "text" => "Of All Search Is In Google"]
                    ];
                    ?>

                    <?php foreach ($stats as $index => $stat): ?>
                        <div class="text-center border-l-[2px] border-gray-400 p-6">
                            <h2 class="text-4xl font-bold text-black"> <?php echo $stat['value']; ?> </h2>
                            <p class="text-lg text-black mt-2"> <?php echo $stat['text']; ?> </p>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!-- End </about -->

        <!-- Start <STRATEGY> -->
        <section class="py-10 px-5">
            <div class="container mx-auto my-5">
                <h2 class="text-[18px] text-seo font-bold mt-5">OUR STRATEGY</h2>
                <h3 class="text-[40px] font-bold py-4"><?= esc_html($strategy__title); ?></h3>
                <p class="w-[90%] font-normal leading-10"><?= esc_html($strategy_description); ?></p>
            </div>
            <!-- challenge -->
            <?php if (is_array(value: $challenges)) : ?>
                <div class="container mx-auto grid grid-cols-1 gap-y-6 md:gap-y-4 mt-20">
                    <h3 class="text-4xl font-bold py-4 mb-5">Challenges</h3>
                    <?php foreach ($challenges as $index => $value) : ?>
                        <div
                            class="flex flex-col md:flex-row <?= $index % 2 === 0 ? 'md:flex-row-reverse' : '' ?> items-center gap-4">
                            <!-- Image Section -->
                            <div class="w-full md:w-1/2 px-4">
                                <img src="<?= esc_url($value['challenges_image'] ?: $fallback_image) ?>" alt="image"
                                    class="w-fit aspect-[1/.5] mx-auto">

                            </div>
                            <!-- Text Section -->
                            <div class="w-full md:w-1/2 px-4 text-start [&_li]:my-2 [&_li]:text-[17px] [&_ul]:list-disc [&_ul]:list-inside">
                                <?= $value['challenges_items'] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
        <!-- End </STRATEGY> -->

        <!-- Start <solution> -->
        <section class="py-10 px-5">
            <div class="container mx-auto my-5">
                <h2 class="text-[40px] font-bold py-4">Strategic Solutions</h2>
                <div class="my-4  [&_li]:my-6 text-[17px] [&_ul]:list-disc [&_ul]:list-inside">
                    <?= $solution ?>
                </div>
            </div>
        </section>
        <!-- End </solution> -->

        <!-- Start <results> -->
        <section class="py-10 px-5">
            <div class="container mx-auto my-2">
                <h2 class="text-[40px] font-bold py-3">Results</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="col-span-1 lg:col-span-2 py-3 [&_p]:my-4 [&_p]:text-[17px] [&_p]:py-5 [&_p]:leading-[30px]">
                        <?= $result_text ?>
                    </div>

                    <div class="col-span-1 bg-white p-5 rounded-lg">
                        <img src="<?= esc_url($result_image ?: $fallback_image) ?>" alt="image"
                            class="w-fit mx-auto">
                    </div>
                </div>
            </div>
        </section>
        <!-- End </results> -->

        <!-- Start <testimonials> -->
        <?php require_once get_template_directory() . "/templates-parts/testimonials-part.php";
        Testimonials()
        ?>
        <!-- End </testimonials> -->

        <!-- Start <case studies> -->
        <section class="bg-main p-3">
            <div class="px-4">
                <!-- Header -->
                <div class="text-center">
                    <h3 class="text-[16px] font-bold mb-[14px] md:mb-[16px] font-sub title">Case Studies</h3>
                    <p
                        class="mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] font-main description">
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
