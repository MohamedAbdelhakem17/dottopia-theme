<?php // Template Name: Contact Us Template
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>

    <section class="p-5">
        <div class="container mx-auto p-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                <!-- Testimonials -->
                <div class="col-span-1 py-4 px-4 w-full min-h-[50vh] lg:min-h-auto">
                    <h1 class="hanuman-font text-5xl font-bold mb-4 leading-[60px]">You Need A Partner? <br class="hidden lg:block"> We're Here To Help.</h1>
                    <p class="leading-[45px]">Before we start, we would like to better understand your needs.
                        <br class="hidden lg:block">
                        We’ll review your application and schedule a free estimation call.
                    </p>
                    <!-- <div class="swiper mySwiper w-full">
                        <div class="swiper-wrapper">
                            <?php
                            $testimonials = get_field('testimonial', "option");
                            foreach ($testimonials as $testimonial): ?>
                                <div class="swiper-slide py-3 px-2 w-full">
                                    <div class="rounded-xl p-8 relative shadow-md flex flex-col justify-between h-full bg-main/20 w-[80%] mx-auto">

                                        <div class="text-9xl text-main opacity-50 mb-0 leading-[18px] mt-6">
                                            &quot;
                                        </div>

                                        <div class="max-w-2xl mx-auto flex-grow">
                                            <p class="text-gray-800 text-sm mb-2 py-2 font-bold">
                                                <?php echo esc_html($testimonial['comment']); ?>
                                            </p>
                                        </div>

                                        <div class="flex items-center justify-between gap-4">
                                            <div class="flex items-center gap-x-3">
                                                <img src="<?php echo esc_url($testimonial['user_image']); ?>"
                                                    alt="<?php echo esc_attr($testimonial['name']); ?>"
                                                    width="38" height="38"
                                                    class="object-cover bg-white rounded-full">
                                                <div class="flex items-center gap-x-1">
                                                    <span class="font-bold"><?php echo esc_html($testimonial['name']); ?></span> -
                                                    <span class="text-[12px]"><?php echo esc_html($testimonial['company']); ?></span>
                                                </div>
                                            </div>
                                            <div class="w-16 h-16 flex items-center justify-center">
                                                <img src="<?php echo esc_url($testimonial['logo_image']); ?>"
                                                    alt="<?php echo esc_attr($testimonial['company'] . ' logo'); ?>"
                                                    width="40" height="40" class="object-contain">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div> -->
                </div>

                <!-- Contact Form  -->
                <div class="col-span-1 px-4">
                    <?php the_content(); ?>
                </div>

            </div>
        </div>
    </section>


</main>

<!-- Footer -->
<?php get_footer(); ?>