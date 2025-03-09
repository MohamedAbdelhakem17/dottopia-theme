<?php

function Testimonials($bg_color = '#FFCB00', $quote_color = 'text-yellow-400', $testimonial_bg = '#FFF9E6', $title_class = "text-main")
{
    // Fetch testimonials from ACF
    $testimonials = get_field('testimonial', "option");

    if ($testimonials): ?>
        <section class="w-full max-w-none mx-auto px-0 testimonial-slider py-10 relative">
            <div class="absolute bottom-0 left-0 w-full h-[50%]" style="background-color: <?php echo esc_attr($bg_color); ?>; z-index: 1;"></div>

            <div class="container mx-auto my-4">
                <!-- Header -->
                <div class="text-center relative z-6">
                    <h3 class="text-[16px] font-bold <?php echo esc_attr($title_class); ?> mb-[14px] md:mb-[16px]" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">Testimonials</h3>
                    <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] hanuman-font" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Read from our beloved clients
                    </p>

                    <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px]">
                        Explore our more than 100 client testimonials and experience the impact of digital marketing that drives revenue.
                    </p>
                </div>
            </div>

            <!-- Slider -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="swiper-slide py-12 px-2">
                            <div class="rounded-xl p-8 relative shadow-md flex flex-col justify-between h-full" style="background-color: <?php echo esc_attr($testimonial_bg); ?>;">
                                <div class="text-9xl <?php echo esc_attr($quote_color); ?> opacity-50 mb-0 leading-[18px] mt-4 py-3">
                                    &quot;
                                </div>

                                <div class="max-w-2xl mx-auto flex-grow">
                                    <p class="text-gray-800 text-lg mb-8 py-5 font-bold">
                                        <?php echo esc_html($testimonial['comment']); ?>
                                    </p>
                                </div>

                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-x-3">
                                        <img src="<?php echo esc_url($testimonial['user_image']); ?>"
                                            alt="<?php echo esc_attr($testimonial['name']); ?>"
                                            width="48" height="48"
                                            class="object-cover bg-white rounded-full">
                                        <div class="flex items-center gap-x-1">
                                            <span class="font-bold"><?php echo esc_html($testimonial['name']); ?></span> -
                                            <span class="text-[12px]"><?php echo esc_html($testimonial['company']); ?></span>
                                        </div>
                                    </div>
                                    <div class="w-16 h-16 flex items-center justify-center">
                                        <img src="<?php echo esc_url($testimonial['logo_image']); ?>"
                                            alt="<?php echo esc_attr($testimonial['company'] . ' logo'); ?>"
                                            width="50" height="50" class="object-contain">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
<?php endif;
} ?>