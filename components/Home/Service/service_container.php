<?php
function renderContainer($data)
{
    $title = $data['title'];
    $info = $data['info'];
    $desc = $data['desc'];
    $color = strtolower(trim($data['color']));
    $image = $data['image'];

    // Determine the background image based on the color
    $img = "";
    switch ($color) {
        case "performance":
            $img = get_template_directory_uri() . "/assets/image/background_image/line_g.svg";
            $textColor = "text-performance";
            break;
        case "digital":
            $img = get_template_directory_uri() . "/assets/image/background_image/line_y.svg')";
            $textColor = "text-digital";
            break;
        case "seo":
            $img = get_template_directory_uri() . "/assets/image/background_image/line_p.svg')";
            $textColor = "text-seo";
            break;
        default:
            $textColor = "text-main";
    }

    ob_start();
?>

    <section class="py-2 my-10">
        <div class=" grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-y-0 items-center service-container">
            <!-- Info Section -->
            <div class="px-4 md:px-8 text-start col-span-1 md:col-span-1 info">

                <h4 class="<?= $textColor ?> leading-[22.4px] font-[400] text-[14px] font-sub"><?= $title ?></h4>

                <p class="font-bold text-[40px] font-main my-2 leading-10">
                    <?= isset($info['main']) ? $info['main'] : $info['start'] ?>
                    <span class="<?= $textColor ?> p-0 m-0 inline-block">
                        <?= $info['sub'] ?>
                        <img src="<?= $img ?>" class="-translate-y-2">
                    </span>
                    <?= isset($info['end']) ? "<span>{$info['end']}</span>" : "" ?>
                </p>

                <p class="mt-4 text-sm md:text-base text-gray-700 md:w-[80%]">
                    <?= $desc ?>
                </p>

                <div class="flex items-center gap-x-5 mt-6 cursor-pointer">
                    <p class="font-[400] text-[14px] md:text-[16px]">Know more about us</p>
                    <span
                        class="bg-main h-[26px] w-[26px] rounded-full text-black flex items-center justify-center">
                        <i class="fa-solid fa-arrow-right text-[14px]"></i>
                    </span>
                </div>
            </div>

            <!-- Image Container -->
            <div class="px-4 md:px-8 col-span-1 md:col-span-1">
                <img src="<?= get_template_directory_uri() . $image ?>" alt="<?= $title ?>" class="w-full img object-cover">
            </div>
        </div>
    </section>

<?php

    return ob_get_clean();
}

?>