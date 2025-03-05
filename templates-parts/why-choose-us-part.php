<?php function WhyChooseUS($background_color = "", $title_clore = "")
{ ?>

    <section class="container mx-auto py-12 px-6">

        <!-- Title Section -->
        <h3 class="text-[16px] font-bold  mb-[14px] md:mb-[16px] text-center <?= $title_clore ?>">why choose us</h3>
        <p class="mb-2 md:mb-6 text-[20px] md:text-[30px] lg:text-[40px] font-bold md:leading-[50px] text-center">
            Discover The Spark <br class="hidden md:block" /> That Sets Us Apart
        </p>
        <p class="font-light text-[13px] md:text-[16px] lg:w-[70%] md:w-[90%] mx-auto leading-[22.4px] font-sub text-center">
            We craft strategies that drive results. Here’s a glimpse into why choosing us is
            choosing to illuminate your path to success. </p>

        <!-- Comparison Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-4 gap-y-4 mt-10 md:justify-center">

            <!-- Dottopia Section -->
            <div class="col-span-1 ">
                <div class="lg:w-[80%] mx-auto p-6 rounded-lg shadow-md"
                    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/dottopia_cercil.svg') top right /200px no-repeat, #<?= $background_color ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="dottopia logo"
                        class="w-[155px]">
                    <ul class="mt-4 space-y-3 text-gray-700 px-3 py--2">
                        <?php
                        $dottopia_features = get_field("dottopia", "option");
                        foreach ($dottopia_features as $feature) :
                            $icon = $feature["include"] == "true" ? '<i class="fa-solid fa-circle-check text-green-500 mr-4 mt-2 text-[24px]"></i>' : '<i class="fa-solid fa-circle-xmark text-red-500 mr-4 mt-2 text-[24px]"></i>' ?>
                            <li class='flex items-start'><?= $icon ?> <?= $feature['item'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <!-- Local Marketing Agency Section -->
            <div class="col-span-1">
                <div class="bg-white p-4 rounded-lg shadow-md h-[100%] lg:w-[80%] mx-auto">
                    <h2 class="text-[24px] font-bold hanuman-font p-4">Local Marketing Agency</h2>
                    <ul class="mt-4 space-y-3 text-gray-700 px-3 py--2">
                        <?php
                        $local_marketing_agency = get_field("local_marketing_agency", "option");
                        foreach ($local_marketing_agency as $feature) :
                            $icon = $feature["include"] == "true" ? '<i class="fa-solid fa-circle-check text-green-500 mr-4 mt-2 text-[24px]"></i>' : '<i class="fa-solid fa-circle-xmark text-red-500 mr-4 mt-2 text-[24px]"></i>' ?>
                            <li class='flex items-start'><?= $icon ?> <?= $feature['item'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <!-- In-House Marketing Section -->
            <div class="col-span-1">
                <div class="bg-white p-6 rounded-lg shadow-md h-[100%] lg:w-[80%] mx-auto">
                    <h2 class=" text-[24px] font-bold hanuman-font p-4 ">In-House Marketing</h2>
                    <ul class="mt-4 space-y-3 text-gray-700 px-3 py--2">
                        <?php
                        $in_house_marketing = get_field("in-house_marketing", "option");
                        foreach ($in_house_marketing as $feature) :
                            $icon = $feature["include"] == "true" ? '<i class="fa-solid fa-circle-check text-green-500 mr-4 mt-2 text-[24px]"></i>' : '<i class="fa-solid fa-circle-xmark text-red-500 mr-4 mt-2 text-[24px]"></i>' ?>
                            <li class='flex items-centre justify-center'><?= $icon ?> <span> <?= $feature['item'] ?> </span>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php } ?>