<?php
// Assuming these images are in the "assets/images" folder
$case_studies = [
    [
        'title' => 'TECNO Mobile – Spark 5!',
        'image' => get_template_directory_uri() . '/assets/image/cases/case_1.png',
        'category' => 'Photography',
        'button_class' => 'bg-digital',
        'description' => ['The Spark5 is a smartphone with higher-than-average specs and a below-average price, perfect for ambitious youngsters.', 'We were asked to make a session that would truly display our target audience and our communication tone of voice.'],
        'details' => [
            'organic_traffic' => '77',
            'paid_traffic' => '88',
            'organic_revenue' => '100',
        ]
    ],
    [
        'title' => 'TECNO Mobile – Spark 5!',
        'image' => get_template_directory_uri() . '/assets/image/cases/case_2.png',
        'category' => 'SEO',
        'button_class' => 'bg-seo',
        'description' => ['The Spark5 is a smartphone with higher-than-average specs and a below-average price, perfect for ambitious youngsters.', 'We were asked to make a session that would truly display our target audience and our communication tone of voice.'],
        'details' => [
            'organic_traffic' => '77',
            'paid_traffic' => '88',
            'organic_revenue' => '100',
        ]
    ]
];
?>


<?php
// Assuming these images are in the "assets/images" folder
$case_1 = get_template_directory_uri() . '/assets/image/cases/case_1.png'; // Replace with correct path
$case_2 = get_template_directory_uri() . '/assets/image/cases/case_2.png'; // Replace with correct path
?>

<section class="bg-main p-3">
    <div class="px-4">
        <!-- Header -->
        <div class="text-center">
            <h3 class="text-[16px] font-bold mb-[14px] md:mb-[16px] font-sub title" >Case Studies</h3>
            <p class="mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] font-main description">
                Real Results, Real Feedback. <br class="hidden md:block" /> Hear From our Clients.
            </p>
        </div>

        <?php foreach ($case_studies as $case): ?>
            <div class="bg-white rounded-md w-full sm:w-[95%] mx-auto py-4 my-10 fade">
                <!-- heading -->
                <div class="flex flex-wrap justify-between items-center py-4 px-10">
                    <h3 class="font-bold font-main text-2xl md:text-3xl"><?php echo $case['title']; ?></h3>
                    <div class="flex items-center gap-x-2 cursor-pointer mt-3 md:mt-0 md:ml-auto -translate-x-10">
                        <p class="font-normal text-[12px]">Show Full Case</p>
                        <span class="bg-main h-[28px] w-[28px] rounded-full text-black flex items-center justify-center">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </div>
                </div>


                <!-- content -->
                <div class="line"></div>
                <div class="p-4 rounded-lg border-transparent border-[2px] border-t-main grid grid-cols-1 md:grid-cols-5 gap-4 md:gap-8 px-10 ">
                    <!-- Image -->
                    <div class="lg:col-span-2 md:col-span-5 self-center">
                        <img src="<?php echo $case['image']; ?>" alt="Photography" class="w-full object-cover rounded-md" />

                        <!-- button -->
                        <button class="<?php echo $case['button_class']; ?> text-white px-4 py-2 rounded-[50px] font-normal text-[12px] mt-4 md:mt-6 ">
                            <?php echo $case['category']; ?>
                        </button>
                    </div>

                    <!-- Content info -->
                    <div class="lg:col-span-3 md:col-span-5 py-4 flex flex-col gap-y-4 ">
                        <h5 class="font-normal font-main text-2xl md:text-4xl mb-4 md:mb-6">Promote Tecno's launch</h5>

                        <?php foreach ($case['description'] as $desc): ?>
                            <p class="text-[14px] md:text-[15px] font-normal text-[#3A3A3A] w-full md:w-[90%] my-2">
                                <?php echo $desc; ?>
                            </p>
                        <?php endforeach; ?>

                        <!-- details -->
                        <div class="mt-6 flex flex-wrap items-start gap-4 justify-center md:justify-start">
                            <div>
                                <span class="block font-bold font-main text-3xl md:text-5xl bg-black py-3 px-4 md:px-5 text-white relative overflow-hidden rounded-[5px] after:absolute after:top-[100%] after:left-[50%] after:w-[15px] after:h-[15px] after:bg-white after:z-[2] after:transform after:-translate-x-[50%] after:-translate-y-[50%] after:rotate-[-45deg] after:rounded-tr-[2px]">
                                    <?php echo $case['details']['organic_traffic']; ?><span class="text-xl md:text-2xl">%</span>
                                </span>
                                <p class="text-[12px] md:text-[14px] font-light w-[100px] md:w-[120px] font-sub text-gray-900">
                                    increase in organic traffic
                                </p>
                            </div>
                            <div>
                                <span class="block font-bold font-main text-3xl md:text-5xl bg-black py-3 px-4 md:px-5 text-white relative overflow-hidden rounded-[5px] after:absolute after:top-[100%] after:left-[50%] after:w-[15px] after:h-[15px] after:bg-white after:z-[2] after:transform after:-translate-x-[50%] after:-translate-y-[50%] after:rotate-[-45deg] after:rounded-tr-[2px]">
                                    <?php echo $case['details']['paid_traffic']; ?><span class="text-xl md:text-2xl">%</span>
                                </span>
                                <p class="text-[12px] md:text-[14px] font-light w-[100px] md:w-[120px] font-sub text-gray-900">
                                    increase in paid traffic
                                </p>
                            </div>
                            <div>
                                <span class="block font-bold font-main text-3xl md:text-5xl bg-black py-3 px-4 md:px-5 text-white relative overflow-hidden rounded-[5px] after:absolute after:top-[100%] after:left-[50%] after:w-[15px] after:h-[15px] after:bg-white after:z-[2] after:transform after:-translate-x-[50%] after:-translate-y-[50%] after:rotate-[-45deg] after:rounded-tr-[2px]">
                                    <?php echo $case['details']['organic_revenue']; ?><span class="text-xl md:text-2xl">%</span>
                                </span>
                                <p class="text-[12px] md:text-[14px] font-light w-[100px] md:w-[120px] font-sub text-gray-900">
                                    increase in organic revenue across the campaign
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>