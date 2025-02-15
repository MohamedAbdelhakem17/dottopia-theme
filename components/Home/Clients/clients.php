<?php
$color_y_bg = get_template_directory_uri() . '/assets/image/background_image/color_y_bg.svg';
?>

<section class="relative py-4">
    <div class="transform -translate-y-[50%] w-[80%] mx-auto bg-white rounded-md py-2">
        <p class="text-center text-main font-bold my-2 title" >Clients</p>
        <p class="font-bold md:text-4xl text-2xl text-center font-main leading-[40px] description">
            Trusted by over <span style="background-image: url('<?php echo esc_url($color_y_bg); ?>');
            background-position: center; background-size: contain; background-repeat: no-repeat; padding: 5px;">100+</span>
            <br class="hidden md:block" /> clients in various industries
        </p>
    </div>
</section>