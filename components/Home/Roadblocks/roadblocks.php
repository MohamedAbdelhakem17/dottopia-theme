<?php require_once 'roadblocks_card.php'; ?>

<section class="roadblocks py-10 bg-black relative after:content-[''] after:absolute after:right-0 after:top-[20%] after:bg-main/50 after:shadow-custom after:rounded-full after:w-[30px]  after:h-[30px] after:translate-x-[50%]">
    <div class="container mx-auto px-4 py-5">
        <div>
            <h2 class="text-center font-bold text-white text-[25px] md:text-[40px] font-main mb-[14px] leading-10">
                Digital Roadblocks? <br class="hidden md:block" />
                No Problem
            </h2>
            <p class="font-normal text-[13px] text-center text-white leading-[22.4px] font-sub md:w-[80%] mx-auto">
                Without consistent site traffic, you're missing out on valuable visitors, leads, and revenue. Thankfully, custom SEO solutions can get you back <br class="hidden md:block" /> on track by boosting your presence in search engine
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 md:mt-32 justify-center">
            <?php render_card(
                "My website isn't getting enough traffic.",
                "Without consistent site traffic, you're missing out on valuable visitors, leads, and revenue. Thankfully, custom SEO solutions can get you back on track by boosting your presence in search engine results, so more people can find and visit your site.",
                "border-seo",
                "text-[#E4D6FF]",
                "bg-[#8122d1e0]"
            ); ?>
            <?php render_card(
                "My cost from digital Campaigns is too high",
                "Tired of wasting dollars on ad campaigns? Our paid ad experts can help streamline your bidding strategy and refine ad targeting, so you get the maximum impact from your ads.",
                "border-performance",
                "text-[#4AFFC6]",
                "bg-[#39c6a1]"
            ); ?>
            <?php render_card(
                "We're Failing to Engage with Brand Content",
                "Creating engaging content is crucial for your online presence. If you're looking to elevate your content game, our content creation team is here to help. We excel at crafting captivating, audience-focused content that ignites interest and fosters interaction.",
                "border-digital",
                "text-[#FFF8E1]"
            ); ?>
        </div>
    </div>
</section>