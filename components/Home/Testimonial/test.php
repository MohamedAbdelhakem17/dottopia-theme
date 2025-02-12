<?php
$testimonials = [
    [
        'id' => 1,
        'name' => 'Ashley Narayanan',
        'company' => 'Uber, Qatar',
        'quote' => "Haven't actually dealt with so many advertising agencies in Qatar, we found it really exciting working with Dottopia on such a big project of ours.",
    ],
    [
        'id' => 2,
        'name' => 'John Smith',
        'company' => 'Tech Corp',
        'quote' => 'Working with the team has been an incredible experience. Their attention to detail and creativity is unmatched.',
    ],
    [
        'id' => 3,
        'name' => 'Sarah Johnson',
        'company' => 'Design Studio',
        'quote' => "Haven't actually dealt with so many advertising agencies in Qatar, we found it really exciting working with Dottopia on such a big project of ours.",
    ],
    [
        'id' => 4,
        'name' => 'Michael Brown',
        'company' => 'Innovation Inc',
        'quote' => "Their expertise and dedication to our project were outstanding. We couldn't be happier with the results.",
    ],
];
?>

<div class="w-full max-w-none mx-auto px-0 py-12 testimonial-slider">
    <div class="relative">
        <div class="testimonial-carousel">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="py-12 px-2 outline-none aspect-[1/.5]">
                    <div class="bg-[#FFF9E6] rounded-xl p-8 relative transition-all duration-300 transform shadow-md flex flex-col justify-between h-full">
                        <!-- Quote Mark Decoration -->
                        <div class="text-9xl text-yellow-400 opacity-50 mb-0 leading-[18px] mt-4 py-3">&quot;</div>

                        <div class="max-w-2xl mx-auto flex-grow">
                            <!-- Testimonial Quote -->
                            <p class="text-gray-800 text-lg mb-8 py-5 w-[80%] font-bold">
                                <?php echo esc_html($testimonial['quote']); ?>
                            </p>
                        </div>

                        <!-- Author Info -->
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center justify-center gap-x-3">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/user.png'); ?>" alt="<?php echo esc_attr($testimonial['name']); ?>" width="48" height="48" class="object-cover bg-white rounded-full" />
                                <div class="flex items-center justify-center gap-x-1">
                                    <span class="font-bold"><?php echo esc_html($testimonial['name']); ?></span> -
                                    <span class="text-[12px]"><?php echo esc_html($testimonial['company']); ?></span>
                                </div>
                            </div>
                            <div class="w-16 h-16 flex items-center justify-center">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/uber_t.png'); ?>" alt="<?php echo esc_attr($testimonial['company']); ?> logo" width="50" height="50" class="object-contain" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

