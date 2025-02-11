<?php
include 'service_container.php';
include get_template_directory() . '/assets/data/service.php'
?>

<section class="py-10 px-4">
    <div class="md:w-[90%] px-5 md:px-0 mx-auto text-center" style="margin: 0 auto;">
        <!-- Header -->
        <h3 class="text-[16px] font-bold  mb-[14px] md:mb-[16px] text-main">Our Services</h3>
        <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px]">
            Transform Your Online <br class="hidden md:block" /> Presence with Dystopia
        </p>
        <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] font-sub">
            At Dottopia, we offer a range of top-tier digital marketing services that will help you reach your target
            audience, increase your online visibility, and drive measurable results. Our team of experts combines
            creativity with data-driven strategies to deliver outstanding outcomes every time.
        </p>

        <!-- Services -->
        <?php foreach ($services as $service) : ?>
            <?= renderContainer($service); ?>
        <?php endforeach; ?>
    </div>
</section>