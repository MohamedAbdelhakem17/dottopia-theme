<?php // Template Name: Seo Service Page
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>
    <!-- Start <hero> -->
    <?php
    $hero_section_title = preg_replace('/\{\{(.*?)\}\}/', '<h1 class="text-seo inline-block">$1</h1>', get_field("hero_title"));
    $hero_description = get_field("hero_discreption");
    $background_image = esc_url("http://dottopiav2.local/wp-content/uploads/2025/02/rahul-mishra-glmeeU0zabw-unsplash-1.png");
    // $background_image = esc_url(get_field("background_image"));
    ?>
    <header class="w-full h-screen relative overflow-hidden"
        style="background: var(--gradient-service), url('<?php echo $background_image; ?>') center/cover no-repeat;">

        <!-- Content -->
        <div class="container w-full h-full flex items-center justify-center flex-col p-5 relative z-10 mx-auto">
            <div class="capitalize text-white text-center text-[30px] leading-[40px] w-[90%] #523C9E self-start md:self-auto md:text-5xl md:leading-[54px] lg:w-[50%] hanuman-font font-bold mx-auto "
                data-aos="zoom-in-down">
                <?php echo $hero_section_title; ?>
            </div>

            <p class="roboto-font my-4 md:my-8 font-normal text-white  md:text-center text-[16px] md:text-2xl break-normal mx-auto w-full lg:w-[50%]"
                data-aos="fade-down" data-aos-delay="100">
                <?php echo $hero_description; ?>
            </p>

            <button class="bg-main text-black py-2.5 px-5 rounded-md font-normal
            hover:bg-white hover:text-primary transition-all duration-300" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                Get a Proposal
            </button>
        </div>

    </header>
    <!-- End </hero> -->

    <!-- Start <clients> -->
    <?php
    require_once get_template_directory() . '/templates-parts/clients-part.php';
    Clients("text-seo", "text-white", "color_seo_bg.svg");
    ?>
    <!-- End </clients> -->

    <!-- Start <achievements number> -->
    <section class="py-10 px-4 bg-[#FAF1FF]">
        <?php
        $achievements_title = get_field("achievements_title");
        $achievements_description = get_field("achievements_discription");
        $achievements_statistics = get_field("statistics");
        ?>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 p-4">

            <div class="col-span-1">
                <div data-aos="fade-left">
                    <h2 class="uppercase font-bold text-seo text-[22px] text-center md:text-[18px] md:text-start">
                        achievements</h2>
                    <h3
                        class="hanuman-font font-bold text-[30px] leading-[35px] md:text-start text-center md:text-[40px] md:leading-[50px] my-3">
                        <?= $achievements_title ?></h3>
                </div>
                <p class="w-full text-center md:text-start roboto-font font-[300] mt-2  md:w-[80%] text-lg">
                    <?= $achievements_description ?></p>
            </div>

            <div class="col-span-1 grid grid-cols-2 items-center p-0 md:p-5 md:mt-0 mt-4 gap-y-3">
                <?php foreach ($achievements_statistics as $key => $value) : ?>
                    <div class="col-span-1 flex items-center flex-col justify-center md:p-4 p-1">
                        <h4 class="font-[300] text-[14px] "><?= $value['label'] ?></h4>
                        <p class="text-seo font-extrabold text-3xl mt-2"> <span class="counter text-5xl"
                                data-count="<?= $value['number'] ?>"><?= $value['number'] ?></span> <span
                                class="text-[18px] inline-block -translate-x-[8px]"><?= $value["sympole"] ?></span></p>
                        <p class="font-[700] -tracking-tighter  capitalize"><?= $value["duration"] ?></p>
                    </div>
                <? endforeach; ?>

            </div>
        </div>
    </section>
    <!-- End </achievements number> -->

    <!-- Start <achievements> -->
    <section
        class="roadblocks py-10 bg-black relative after:content-[''] after:absolute after:right-0 after:top-[20%] after:bg-seo/90 after:shadow-seo after:rounded-full after:w-[30px]  after:h-[30px] after:translate-x-[50%]">
        <div class="container mx-auto px-4 py-5 img-container">

            <div data-aos="fade-up" data-aos-offset="50">
                <h2
                    class="text-[22px] md:text-[18px] font-bold  mb-[14px] md:mb-[16px] text-seo text-center  uppercase">
                    achievements</h2>
                <h3
                    class="text-center  font-bold text-white text-[25px] md:text-[40px] hanuman-font mb-[14px] leading-[30px] md:leading-10 title">
                    Experts in SEO WEB <br class="hidden md:block" />Services
                </h3>
            </div>
            <p
                class="font-normal md:text-[13px] text-[15px] text-center text-white leading-[22.4px] roboto-font md:w-[80%] mx-auto  description">
                Our performance marketing agency’s qualified SEO web services resonate specifically with a personalized
                strategy to align with your business goals. We delve deep into market trends, competitor analysis and
                user behavior to ensure every optimization tactic is purposeful and results-driven with our SEO services
                packages. </p>

            <?php $box_bg = get_template_directory_uri() . '/assets/images/backgrounds/box_bg.svg';  ?>

            <div class="container mx-auto px-4 py-10 md:py-32">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Box One -->
        <div class="relative p-4 sm:p-6" data-aos="fade-left">
            <img src="<?= get_template_directory_uri() . '/assets/images/icons/increase.svg' ?>"
                alt="Increased Visibility and Traffic"
                class="absolute -top-6 right-2 sm:right-4 w-20 sm:w-28 z-20" />
            <div class="relative h-full w-full bg-white/5 backdrop-blur-3xl rounded-3xl border border-seo/50 overflow-hidden">
                <img src="<?php echo esc_url($box_bg); ?>" alt="BG"
                    class="absolute inset-0 h-full w-full object-cover z-10" />
                <div class="relative z-30 p-4 sm:p-6">
                    <div class="flex items-center gap-1.5 pb-4">
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                    </div>
                    <h3 class="font-bold text-[#E4D6FF] text-lg sm:text-xl md:text-2xl hanuman-font mb-4 leading-tight">
                        Increased Visibility and Traffic
                    </h3>
                    <p class="text-white text-xs sm:text-sm leading-relaxed">
                        Without consistent site traffic, you’re missing out on valuable visitors, leads, and revenue. 
                        Thankfully, custom SEO solutions can get you back on track by boosting your presence in search 
                        engine results, so more people can find and visit your site.
                    </p>
                </div>
            </div>
        </div>

        <!-- Box Two -->
        <div class="relative p-4 sm:p-6" data-aos="zoom-in">
            <img src="<?= get_template_directory_uri() . '/assets/images/icons/verify.svg' ?>"
                alt="Higher Credibility and Trust"
                class="absolute -top-6 right-2 sm:right-4 w-20 sm:w-24 z-20" />
            <div class="relative h-full w-full bg-white/5 backdrop-blur-3xl rounded-3xl border border-seo/50 overflow-hidden">
                <img src="<?php echo esc_url($box_bg); ?>" alt="BG"
                    class="absolute inset-0 h-full w-full object-cover z-10" />
                <div class="relative z-30 p-4 sm:p-6">
                    <div class="flex items-center gap-1.5 pb-4">
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                    </div>
                    <h3 class="font-bold text-[#E4D6FF] text-lg sm:text-xl md:text-2xl hanuman-font mb-4 leading-tight">
                        Higher Credibility and Trust
                    </h3>
                    <p class="text-white text-xs sm:text-sm leading-relaxed">
                        Websites that appear higher in search results are often perceived as more trustworthy and 
                        credible by users.
                    </p>
                </div>
            </div>
        </div>

        <!-- Box Three -->
        <div class="relative p-4 sm:p-6" data-aos="fade-right">
            <img src="<?= get_template_directory_uri() . '/assets/images/icons/tag.svg' ?>"
                alt="Long-Term Results"
                class="absolute -top-6 right-2 sm:right-4 w-20 sm:w-24 z-20" />
            <div class="relative h-full w-full bg-white/5 backdrop-blur-3xl rounded-3xl border border-seo/50 overflow-hidden">
                <img src="<?php echo esc_url($box_bg); ?>" alt="BG"
                    class="absolute inset-0 h-full w-full object-cover z-10" />
                <div class="relative z-30 p-4 sm:p-6">
                    <div class="flex items-center gap-1.5 pb-4">
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                        <span class="w-2 h-2 rounded-full bg-white/50"></span>
                    </div>
                    <h3 class="font-bold text-[#E4D6FF] text-lg sm:text-xl md:text-2xl hanuman-font mb-4 leading-tight">
                        Long-Term Results
                    </h3>
                    <p class="text-white text-xs sm:text-sm leading-relaxed">
                        Once your website ranks well, it can maintain its position for an extended period while 
                        providing ongoing value.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>
    <!-- End </achievements> -->

    <!-- Start <service> -->
    <section class="py-10 px-4 container mx-auto">
        <div class="lg:w-[90%] mx-auto text-center">
            <!-- Header -->
            <div data-aos="fade-up" data-aos-offset="50">
                <h3 class="uppercase font-bold text-seo text-[22px]  md:text-[18px] text-center">Services
                </h3>
                <p
                    class="hanuman-font font-bold text-[30px] leading-[35px]  text-center md:text-[40px] md:leading-[50px] my-3">
                    Boost your Website Traffic <br class="hidden md:block" /> With SEO Web Services
                </p>
            </div>

            <!-- Services -->
            <?php $services = get_field("services"); ?>
            <?php if ($services) : ?>
                <?php foreach ($services as $service) :
                    $title = $service['title'];
                    $desc = $service['description'];
                    $image = $service['image'];
                ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-y-4 items-center parallax mt-3">

                        <!-- Info Section -->
                        <div class="px-4 lg:px-8 text-start col-span-1 md:col-span-1 info">
                            <h3 class=" text-[25px] md:text-[40px]  hanuman-font font-bold">
                                <?= $title ?>
                            </h3>

                            <p class="mb:mt-4 text-lg text-gray-700 lg:w-[80%] roboto-font">
                                <?= $desc ?>
                            </p>
                        </div>

                        <!-- Image Container -->
                        <div class="px-4 md:px-8 col-span-1 md:col-span-1">
                            <img src="<?= esc_url($image) ?>" alt="<?= esc_attr(strip_tags($title)) ?>"
                                class=" object-contain mx-auto">
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </section>
    <!-- End </service> -->

    <!-- start <Process> -->
    <section class="roadblocks py-10 bg-black">
        <div class="container mx-auto px-4 py-5 img-container">

            <!-- Header -->
            <div data-aos="fade-up" data-aos-offset="50">
                <h2 class="uppercase font-bold text-seo text-[22px]  md:text-[18px] text-center"> process
                    </h3>
                    <p
                        class="hanuman-font font-bold text-[30px] leading-[35px]  text-center md:text-[40px] md:leading-[50px] my-3 text-white">
                        We’re Proud of Our <br class="hidden md:block" /> Process
                    </p>
            </div>

            <p
                class="font-normal text-[13px] text-start md:text-center text-white leading-[22.4px] roboto-font md:w-[80%] mx-auto description">
                In Dottopia, we proudly stand as the epitome of excellence in the digital landscape, offering a
                comprehensive suite of services that set us apart. Our commitment to client success is unwavering,
                driven by a unique blend of innovation, expertise, and a relentless pursuit of results.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 mt-10 md:mt-23 justify-center">

                <?php $process = get_field("process"); ?>
                <?php if ($process) : ?>
                    <?php foreach ($process as $index => $step) : ?>
                        <div class="col-span-1 relative p-6 md:p-3 card" data-aos="flip-down">
                            <div
                                class="h-full top-0 left-0 p-4 w-full sm:w-[90%] mx-auto bg-white/5 backdrop-blur-[40px] overflow-hidden backdrop-brightness-10 rounded-[30px] border-[1px] border-seo">
                                <div class="w-full h-full relative z-30">

                                    <div class="p-2">
                                        <p class="font-bold text-[96px]  glow-seo"><?php echo $index + 1; ?> </p>
                                        <h3
                                            class="font-bold text-white text-[16px] md:text-[20px] hanuman-font mb-[14px] leading-10">
                                            <?php echo $step["process_item"]; ?>
                                        </h3>
                                    </div>

                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
    </section>
    <!-- start </Process> -->

    <!-- Start <PARTNERS> -->
    <section class="py-10 px-4">
        <div class="md:w-[90%] px-5 md:px-0 mx-auto text-center">
            <div data-aos="fade-up" data-aos-offset="50">
                <h3 class="uppercase font-bold text-seo text-[22px] text-center md:text-[18px] md:text-center">OUR
                    PARTNERS</h3>
                <p
                    class="hanuman-font font-bold text-[30px] leading-[35px] text-center md:text-center md:text-[40px] md:leading-[50px] my-3">
                    Step into Success<br class="hidden md:block" /> with industry giants
                </p>
            </div>
            <p
                class="font-light text-[18px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] roboto-font description">
                Our collaboration allows us to harness the latest innovations, insights, and cutting-edge tools to
                elevate your digital presence and marketing strategies.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mt-10 partner">
                <?php $clients = get_field('partners'); ?>
                <?php if ($clients) : ?>
                    <?php foreach ($clients as $client) : ?>
                        <?php
                        $image_url = isset($client) ? esc_url($client) : '';
                        $image_alt = isset($client) ? esc_attr($client) : 'Client Logo';
                        ?>
                        <div class="p-4 flex items-center justify-center" data-aos="zoom-out-up">
                            <?php if ($image_url) : ?>
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="object-contain" />
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- End </PARTNERS> -->

    <!-- Start <solutions> -->
    <?php require_once get_template_directory() . "/templates-parts/solutions-part.php" ?>
    <!-- End </solutions> -->

    <!-- Start <why-choose-us> -->
    <?php require_once get_template_directory() . "/templates-parts/why-choose-us-part.php";
    WhyChooseUS("FAF1FF", "text-seo")
    ?>
    <!-- End </FAQS> -->

    <!-- Start <testimonials> -->
    <?php require_once get_template_directory() . "/templates-parts/testimonials-part.php";
    // Testimonials("#FAF1FF", "#745BA3", "#E4D6FF", "text-seo")
    ?>
    <!-- End </testimonials> -->

    <!-- Start <discover> -->
    <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
    <!-- End </discover> -->

    <!-- Start <FAQS> -->
    <?php require_once get_template_directory() . "/templates-parts/faqs-part.php";
    FAQs("border-t-seo") ?>
    <!-- End </FAQS> -->
</main>

<!-- Footer -->
<?php get_footer(); ?>