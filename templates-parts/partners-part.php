<section class="py-10 px-4">
    <div class="container md:w-[90%] px-5 md:px-0 mx-auto text-center">

        <div>
            <h3 class="text-[16px] font-bold text-main mb-[14px] md:mb-[16px] title" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">OUR PARTNERS</h3>
            <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] hanuman-font title" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
                Step into Success<br class="hidden md:block" /> with industry giants
            </p>
            <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] font-sub description">
                Our collaboration allows us to harness the latest innovations, insights, and cutting-edge tools to elevate your digital presence and marketing strategies.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mt-10 partner">
            <?php $partners = get_field('partners', 'option'); ?>

            <?php if ($partners) : ?>
                <?php foreach ($partners as $partner) : ?>
                    <?php
                    $image_url = isset($partner['url']) ? esc_url($partner['url']) : '';
                    $image_alt = !empty($partner['alt']) ? esc_attr($partner['alt']) : 'Client Logo';
                    ?>
                    <div class="p-4 flex items-center justify-center">
                        <?php if ($image_url) : ?>
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="object-contain" />
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>