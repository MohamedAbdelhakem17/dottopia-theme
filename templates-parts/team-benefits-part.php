<?php
// Define benefits array at the top of the file
$box_bg = get_template_directory_uri() . '/assets/images/backgrounds/box_bg.svg';
$benefits = [
    [
        'icon' => 'pc 1.svg',
        'title' => 'Dynamic Work Environment',
        'description' => 'We offer a dynamic and inspiring work environment where creativity is valued, and opportunities for development are endless.'
    ],
    [
        'icon' => 'pc 2.svg',
        'title' => 'Development & Training Programs',
        'description' => 'Our team members enjoy comprehensive training programs to enhance their skills and grow their careers. Offering a suitable digital marketing jobs for all talents.'
    ],
    [
        'icon' => 'col.svg',
        'title' => 'Our Mental & Well-being Support',
        'description' => 'We provide medical insurance to ensure the health and peace of mind of our employees. At Dottopia, we’re invested in your success and well-being, both professionally and personally.'
    ]
];
?>

<section class="roadblocks py-10 bg-black relative after:content-[''] after:absolute after:right-0 after:top-[20%] after:bg-main/50 after:shadow-custom after:rounded-full after:w-[30px] after:h-[30px] after:translate-x-[50%]">
    <div class="container mx-auto px-4 py-5">
        <div class="text-center">
            <h2 class="font-bold text-white text-[25px] md:text-[40px] hanuman-font mb-[14px] leading-10" data-aos="fade-down">
                Benefits of Joining our Team
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-10 my-10 md:mt-32 justify-center max-w-6xl mx-auto">
            <?php foreach ($benefits as $benefit): ?>
                <div class="relative p-4 card max-w-[400px] mx-auto" data-aos="fade-up">
                    <?php if (end($benefits) !== $benefit): ?>
                        <div class="shadow-2xl w-[100px] sm:w-[150px] h-[100px] sm:h-[150px] absolute bg-main top-[-20px] right-[10px] sm:right-[20px] rounded-full"></div>
                    <?php endif; ?>

                    <img src="<?= get_template_directory_uri() . "/assets/images/icons/" . $benefit['icon']; ?>"
                        alt="<?= $benefit['title']; ?>"
                        class="absolute top-[-40px] sm:top-[-50px] right-[5px] sm:right-[10px] z-20 w-[100px] sm:w-[150px]" />

                    <div class="h-full p-4 bg-white/5 backdrop-blur-[40px] rounded-[30px] border border-main">
                        <img src="<?= esc_url($box_bg); ?>" alt="BG" class="absolute left-0 top-0 h-full w-full z-10 object-cover" />
                        <div class="relative z-30">
                            <div class="flex items-center gap-x-1 p-4 rounded-md">
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                                <span class="w-2 h-2 rounded-full bg-white/50"></span>
                            </div>
                            <div class="p-3 sm:p-5">
                                <h3 class="font-bold text-[#FFCE26] text-[16px] md:text-[20px] hanuman-font mb-[14px] leading-6 md:leading-10">
                                    <?= $benefit['title']; ?>
                                </h3>
                                <p class="font-light text-[12px] md:text-[14px] text-white leading-[17px]">
                                    <?= $benefit['description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>