<?php
// Template Name: Home Page 
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>
    <!-- Start <hero> -->
    <header class="w-full h-screen bg-black relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 h-full w-full overflow-hidden opacity-20 flex items-center justify-center"
            data-inview="background-fadeIn">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/home_bg.jfif'); ?>" alt="background" class="w-full animate-spinSlow" />
        </div>

        <!-- Content -->
        <div class="container w-full h-full flex items-center justify-center flex-col p-5 relative z-10 mx-auto">
            <h3 class="capitalize text-white text-center text-[20px] leading-[1.6] md:text-5xl font-hanuman md:leading-[54px] mx-auto"
                data-inview="text-fadeInUp">
                We Simplify <span class="font-bold">Digital Growth</span> <br>
                so you can focus more on your <br>
                <span class="text-main font-bold">business cores.</span>
            </h3>

            <p class="font-roboto my-4 md:my-8 font-normal text-white text-center mx-auto" data-inview="text-fadeInUp">
                Reach wider audience and boost your sales with Dottopia,
                <br class="hidden md:block"> Ready to take the leap?
            </p>

            <button class="bg-main text-black py-2.5 px-5 rounded-md font-normal
                hover:bg-white hover:text-primary transition-all duration-300" data-inview="button-fadeInUp">
                Get a Proposal
            </button>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <clients> -->
    <section class="relative py-4">
        <div class="transform -translate-y-[50%] w-[80%] mx-auto bg-white rounded-md py-2">
            <p class="text-center text-main font-bold my-2 title">Clients</p>
            <p class="font-bold md:text-4xl text-2xl text-center font-main leading-[40px] description">
                Trusted by over
                <span style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/color_main_bg.svg'); ?>'); background-position: center; background-size: contain; background-repeat: no-repeat; padding: 5px;">
                    100+
                </span>
                <br class="hidden md:block" /> clients in various industries
            </p>
        </div>

        <!-- Clients -->
        <?php
        $clients = get_field('clients', 'option');

        if ($clients): ?>
            <div class="client-carousel-wrapper overflow-hidden p-2">

                <!-- First Row (Moves Left) -->
                <div class="client-carousel-row client-carousel-row-1 grid grid-flow-col auto-cols-max gap-4 my-3">
                    <?php foreach ($clients as $client): ?>
                        <?php $image_url = esc_url($client); ?>
                        <div class="client-logo flex items-center justify-center px-4">
                            <img src="<?php echo $image_url; ?>" alt="Client Logo" class="object-contain  ">
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Second Row (Moves Right) -->
                <div class="client-carousel-row client-carousel-row-2 grid grid-flow-col auto-cols-max gap-4  my-3">
                    <?php foreach ($clients as $clients_reversed): ?>
                        <?php $image_url = esc_url($clients_reversed); ?>
                        <div class="client-logo flex items-center justify-center px-4">
                            <img src="<?php echo $image_url; ?>" alt="Client Logo" class="object-contain  ">
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        <?php endif; ?>

    </section>
    <!-- End </clients> -->


    <!-- Start </roadblocks> -->
    <section class="roadblocks py-10 bg-black relative after:content-[''] after:absolute after:right-0 after:top-[20%] after:bg-main/50 after:shadow-custom after:rounded-full after:w-[30px]  after:h-[30px] after:translate-x-[50%]">
        <div class="container mx-auto px-4 py-5 img-container">

            <div>
                <h2 class="text-center font-bold text-white text-[25px] md:text-[40px] font-main mb-[14px] leading-10 title">
                    Digital Roadblocks? <br class="hidden md:block" />
                    No Problem
                </h2>
                <p class="font-normal text-[13px] text-center text-white leading-[22.4px] font-sub md:w-[80%] mx-auto description">
                    Without consistent site traffic, you're missing out on valuable visitors, leads, and revenue. Thankfully, custom SEO solutions can get you back <br class="hidden md:block" /> on track by boosting your presence in search engine
                </p>
            </div>

            <?php $box_bg = get_template_directory_uri() . '/assets/images/backgrounds/box_bg.svg';  ?>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 md:mt-32 justify-center">

                <!--  Box  one-->
                <div class="col-span-1 relative p-4 card">
                    <div class="shadow-2xl w-[250px] h-[250px] absolute bg-[#8122d1e0] top-[-20px] right-[50px] rounded-full"></div>
                    <div class="h-full top-0 left-0 p-4 w-full sm:w-[90%] mx-auto bg-white/5 backdrop-blur-[40px] overflow-hidden backdrop-brightness-10 rounded-[30px] border-[1px] border-seo">
                        <img src="<?php echo esc_url($box_bg); ?>" alt="BG" class="left-0 top-0 h-full w-fit absolute z-10" />
                        <div class="w-full h-full relative z-30">
                            <div class="flex items-center gap-x-1 [&>span]:w-2 [&>span]:h-2 [&>span]:rounded-full [&>span]:bg-white/50 p-4 rounded-md">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="p-2">
                                <h3 class="font-bold text-[#E4D6FF] text-[16px] md:text-[20px] font-hanuman mb-[14px] leading-10">
                                    My website isn't getting enough traffic.
                                </h3>
                                <p class="font-light text-[12px] text-white leading-[17px]">
                                    Without consistent site traffic, you're missing out on valuable visitors, leads, and revenue. Thankfully, custom SEO solutions can get you back on track by boosting your presence in search engine results, so more people can find and visit your site.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  Box Two -->
                <div class="col-span-1 relative p-4 card">
                    <div class="shadow-2xl w-[250px] h-[250px] absolute bg-[#39c6a1] top-[-20px] right-[50px] rounded-full"></div>
                    <div class="h-full top-0 left-0 p-4 w-full sm:w-[90%] mx-auto bg-white/5 backdrop-blur-[40px] overflow-hidden backdrop-brightness-10 rounded-[30px] border-[1px] border-performance ">
                        <img src="<?php echo esc_url($box_bg); ?>" alt="BG" class="left-0 top-0 h-full w-fit absolute z-10" />
                        <div class="w-full h-full relative z-30">
                            <div class="flex items-center gap-x-1 [&>span]:w-2 [&>span]:h-2 [&>span]:rounded-full [&>span]:bg-white/50 p-4 rounded-md">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="p-2">
                                <h3 class="font-bold text-[#4AFFC6] text-[16px] md:text-[20px] font-hanuman mb-[14px] leading-10">
                                    My cost from digital Campaigns is too high
                                </h3>
                                <p class="font-light text-[12px] text-white leading-[17px]">
                                    Tired of wasting dollars on ad campaigns? Our paid ad experts can help streamline your bidding strategy and refine ad targeting, so you get the maximum impact from your ads.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Box There -->
                <div class="col-span-1 relative p-4 card">
                    <div class="h-full top-0 left-0 p-4 w-full sm:w-[90%] mx-auto bg-white/5 backdrop-blur-[40px] overflow-hidden backdrop-brightness-10 rounded-[30px] border-[1px] border-digital">
                        <img src="<?php echo esc_url($box_bg); ?>" alt="BG" class="left-0 top-0 h-full w-fit absolute z-10" />
                        <div class="w-full h-full relative z-30">
                            <div class="flex items-center gap-x-1 [&>span]:w-2 [&>span]:h-2 [&>span]:rounded-full [&>span]:bg-white/50 p-4 rounded-md">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="p-2">
                                <h3 class="font-bold text-[#FFF8E1] text-[16px] md:text-[20px] font-hanuman mb-[14px] leading-10">
                                    We're Failing to Engage with Brand Content
                                </h3>
                                <p class="font-light text-[12px] text-white leading-[17px]">
                                    Creating engaging content is crucial for your online presence. If you're looking to elevate your content game, our content creation team is here to help. We excel at crafting captivating, audience-focused content that ignites interest and fosters interaction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End </roadblocks> -->

    <!-- Start <who we are> -->
    <section class="bg-[#FFF9E5] w-full p-3">
        <div class="container flex md:flex-row w-full lg:w-[90%] mx-auto flex-col items-center justify-around lg:p-8 gap-5">

            <!-- Image Container -->
            <div class="w-full relative">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/video_Cover.png'); ?>" alt="Video Cover" class="w-fit mx-auto" />
                <i class="absolute top-[50%] left-[50%] text-white -translate-x-[50%] -translate-y-[50%] fas fa-play text-3xl"></i>
            </div>

            <!-- Info Text -->
            <div class="w-full px-3">
                <h3 class="text-[16px] font-bold text-main mb-[14px] title">Who We Are</h3>

                <p class="text-[25px] md:text-[30px] lg:text-[40px] font-bold leading-[50px] mt-5 font-main title">
                    Explore Our <br class="hidden md:block" />
                    Marketing Strategies
                </p>

                <p class="py-3 md:py-6 font-normal text-[18px] md:text-[16px] lg:w-[70%] md:w-[90%] description">
                    We’re here to make your online presence unforgettable with creative
                    strategies that get results.
                </p>

                <a class="flex items-center gap-x-5 cursor-pointer" href="<?php echo esc_url(home_url('/about')); ?>">
                    <p class="font-normal text-[16px] md:text-[16px]"> Know more about us</p>
                    <span class="bg-main h-[26px] w-[26px] rounded-full text-black flex items-center justify-center">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- End </who we are> -->

    <!-- Start <service> -->
    <section class="py-10 px-4">
        <div class="md:w-[90%] px-5 md:px-0 mx-auto text-center" style="margin: 0 auto;">
            <!-- Header -->
            <h3 class="text-[16px] font-bold  mb-[14px] md:mb-[16px] text-main title">Our Services</h3>
            <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] title">
                Transform Your Online <br class="hidden md:block" /> Presence with Dystopia
            </p>
            <p
                class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] font-sub description">
                At Dottopia, we offer a range of top-tier digital marketing services that will help you reach your target
                audience, increase your online visibility, and drive measurable results. Our team of experts combines
                creativity with data-driven strategies to deliver outstanding outcomes every time.
            </p>

            <!-- Services -->
            <?php $services = get_field("services"); ?>
            <?php if ($services) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-y-4 items-center service-container mt-3">
                    <?php foreach ($services as $service) :
                        $title = $service['title'];
                        $subTitle = $service['sub_title'];
                        $desc = $service['description'];
                        $image = $service['image'];
                        $line = $service['line'];
                        $color = $service['color'];
                        $link = $service['link'];

                        $title = preg_replace_callback('/\{\{(.*?)\}\}/', function ($matches) use ($color, $line, $subTitle) {
                            return "<span style='color: $color;' class='inline-block p-0 m-0'>{$matches[1]} <img src='$line' class='-translate-y-2' alt='$subTitle'</span>";
                        }, $title);
                    ?>

                        <!-- Info Section -->
                        <div class="px-4 md:px-8 text-start col-span-1 md:col-span-1 info">
                            <h4 class="leading-[22.4px] font-[400] text-[14px] font-sub" style="color: <?php echo $color ?>;">
                                <?= $subTitle ?>
                            </h4>

                            <p class="font-bold text-[40px] font-main my-2 leading-10">
                                <?= $title ?>
                            </p>

                            <p class="mt-4 text-sm md:text-base text-gray-700 md:w-[80%]">
                                <?= $desc ?>
                            </p>

                            <a class="flex items-center gap-x-5 mt-6 cursor-pointer" href="<?php echo esc_url(home_url('/' . $link)); ?>">
                                <p class="font-[400] text-[14px] md:text-[16px]">Know more about us</p>
                                <span class="bg-main h-[26px] w-[26px] rounded-full text-black flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right text-[14px]"></i>
                                </span>
                            </a>
                        </div>

                        <!-- Image Container -->
                        <div class="px-4 md:px-8 col-span-1 md:col-span-1">
                            <img src="<?= esc_url($image) ?>" alt="<?= esc_attr(strip_tags($title)) ?>"
                                class=" object-contain mx-auto">
                        </div>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </section>
    <!-- End </service> -->

    <!-- Start <partners> -->
    <?php require_once get_template_directory() . "/templates-parts/partners-part.php" ?>
    <!-- End </partners> -->

    <!-- Start <solutions> -->
    <?php require_once get_template_directory() . "/templates-parts/solutions-part.php" ?>
    <!-- End </solutions> -->

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

<!-- Footer -->
<?php get_footer(); ?>