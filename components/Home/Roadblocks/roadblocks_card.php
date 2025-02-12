<?php
function render_card($title, $description, $borderColor = '', $titleColor = '', $ballColor = '')
{
    $box_bg = get_template_directory_uri() . '/assets/image/background_image/box_bg.svg';
?>
    <div class="col-span-1 relative p-4 card">
        <?php if (!empty($ballColor)) : ?>
            <div
                class="shadow-2xl w-[250px] h-[250px] absolute <?php echo esc_attr($ballColor); ?> top-[-20px] right-[50px] rounded-full">
            </div>
        <?php endif; ?>

        <div
            class="h-full top-0 left-0 p-4 w-full sm:w-[90%] mx-auto bg-white/5 backdrop-blur-[40px] overflow-hidden backdrop-brightness-10 rounded-[30px] border-[1px] <?php echo esc_attr($borderColor); ?>">
            <img src="<?php echo esc_url($box_bg); ?>" alt="BG" class="left-0 top-0 h-full w-fit absolute z-10" />
            <div class="w-full h-full relative z-30">
                <div
                    class="flex items-center gap-x-1 [&>span]:w-2 [&>span]:h-2 [&>span]:rounded-full [&>span]:bg-white/50 p-4 rounded-md">
                    <span></span><span></span><span></span>
                </div>
                <div class="p-2">
                    <h3
                        class="font-bold <?php echo esc_attr($titleColor); ?> text-[16px] md:text-[20px] font-hanuman mb-[14px] leading-10">
                        <?php echo esc_html($title); ?>
                    </h3>
                    <p class="font-light text-[12px] text-white leading-[17px]">
                        <?php echo esc_html($description); ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
<?php
}
