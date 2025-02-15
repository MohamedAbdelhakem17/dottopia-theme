<section class="py-10 relative">
    <div class="absolute bottom-0 left-0 w-full h-[50%] bg-main z-1"></div>

    <!-- Header -->
    <div class="text-center relative z-6">
        <h3 class="text-[16px] font-bold text-main mb-[14px] md:mb-[16px] title">
            Testimonials
        </h3>
        <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] font-main description">
            Read from our beloved clients
        </p>

        <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] description">
            Explore our more than 100 client testimonials and experience the impact of digital marketing that drives revenue.
        </p>
    </div>

    <div class="mx-auto relative z-6">
        <?php if (function_exists('testimonial_slider')) : ?>
            <?php testimonial_slider(); ?>
        <?php endif; ?>
    </div>





</section>