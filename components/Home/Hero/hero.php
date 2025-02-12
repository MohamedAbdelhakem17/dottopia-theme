<?php
$homeBG = get_template_directory_uri() . '/assets/image/background_image/home_bg.jfif';
?>

<header class="w-full h-screen bg-black relative overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 h-full w-full overflow-hidden opacity-20 flex items-center justify-center">
        <img src="<?php echo esc_url($homeBG); ?>" alt="background" class="w-full animate-spinSlow" />
    </div>

    <!-- Content -->
    <div class="container w-full h-full flex items-center justify-center flex-col p-5 relative z-10 mx-auto">
        <h3 class="capitalize text-white text-center text-[20px] leading-[1.6] md:text-5xl font-hanuman md:leading-[54px] mx-auto">
            We Simplify <span class="font-bold">Digital Growth</span> <br>
            so you can focus more on your <br>
            <span class="text-main font-bold">business cores.</span>
        </h3>

        <p class="font-roboto my-4 md:my-8 font-normal text-white text-center mx-auto">
            Reach wider audience and boost your sales with Dottopia,
            <br class="hidden md:block"> Ready to take the leap?
        </p>

        <button class="bg-main text-black py-2.5 px-5 rounded-md font-normal
                hover:bg-white hover:text-primary transition-all duration-300">
            Get a Proposal
        </button>
    </div>
</header>