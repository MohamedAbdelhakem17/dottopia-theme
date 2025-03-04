<footer class="site-footer bg-[#1A1A1A] text-white py-5 px-2 space-y-10 text-center">
    <div class="container  mx-auto">
        <div class="flex flex-col items-center justify-center space-y-4 py-2 md:flex-row md:space-y-0 md:space-x-8">
            <div class="flex flex-col items-center md:flex-row md:space-x-4">
                <img src="<?= esc_url(get_template_directory_uri() . "/assets/image/footer/whatsapp_icon.svg") ?>" alt="Whatsapp Logo" class="w-10 h-10 md:order-none" />
                <p class="text-center font-bold leading-[33px] text-xl md:text-4xl">
                    Ready to speak with a marketing expert?
                    <span class="text-main"> Give us a ring.</span>
                </p>
            </div>
            <button class="bg-main text-black py-2 px-4 rounded-md font-sub font-light text-sm md:text-[14px] cursor-pointer">
                Send Message
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-4 px-2 md:px-10">

            <div class="col-span-1 md:col-span-3 lg:col-span-2 p-2">
                <img src={footer_logo} alt="Dottopia Logo" class="mx-auto md:mx-0 block" />

                <p class="text-[15px] font-light font-roboto my-10 md:text-start capitalize text-gray-100 text-center  ">
                    We were asked to make a session that would truly display our target audience and our
                </p>

                <div class="flex space-x-5 my-6 justify-between">
                    <img src={meta_footer} alt="Meta Logo" class="w-fit md:mx-0 block" />
                    <img src={google_footer} alt="Meta Logo" class="w-fit md:mx-0 block" />
                    <img src={tia} alt="Meta Logo" class="w-fit md:mx-0 block" />
                </div>
            </div>


            <div class="col-span-1 md:col-span-1 p-2">
                <?php dynamic_sidebar('footer_services'); ?>
            </div>

            <div class="col-span-1 md:col-span-1 p-2">
                <?php dynamic_sidebar('footer_resources'); ?>
            </div>

            <div class="col-span-1 md:col-span-1 p-2">
                <?php dynamic_sidebar('footer_case_studies'); ?>
            </div>
            
            <div class="col-span-1 md:col-span-1 p-2">
                <?php dynamic_sidebar('footer_social_links'); ?>
            </div>

        </div>

        <p>&copy; <?php echo date('Y'); ?> My Custom Theme. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>