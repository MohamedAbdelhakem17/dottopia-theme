<?php
// Template Name: About  Page
get_header();

?>

<!-- Main Content -->
<main>
    <!-- Start <hero> -->
    <?php
    $hero_section_title = preg_replace('/\{\{(.*?)\}\}/', '<span class="text-main">$1</span>', get_field("hero_title"));
    $hero_description = get_field("hero_discreption");
    $background_image = esc_url(get_field("background_image"));
    ?>
    <header class="w-full h-screen relative overflow-hidden"
        style="background: var(--gradient-service), url('<?php echo $background_image; ?>') center/cover no-repeat;">
        <!-- Content -->
        <div class="container w-full h-full flex items-center justify-center flex-col p-5 relative z-10 mx-auto">
            <h3
                class="capitalize text-white text-start md:text-center text-[30px] leading-[40px] w-[90%] self-start md:self-auto md:text-5xl md:leading-[54px] lg:w-[50%] font-main font-bold md:mx-auto mx-0">
                <?php echo $hero_section_title; ?>
            </h3>

            <p
                class="font-sub my-4 md:my-8 font-normal text-white text-center text-[16px] md:text-2xl mx-auto w-full lg:w-[50%]">
                <?php echo $hero_description; ?>
            </p>

            <button class="bg-main text-black py-2.5 px-5 rounded-md font-normal
            hover:bg-white hover:text-primary transition-all duration-300" data-inview="button-fadeInUp">
                Get a Proposal
            </button>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <clients> -->
    <?php
    require_once get_template_directory() . '/templates-parts/clients-part.php';
    Clients("text-main", "text-black", "color_main_bg.svg");
    ?>
    <!-- End </clients> -->

    <!-- Start <about Dottopia> -->
    <section class="bg-[#FFF9E5] w-full p-3">
        <div class="container flex md:flex-row w-full lg:w-[90%] mx-auto flex-col items-center justify-around lg:p-8 gap-5">

            <!-- Image Container -->
            <div class="w-full relative">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dottopia.png'); ?>" alt="Video Cover" class="w-fit mx-auto" />
                <i class="absolute top-[50%] left-[50%] text-white -translate-x-[50%] -translate-y-[50%] fas fa-play text-3xl"></i>
            </div>

            <!-- Info Text -->
            <div class="w-full px-3">
                <h3 class="text-[16px] font-bold text-main mb-[14px] title">About Dottopia </h3>

                <p class="text-[25px] md:text-[30px] lg:text-[40px] font-bold leading-[50px] mt-5 font-main title">
                    Who We Are
                </p>

                <p class="py-3 md:py-6 font-normal text-[18px] md:text-[16px] lg:w-[70%] md:w-[90%] description">
                    At Dottopia digital marketing company, we’re a passionate team of digital innovators, creators, and strategists dedicated to helping brands shine in the digital landscape. Our journey began with a simple idea: to blend creativity with data-driven strategies to deliver impactful digital marketing solutions.
                </p>
            </div>
        </div>
    </section>
    <!-- End </who we are> -->

    <!-- Start <Mission and Vision> -->
    <section
        class="roadblocks py-10 bg-black relative after:content-[''] after:absolute after:right-0 after:top-[20%] after:bg-main/50 after:shadow-main after:rounded-full after:w-[30px]  after:h-[30px] after:translate-x-[50%]">
        <div class="container mx-auto px-4 py-5 img-container">

            <h3
                class="text-center font-bold text-white text-[25px] md:text-[45px] font-main mb-[14px] leading-[24px] md:leading-12 title">
                Our Mission <br class="hidden md:block" />& Vision
            </h3>

            <?php $box_bg = get_template_directory_uri() . '/assets/images/backgrounds/box_bg.svg'; ?>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10 md:mt-32 justify-center place-items-center mx-auto">

                <!-- Box One -->
                <div class="col-span-1 relative  mx-auto">
                    <img src="<?= get_template_directory_uri() . "/assets/images/icons/vision.svg" ?>"
                        alt="Increased Visibility and Traffic"
                        class="absolute top-[-15px] right-[-10px] z-20 w-[200px]" />
                    <div
                        class="h-full top-0 left-0 p-6 w-full sm:w-[90%] max-w-md mx-auto bg-white/5 backdrop-blur-[40px] overflow-hidden backdrop-brightness-10 rounded-[30px] border-[1px] border-main/50">
                        <img src="<?php echo esc_url($box_bg); ?>" alt="BG"
                            class="left-0 top-0 h-full w-fit absolute z-10" />
                        <div class="w-full h-full relative z-30">
                            <div
                                class="flex items-center gap-x-1 [&>span]:w-2 [&>span]:h-2 [&>span]:rounded-full [&>span]:bg-white/50 p-4 rounded-md">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="p-2">
                                <h3
                                    class="font-bold text-main py-3 text-[16px] md:text-[20px] font-hanuman mb-[14px] leading-10">
                                    Our Mission
                                </h3>
                                <p class="font-light text-[12px] text-white leading-[17px]">
                                    <?php $mission = get_field("our_mission__vission");
                                    echo $mission[0]["discreption"]; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Box Two -->
                <div class="col-span-1 relative  mx-auto">
                    <img src="<?= get_template_directory_uri() . "/assets/images/icons/mission.svg" ?>"
                        alt="Higher Credibility and Trust" class="absolute top-[-15px] right-[-10px] z-20" />
                    <div
                        class="h-full top-0 left-0 p-6 w-full sm:w-[90%] max-w-md mx-auto bg-white/5 backdrop-blur-[40px] overflow-hidden backdrop-brightness-10 rounded-[30px] border-[1px] border-main/50">
                        <img src="<?php echo esc_url($box_bg); ?>" alt="BG"
                            class="left-0 top-0 h-full w-fit absolute z-10" />
                        <div class="w-full h-full relative z-30">
                            <div
                                class="flex items-center gap-x-1 [&>span]:w-2 [&>span]:h-2 [&>span]:rounded-full [&>span]:bg-white/50 p-4 rounded-md">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="p-2">
                                <h3
                                    class="font-bold text-main py-3 text-[16px] md:text-[20px] font-hanuman mb-[14px] leading-10">
                                    Our Vision
                                </h3>
                                <p class="font-light text-[12px] text-white leading-[17px]">
                                    <?php $mission = get_field("our_mission__vission");
                                    echo $mission[1]["discreption"]; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End </Mission and Vision> -->

    <!-- Start <achievements number> -->
    <section class="py-10 px-4 bg-[#FFF5D1]">
        <?php
        $title = get_field("title");
        $discription = get_field("discription");
        $achievements_statistics = get_field("statistics");
        ?>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 p-4">

            <div class="col-span-1">
                <h2 class="uppercase font-bold text-digital text-[22px] text-center md:text-[18px] md:text-left">Journey</h2>
                <h3 class="font-main font-bold text-[30px] leading-[35px] text-center md:text-start md:text-[40px] md:leading-[50px] my-3"><?= $title ?></h3>
                <p class="w-full text-center md:text-start font-sub font-[200] mt-2 text-gray-500 md:w-[80%]"><?= $discription ?></p>
            </div>

            <div class="col-span-1 grid grid-cols-2 items-center p-0 md:p-5 md:mt-0 mt-4 gap-y-3">
                <?php foreach ($achievements_statistics as $key => $value) : ?>
                    <div class="col-span-1 flex items-center flex-col justify-center md:p-4 p-1">
                        <h4 class="font-[300] text-[14px] "><?= $value['label'] ?></h4>
                        <p class="text-digital font-extrabold text-3xl mt-2">
                            <?= ($key != 1 ? '+' : '') . $value['number'] ?>
                            <span class="text-[18px] inline-block -translate-x-[8px]"><?= $value["sympole"] ?></span>
                        </p>
                        <p class="font-[700] -tracking-tighter  capitalize"><?= $value["defineiton"] ?></p>
                    </div>
                <? endforeach; ?>

            </div>
        </div>
    </section>
    <!-- End </achievements number> -->

    <!-- Start <service> -->
    <section class="py-10 px-4 container mx-auto">
        <div class="lg:w-[90%] mx-auto text-center">
            <!-- Header -->
            <h3 class="uppercase font-bold text-main text-[22px] text-center md:text-[18px] md:text-center"> Values</h3>
            <p
                class="font-main font-bold text-[30px] leading-[35px] text-start md:text-center md:text-[40px] md:leading-[50px] my-3">
                Our Values
            </p>

            <!-- Services -->
            <?php $values = get_field("values"); ?>
            <?php if ($values) : ?>
                <div class="grid grid-cols-1 gap-y-6 md:gap-y-4 service-container mt-3">
                    <?php foreach ($values as $index => $value) : ?>
                        <div
                            class="flex flex-col md:flex-row <?= $index % 2 !== 0 ? 'md:flex-row-reverse' : '' ?> items-center gap-4 md:gap-8">
                            <!-- Image Section -->
                            <div class="w-full md:w-1/2 px-4">
                                <img src="<?= esc_url($value['image']) ?>" alt="<?= esc_attr(strip_tags($value['title'])) ?>"
                                    class="object-contain mx-auto">
                            </div>
                            <!-- Text Section -->
                            <div class="w-full md:w-1/2 px-4 text-start">
                                <h3 class="text-[25px] md:text-[40px] font-main font-bold"><?= $value['title'] ?></h3>
                                <p class="text-sm md:text-base text-gray-700 font-sub"><?= $value['description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

    </section>
    <!-- End </service> -->

    <!-- Start <PARTNERS> -->
    <?php require_once get_template_directory() . "/templates-parts/partners-part.php" ?>

    <!-- End </PARTNERS> -->

    <!-- Start <solutions> -->
    <?php require_once get_template_directory() . "/templates-parts/solutions-part.php" ?>
    <!-- End </solutions> -->

    <!-- End </FAQS> -->
</main>

<!-- Footer -->
<?php get_footer(); ?>