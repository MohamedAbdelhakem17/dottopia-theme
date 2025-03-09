<?php // Template Name: Contact Us Template 
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>
    <section class="p-4 sm:p-5 my-5">
        <div class="container mx-auto my-5 p-4 sm:p-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 py-5">
                <!-- Testimonials -->
                <div class="col-span-1 py-4 px-2 sm:px-4 w-full min-h-[50vh] lg:min-h-auto">
                    <h1 class="hanuman-font text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 leading-tight sm:leading-[50px]">
                        You Need A Partner? <br class="hidden lg:block"> We're Here To Help.
                    </h1>
                    <p class="text-sm sm:text-base leading-6 sm:leading-[35px]">
                        Before we start, we would like to better understand your needs.
                        <br class="hidden lg:block">
                        We’ll review your application and schedule a free estimation call.
                    </p>
                    <div class="swiper mySwiper w-full">
                        <div class="swiper-wrapper">
                            <?php
                            $testimonials = get_field('testimonial', "option");
                            foreach ($testimonials as $testimonial): ?>
                                <div class="swiper-slide py-3 px-2 w-full">
                                    <div class="rounded-xl p-4 sm:p-8 relative shadow-lg flex flex-col justify-between h-full mx-auto">
                                        <!-- Image -->
                                        <div class="w-16 h-16 sm:w-20 sm:h-20 flex items-center justify-center rounded-full">
                                            <img src="<?php echo esc_url($testimonial['logo_image']); ?>"
                                                alt="<?php echo esc_attr($testimonial['company'] . ' logo'); ?>"
                                                width="40" height="40" class="object-contain">
                                        </div>
                                        <!-- Comment -->
                                        <div class="max-w-2xl mx-auto flex-grow">
                                            <p class="text-gray-800 text-xs sm:text-sm mb-2 py-2 font-bold">
                                                <?php echo esc_html($testimonial['comment']); ?>
                                            </p>
                                        </div>
                                        <!-- User Info -->
                                        <p class="font-bold text-sm sm:text-base"><?php echo esc_html($testimonial['name']); ?></p>
                                        <p class="text-[10px] sm:text-[12px]"><?php echo esc_html($testimonial['company']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Navigation buttons with icons -->
                        <div class="flex items-center justify-between w-full mt-6 sm:mt-[60px] mb-4 sm:mb-[20px]">
                            <div class="swiper-pagination"></div>
                            <div class="relative w-full flex justify-end gap-4">
                                <div class="swiper-button-prev">
                                    <i class="fas fa-arrow-left text-sm sm:text-base"></i> <!-- Left arrow icon -->
                                </div>
                                <div class="swiper-button-next">
                                    <i class="fas fa-arrow-right text-sm sm:text-base"></i> <!-- Right arrow icon -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-span-1 px-2 sm:px-4">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>