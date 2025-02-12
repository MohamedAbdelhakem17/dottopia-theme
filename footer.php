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
        <p>&copy; <?php echo date('Y'); ?> My Custom Theme. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>