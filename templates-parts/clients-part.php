<?php
function Clients($color = "text-main", $number_color = "text-black", $background = null)
{
    if (!$background) {
        $background = get_template_directory_uri() . '/assets/images/backgrounds/color_main_bg.svg';
    } else {
        $background = get_template_directory_uri() . '/assets/images/backgrounds/' . $background;
    }
?>
    <section class="relative py-4">
        <div class="transform -translate-y-[50%] w-[90%] mx-auto bg-white rounded-md py-[10px]">
            <p class="text-center <?php echo esc_attr($color); ?> font-bold my-2 text-[22px] md:text-[26px] title"> Clients </p>

            <p class="font-bold text-[23px] md:text-4xl text-center hanuman-font leading-[25px] md:leading-[40px] description">
                Trusted by over
                <span class="<?php echo esc_attr($number_color); ?> p-2 inline-block" style="
                    background-image: url('<?php echo esc_url($background); ?>'); 
                    background-position: center; 
                    background-size: 100% 100%; 
                    background-repeat: no-repeat;">
                    100+
                </span>
                <br class="hidden md:block" /> clients in various industries
            </p>

        </div>

        <section>
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <!-- Get Clients -->
                <?php
                $clients = get_field('clients', 'option');
                if (!empty($clients) && is_array($clients)) :
                    foreach ($clients as $client) :
                ?>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 p-4 flex items-center justify-center">
                            <img src="<?php echo esc_url($client); ?>" alt="Client Logo" class="object-contain" />
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </section>
    </section>
<?php
}
?>