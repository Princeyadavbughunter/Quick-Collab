<?php
$faqs = [
    ['q' => 'How do I get started with QuickCollab?', 'a' => 'Getting started is simple! Contact us through our enquiry form, schedule a call, and our team will guide you through the onboarding process in 3 easy steps.'],
    ['q' => 'Why should I choose QuickCollab over other agencies?', 'a' => 'We offer data-driven influencer marketing with proven results, transparent reporting, and a dedicated team of experts who truly understand your brand goals.'],
    ['q' => 'What does "CTR- based UGC Marketing Agency" mean?', 'a' => 'CTR-based means we focus on Click-Through Rate performance. Every UGC (User Generated Content) campaign we run is optimized to drive real clicks, engagement, and conversions for your brand.'],
];
?>

<section class="faq-section">
    <h2 class="faq-heading"><?php echo esc_html( get_theme_mod( 'faq_heading', 'FAQs' ) ); ?></h2>

    <div class="underline-bar">
        <span style="width: 80px; background-color: #1a5c52;"></span>
        <span style="width: 80px; background-color: #2bbfaa;"></span>
        <span style="width: 80px; background-color: #c8d832;"></span>
    </div>

    <div style="width: 100%; text-align: center; margin: 60px 0 40px;">
        <p class="faq-subtext" style="display: block; text-align: center; font-size: 19px; color: #444; font-weight: 500; line-height: 1.6; width: 100%; margin: 0 auto !important;">
            <?php echo esc_html( get_theme_mod( 'faq_subtext', 'You can schedule your call with QuickCollab in 3 simple steps and Transform your brand.' ) ); ?>
        </p>
    </div>

    <div class="faq-list">
        <?php foreach ($faqs as $index => $faq) : ?>
            <div class="faq-item">
                <button class="faq-question">
                    <span><?php echo ($index + 1) . '. ' . $faq['q']; ?></span>
                    <div class="faq-icon">+</div>
                </button>
                <div class="faq-answer"><?php echo $faq['a']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<style>
.faq-section {
    background: #e0e0e0;
    padding: 60px 50px 80px;
    width: 100%;
    border-radius: 0; /* Removed rounding to meet footer flat */
    margin-top: 0;
    margin-bottom: 0;
}

.faq-heading { text-align: center; font-size: 38px; font-weight: 800; color: #1a1a1a; margin-bottom: 12px; }

.underline-bar {
  display: flex;
  justify-content: center;
  gap: 4px;
  margin-bottom: 20px;
}

.underline-bar span {
  height: 4px;
  border-radius: 2px;
  display: inline-block;
}

.faq-list { display: flex; flex-direction: column; gap: 12px; }

.faq-item { background: #f4f6f8; border-radius: 10px; overflow: hidden; }

.faq-question {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 22px 24px;
    background: transparent;
    border: none;
    cursor: pointer;
    text-align: left;
    gap: 16px;
}

.faq-question span { font-size: 16px; font-weight: 700; }

.faq-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #1a1a1a;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0; /* Ensures the icon stays a perfect circle and doesn't get squeezed */
}

.faq-item.open .faq-icon { background: #1a5c52; }

.faq-answer {
    padding: 0 24px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
    font-size: 14px;
    color: #555;
    line-height: 1.75;
}

.faq-item.open .faq-answer {
    max-height: 200px;
    padding: 0 24px 20px;
}

@media (max-width: 900px) {
    .faq-section { padding: 40px 20px 60px; margin-top: 0; }
    .faq-heading { font-size: 28px; }
    .faq-subtext { font-size: 16px !important; width: 100% !important; padding: 0 10px; }
    .underline-bar span { width: 60px !important; }
}
</style>
