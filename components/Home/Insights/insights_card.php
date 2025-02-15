<?php
$blogs = [
    [
        'image' => get_template_directory_uri() . '/assets/image/blog/blog_3.png',
        'title' => 'Digital Marketing Updates',
        'desc' => 'How To Make The Most of Black Friday 2020',
        'time' => '10 mins read'
    ],
    [
        'image' => get_template_directory_uri() . '/assets/image/blog/blog_2.png',
        'title' => 'Digital Marketing Updates',
        'desc' => 'Dottopia’s 2023 digital marketing predictions: GA4, TikTok and the rise of AI',
        'time' => '10 mins read'
    ],
    [
        'image' => get_template_directory_uri() . '/assets/image/blog/blog_1.png',
        'title' => 'Digital Marketing Updates',
        'desc' => 'Personalisation and a cookie-less future',
        'time' => '10 mins read'
    ]
];
?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
    <?php foreach ($blogs as $blog) : ?>
        <div class="relative overflow-hidden rounded-md BLOG">

            <!-- Image -->
            <img src="<?php echo esc_url($blog['image']); ?>" alt="<?php echo esc_attr($blog['title']); ?>" class="fit-full w-full" loading="lazy" />

            <!-- Text -->
            <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-end px-5 py-8">
                <p class="text-main text-start text-[13px] font-light py-4">
                    <?php echo esc_html($blog['title']); ?>
                </p>
                <h3 class="font-main text-white font-bold text-2xl text-start">
                    <a href=""> <?php echo esc_html($blog['desc']); ?></a>
                </h3>
                <p class="text-main text-end text-[13px]">
                    <?php echo esc_html($blog['time']); ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>