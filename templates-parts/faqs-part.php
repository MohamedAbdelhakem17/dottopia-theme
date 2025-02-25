<?php function FAQs($border_color = "")
{
?>
    <section class="flex justify-center items-center p-3 my-4 flex-col">
        <h2 class="text-5xl font-bold text-center mb-4 font-main">FAQs</h2>
        <div class="lg:w-1/2 mx-auto">
            <?php
            $faqs = get_field("questions", "option");
            if ($faqs) :
            ?>
                <div id="accordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="border-t-2 <?php echo $border_color; ?> overflow-hidden my-2 py-2">
                            <button class="w-full p-4 flex items-center gap-x-3 cursor-pointer "
                                data-target="faq<?php echo $index; ?>">
                                <span id="icon" class="text-white bg-black w-[24px] h-[24px] rounded-full p-2 mr-2 inline-flex justify-center items-center">
                                    <i class="fa-solid fa-plus"></i>
                                </span>
                                <span class="font-main font-bold md:text-3xl text-[16px] text-start">
                                    <?php echo htmlspecialchars($faq['question']); ?>
                                </span>
                            </button>
                            <div id="faq<?php echo $index; ?>" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                                <div class="py-2 px-5 font-semibold text-[17px]">
                                    <?php echo htmlspecialchars($faq['answer']); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php
}
?>