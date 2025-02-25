<section class="py-10 px-4">
    <div class="container md:w-[90%] px-5 md:px-0 mx-auto text-center">
        
        <div>
            <h3 class="text-[16px] font-bold text-main mb-[14px] md:mb-[16px] title">OUR PARTNERS</h3>
            <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] font-main title">
                Step into Success<br class="hidden md:block" /> with industry giants
            </p>
            <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] font-sub description">
                Our collaboration allows us to harness the latest innovations, insights, and cutting-edge tools to elevate your digital presence and marketing strategies.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mt-10 partner">
            <?php $clients = get_field('clients', 'option'); ?>
            <?php if ($clients) : ?>
                <?php foreach ($clients as $client) : ?>
                    <?php
                    $image_url = isset($client) ? esc_url($client) : '';
                    $image_alt = isset($client) ? esc_attr($client) : 'Client Logo';
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