<footer class="site-footer bg-[#1A1A1A] text-white py-5 px-2 space-y-10 text-center">
    <div class="container  mx-auto">

        <!-- top -->
        <div class="flex flex-col items-center justify-center space-y-4 md:flex-row md:space-y-0 md:space-x-8 my-10 py-3" data-aos="fade-in" data-aos-duration="1500">
            <img src="<?= esc_url(get_template_directory_uri() . "/assets/images/whatsapp_icon.svg") ?>" alt="Whatsapp Logo" class="w-10 h-10 md:order-none relative" />
            <div class="flex flex-col items-center md:flex-row md:space-x-4 w-[70%]">
                <div class="marquee-container">
                    <div class="marquee" id="marquee">
                        <p class="text-center font-bold leading-[35px] text-xl md:text-4xl">
                            Ready to speak with a marketing expert?
                            <span class="text-main"> Give us a ring.</span>
                        </p>
                    </div>
                </div>
            </div>
            <button class="bg-main text-black py-2 px-4 rounded-md font-sub font-light text-sm md:text-[14px] cursor-pointer relative">
                Send Message
            </button>
        </div>

        <!-- Middle -->
        <div class="grid grid-cols-4 md:grid-cols-4 lg:grid-cols-6 gap-4 px-2 md:px-10 border-y-1 border-gray-500/30 py-10">

            <div class="col-span-4 md:col-span-3 lg:col-span-2 p-2">
                <img data-aos="fade-up" src="<?= esc_url(get_template_directory_uri() . "/assets/images/logo_footer.png") ?>" alt="Dottopia Logo" class="mx-auto md:mx-0 block" />

                <p class="text-[15px] font-light font-roboto my-10 md:text-start capitalize text-gray-100 text-center" data-aos="fade-right">
                    We were asked to make a session that would truly display our target audience and our
                </p>

                <div class="flex space-x-5 my-10 justify-between">
                    <img data-aos="flip-up" src="<?= esc_url(get_template_directory_uri() . "/assets/images/meta_footer.png") ?>" alt="Meta Logo" class="w-fit md:mx-0 block" />
                    <img data-aos="flip-up" src="<?= esc_url(get_template_directory_uri() . "/assets/images/google_footer.png") ?>" alt="Meta Logo" class="w-fit md:mx-0 block" />
                    <img data-aos="flip-up" src="<?= esc_url(get_template_directory_uri() . "/assets/images/tia.png") ?>" alt="Meta Logo" class="w-fit md:mx-0 block" />
                </div>
            </div>


            <div class="col-span-2 md:col-span-1 p-2" data-aos="fade-left">
                <?php dynamic_sidebar('footer_services'); ?>
            </div>

            <div class="col-span-2 md:col-span-1 p-2" data-aos="fade-right">
                <?php dynamic_sidebar('footer_resources'); ?>
            </div>

            <div class="col-span-2 md:col-span-1 p-2" data-aos="fade-left">
                <?php dynamic_sidebar('footer_case_studies'); ?>
            </div>

            <div class="col-span-2 md:col-span-1 p-2" data-aos="fade-right">
                <?php dynamic_sidebar('footer_social_links'); ?>
            </div>

        </div>

        <!-- Bottom -->
        <p class="py-5 text-center text-[14px] font-normal"> Dottopia® 2014-2025 | Celebrating 10+ Years of Digital Marketing Excellence </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>