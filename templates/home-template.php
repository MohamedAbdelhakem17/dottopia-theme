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
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/home_bg.jfif'); ?>" alt="background" class="w-full animate-spinSlow" loading="lazy" />
        </div>

        <!-- Content -->
        <div class="container w-full h-full flex items-center justify-center flex-col p-5 relative z-10 mx-auto">
            <h3 class="capitalize text-white text-center text-[20px] leading-[30px] md:text-5xl hanuman-font md:leading-[54px] mx-auto font-normal"
                data-aos="zoom-in-down">
                We Simplify <span class="font-bold">Digital Growth</span> <br>
                so you can focus more on your <br>
                <span class="text-main font-bold">business cores.</span>
            </h3>

            <p class="roboto-font my-4 md:my-8 font-normal text-white text-center mx-auto text-lg" data-aos="fade-down" data-aos-delay="100">
                Reach wider audience and boost your sales with Dottopia,
                <br class="hidden md:block"> Ready to take the leap?
            </p>

            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="bg-main text-black md:py-2.5 md:px-5 py-1 px-3 rounded-md font-normal cursor-pointer 
                hover:bg-white hover:text-primary transition-all duration-300" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                Get a Proposal
            </a>
        </div>
    </header>
    <!-- End </hero> -->

    <!-- Start <clients> -->
    <section class="relative py-4">
        <div class="transform -translate-y-[50%] w-[80%] mx-auto bg-white rounded-md py-2">
            <div data-aos="fade-up" data-aos-offset="50">
                <p class="text-center text-main font-bold my-2 title roboto-font">Clients</p>
                <p class="font-bold md:text-4xl text-2xl text-center hanuman-font leading-[40px] description">
                    Trusted by over
                    <span style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/color_main_bg.svg'); ?>'); background-position: center; background-size: contain; background-repeat: no-repeat; padding: 5px;">
                        100+
                    </span>
                    <br class="hidden md:block" /> clients in various industries
                </p>
            </div>
        </div>

        <!-- Clients -->
        <?php
        $clients = get_field('clients', 'option');

        if ($clients): ?>
            <div class="overflow-hidden p-2">
    <!-- First Row (Moves Left to Right) -->
    <div class="wrapper flex gap-4 my-3 whitespace-nowrap">
        <?php $index = 1; ?>
                    <?php foreach ($clients as $client): ?>
                        <?php $image_url = esc_url($client); ?>
                        <div class="item item<?= $index ?> inline-flex items-center justify-center px-4 left-move">
                            <img src="<?php echo $image_url; ?>" alt="Client Logo" class="w-fit p-4">
                        </div>
                        <?php $index++; ?>
                    <?php endforeach; ?>
            
                </div>
            
                <!-- Second Row (Moves Right to Left) -->
                <div class="wrapper flex gap-4 my-3 whitespace-nowrap">
                    <?php $index = 1; ?>
                    <?php foreach (array_reverse($clients) as $client): ?>
                        <?php $image_url = esc_url($client); ?>
                        <div class="item item<?= $index ?> inline-flex items-center justify-center px-4 right-move">
                            <img src="<?php echo $image_url; ?>" alt="Client Logo" class="w-fit p-4">
                        </div>
                        <?php $index++; ?>
                    <?php endforeach; ?>
            
                </div>
            </div>

        <?php endif; ?>

    </section>
    <!-- End </clients> -->

    <!-- Start <who we are> -->
    <section class="bg-[#FFF9E5] w-full md:p-3  py-5 px-3">
        <div class="container flex md:flex-row w-full lg:w-[90%] mx-auto flex-col items-center justify-around lg:p-8 gap-5">

            <!-- Image Container -->
            <div class="w-full relative">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/video_Cover.png'); ?>" alt="Video Cover" class="w-fit mx-auto" />
                <i class="absolute top-[50%] left-[50%] text-white -translate-x-[50%] -translate-y-[50%] fas fa-play text-3xl"></i>
            </div>

            <!-- Info Text -->
            <div class="w-full px-3">
                <div data-aos="fade-left">
                    <h3 class="text-[16px] hanuman-font font-bold text-main mb-[10px] title">Who We Are</h3>

                    <p class="text-[25px] md:text-[30px] lg:text-[40px] font-bold leading-[40px] mt-3 hanuman-font title">
                        Explore Our <br class="hidden md:block" />
                        Marketing Strategies
                    </p>
                </div>

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

    <!-- Start </roadblocks> -->
    <section class="py-10 bg-black relative after:content-[''] after:absolute after:right-0 after:top-[20%] after:bg-opacity-50 after:bg-main/50 after:shadow-custom after:rounded-full after:w-[30px] after:h-[30px] after:translate-x-1/2">
        <div class="container mx-auto px-4 py-5">
            <div class="text-center">
                <h2 class="font-bold text-white text-2xl md:text-4xl font-hanuman mb-4 leading-10" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    Digital Roadblocks? <br class="hidden md:block" />
                    No Problem
                </h2>
                <p class="text-sm text-white leading-6 md:w-4/5 mx-auto">
                    Without consistent site traffic, you're missing out on valuable visitors, leads, and revenue. Thankfully, custom SEO solutions can get you back <br class="hidden md:block" /> on track by boosting your presence in search engine
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 md:mt-32 justify-items-center items-stretch">
                <!-- Box One -->
                <div class="relative p-4 w-full md:col-span-1" data-aos="fade-left">
                    <div class="shadow-2xl w-[250px] h-[250px] absolute bg-purple-700 bg-opacity-90 top-[-20px] right-[50px] rounded-full" data-aos="fade-in" data-aos-delay="700"></div>
                    <div class="relative p-4 w-full h-full bg-white/5  backdrop-brightness-10 rounded-3xl border border-purple-500">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/box_bg.svg'); ?>" alt="BG" class="absolute inset-0 h-full w-full object-cover z-10" />
                        <div class="relative z-30">
                            <div class="flex items-center gap-1 p-4">
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                            </div>
                            <div class="p-2">
                                <h3 class="font-bold text-purple-200 text-lg md:text-xl font-hanuman mb-4 leading-8">
                                    My website isn't getting enough traffic.
                                </h3>
                                <p class="text-sm text-white leading-5">
                                    Without consistent site traffic, you're missing out on valuable visitors, leads, and revenue. Thankfully, custom SEO solutions can get you back on track by boosting your presence in search engine results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Box Two -->
                <div class="relative p-4 w-full md:col-span-1" data-aos="zoom-in">
                    <div class="shadow-2xl w-[250px] h-[250px] absolute bg-teal-500 top-[-20px] right-[50px] rounded-full" data-aos="fade-in" data-aos-delay="700"></div>
                    <div class="relative p-4 w-full h-full bg-white/5  backdrop-brightness-10 rounded-3xl border border-teal-500">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/box_bg.svg'); ?>" alt="BG" class="absolute inset-0 h-full w-full object-cover z-10" />
                        <div class="relative z-30">
                            <div class="flex items-center gap-1 p-4">
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                            </div>
                            <div class="p-2">
                                <h3 class="font-bold text-teal-300 text-lg md:text-xl font-hanuman mb-4 leading-8">
                                    My cost from digital Campaigns is too high
                                </h3>
                                <p class="text-sm text-white leading-5">
                                    Tired of wasting dollars on ad campaigns? Our paid ad experts can help streamline your bidding strategy and refine ad targeting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Box Three -->
                <div class="relative p-4 w-full md:col-span-1" data-aos="fade-right">
                    <div class="relative p-4 w-full h-full bg-white/5  backdrop-brightness-10 rounded-3xl border border-yellow-200">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/backgrounds/box_bg.svg'); ?>" alt="BG" class="absolute inset-0 h-full w-full object-cover z-10" />
                        <div class="relative z-30">
                            <div class="flex items-center gap-1 p-4">
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                            </div>
                            <div class="p-2">
                                <h3 class="font-bold text-yellow-100 text-lg md:text-xl font-hanuman mb-4 leading-8">
                                    We're Failing to Engage with Brand Content
                                </h3>
                                <p class="text-sm text-white leading-5">
                                    Creating engaging content is crucial for your online presence. Our content creation team excels at crafting captivating, audience-focused content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End </roadblocks> -->

    <!-- Start <service> -->
    <section class="py-10 px-4">
        <div class="container px-4 md:px-0 mx-auto text-center">
            <!-- Header -->
            <h3 class="text-[20px] md:text-[16px] font-bold  mb-[14px] md:mb-[16px] text-main hanuman-font" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">Our Services</h3>
            <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] title" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                Transform Your Online <br class="hidden md:block" /> Presence with Dystopia
            </p>
            <p
                class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px]   description">
                At Dottopia, we offer a range of top-tier digital marketing services that will help you reach your target
                audience, increase your online visibility, and drive measurable results. Our team of experts combines
                creativity with data-driven strategies to deliver outstanding outcomes every time.
            </p>

            <!-- Services -->
            <?php $services = get_field("services"); ?>
            <?php if ($services) : ?>
                <?php foreach ($services as $service) :
                    $title = $service['title'];
                    $subTitle = $service['sub_title'];
                    $desc = $service['description'];
                    $image = $service['image'];
                    $line = $service['line'];
                    $color = $service['color'];
                    $link = $service['link'];

                    $title = preg_replace_callback('/\{\{(.*?)\}\}/', function ($matches) use ($color, $line, $subTitle) {
                        return "<span style='color: $color;' class='inline-block p-0 m-0' > {$matches[1]} <img src='$line' class='-translate-y-1' alt='$subTitle' /></span>";
                    }, $title);
                ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-y-4 items-center parallax mt-5">
                        <!-- Info Section -->
                        <div class="px-2 md:px-8 text-start col-span-1 md:col-span-1 info">
                            <h4 class="leading-[22.4px] font-[400] text-[14px]  " style="color: <?php echo $color ?>;">
                                <?= $subTitle ?>
                            </h4>

                            <p class="font-bold text-[25px] md:text-[40px] hanuman-font my-2 leading-10">
                                <?= $title ?>
                            </p>

                            <p class="mt-4 text-lg text-gray-700 roboto-font  md:w-[80%]">
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

                    </div>
                <?php endforeach; ?>
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
    <section class="bg-main md:px-3 py-5">
        <div class="md:px-4">
            <!-- Header -->
            <div class="text-center px-3">
                <h3 class="text-[16px] font-bold mb-[14px] md:mb-[16px]   title" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">Case Studies</h3>
                <p
                    class="mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] hanuman-font description" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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

    <!-- Start <blog> -->
    <section class="py-5">
        <div class="container mx-auto">
            <!-- Header -->
            <div class="text-center">
                <h3 class="text-[20px] md:text-[16px] font-bold  mb-[14px] md:mb-[16px] text-main hanuman-font" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">insights</h3>
                <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[40px] title" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    Recent Insights
                </p>
                <p
                    class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] ">
                    Welcome to our world! At our marketing agency, we don’t just focus on marketing, we’re passionate about sharing <br class="md:blok none" /> our knowledge with our visitors.
                </p>
            </div>

            <!-- Blogs  -->
            <?php require_once get_template_directory() . "/templates-parts/blog-part.php";
            blog();
            ?>

            <!-- Button -->
            <div class="my-6 text-center">
                <a href="<?= esc_url(home_url('/blog')); ?>"
                    class="w-fit inline-block bg-black text-white py-2 px-6 rounded-lg text-lg font-normal">
                    Show All
                </a>
            </div>
        </div>
    </section>
    <!-- End </blog> -->

    <!-- Start <discover> -->
    <?php require_once get_template_directory() . "/templates-parts/discover-part.php" ?>
    <!-- End </discover> -->


</main>

<!-- Footer -->
<?php get_footer(); ?>