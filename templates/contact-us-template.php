<?php // Template Name: Contact Us Template
?>

<!-- Header -->
<?php get_header(); ?>

<!-- Main Content -->
<main>

    <section class=" p-5 my-4">
        <div class="container mx-auto py-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="col-span-1 py-10 px-4">
                    <div class="contact-swiper-container">
                        <div class="swiper-wrapper contact-swiper-wrapper"> <!-- Added both classes -->
                            <?php
                            $testimonials = get_field('testimonial', "option");
                            foreach ($testimonials as $testimonial): ?>
                                <div class="swiper-slide py-12 px-2">
                                    <div class="rounded-xl p-8 relative shadow-md flex flex-col justify-between h-full bg-red-900/60">
                                        <div class="text-9xl text-main opacity-50 mb-0 leading-[18px] mt-4 py-3">
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
                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 px-4">
                    <?php the_content(); ?>
                </div>

            </div>
        </div>
    </section>


</main>

<!-- Footer -->
<?php get_footer(); ?>