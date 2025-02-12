<?php
$partners = [
    ['image' => get_template_directory_uri() . '/assets/image/OUR PARTNERS/google.png', 'alt' => 'google logo'],
    ['image' => get_template_directory_uri() . '/assets/image/OUR PARTNERS/meta.png', 'alt' => 'meta logo'],
    ['image' => get_template_directory_uri() . '/assets/image/OUR PARTNERS/scre.png', 'alt' => 'scre logo'],
    ['image' => get_template_directory_uri() . '/assets/image/OUR PARTNERS/semrush.png', 'alt' => 'semrush logo'],
    ['image' => get_template_directory_uri() . '/assets/image/OUR PARTNERS/snap.png', 'alt' => 'snap logo'],
    ['image' => get_template_directory_uri() . '/assets/image/OUR PARTNERS/tiktok.png', 'alt' => 'tiktok logo'],
];
?>

<section class="py-10 px-4">
    <div class="container md:w-[90%] px-5 md:px-0 mx-auto text-center">
        <div>
            <h3 class="text-[16px] font-bold text-main mb-[14px] md:mb-[16px]">OUR PARTNERS</h3>
            <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] font-main">
                Step into Success<br class="hidden md:block" /> with industry giants
            </p>
            <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] font-sub">
                Our collaboration allows us to harness the latest innovations, insights, and cutting-edge tools to elevate your digital presence and marketing strategies.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-[80px] gap-y-5 mt-10">
            <?php foreach ($partners as $partner) : ?>
                <div class="flex justify-center items-center ">
                    <img src="<?php echo esc_url($partner['image']); ?>" alt="<?php echo esc_attr($partner['alt']); ?>" class="w-fit" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>