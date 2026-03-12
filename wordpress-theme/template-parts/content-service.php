<?php
$services = [
    [
        'icon' => get_template_directory_uri() . '/assets/images/icon1.png',
        'is_image' => true,
        'title' => 'Influencer Marketing',
        'desc' => 'We connect your brand with the right creators  from nano to mega — to drive authentic reach, engagement, and trust at scale.'
    ],
    [
        'icon' => get_template_directory_uri() . '/assets/images/icon2.png',
        'is_image' => true,
        'title' => 'Organic UGC Ads',
        'desc' => 'Real people, real content, real results. We produce genuine user-generated content that blends into feeds and converts better than traditional ads.'
    ],
    [
        'icon' => '🔥',
        'is_image' => false,
        'title' => 'Viral Ads Making',
        'desc' => 'We craft high-energy, shareable video ads engineered to stop the scroll, spark conversations, and get your brand seen by millions.'
    ],
];
?>

<section class="services-section" id="service">
    <div class="services-heading">
        <h2><?php echo get_theme_mod( 'service_heading', 'Our <strong>Services</strong>' ); ?></h2>
    </div>

    <div class="underline-bar-colored">
        <span style="width: 80px; background-color: #1a5c52;"></span>
        <span style="width: 80px; background-color: #2bbfaa;"></span>
        <span style="width: 80px; background-color: #c8d832;"></span>
    </div>

    <div class="cards-grid reveal-on-scroll">
        <?php foreach ($services as $index => $service) : ?>
            <div class="service-card" style="--index: <?php echo $index; ?>;">
                <div class="card-header">
                    <div class="icon-wrap">
                        <?php if ($service['is_image']) : ?>
                            <img src="<?php echo $service['icon']; ?>" alt="<?php echo $service['title']; ?> Icon" class="service-icon-img">
                        <?php else : ?>
                            <?php echo $service['icon']; ?>
                        <?php endif; ?>
                    </div>
                    <span class="card-title"><?php echo $service['title']; ?></span>
                </div>
                <p class="card-desc"><?php echo $service['desc']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<style>
.services-section {
    background-color: #e0e0e0;
    padding: 60px 20px;
    width: 100%;
    border-radius: 8px;
}

.services-heading {
    text-align: center;
    margin-bottom: 14px;
}

.services-heading h2 {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 48px;
    color: #1a3c34;
    font-weight: 400;
}

.services-heading h2 strong {
    font-weight: 800;
}

.underline-bar-colored {
    display: flex;
    justify-content: center;
    gap: 0; /* Removed gap */
    margin-bottom: 50px;
}

.underline-bar-colored span {
    height: 6px;
    display: inline-block;
}

.underline-bar-colored span:first-child {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.underline-bar-colored span:last-child {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    max-width: 1300px;
    margin: 0 auto;
}

.service-card {
    background: #fff;
    border-radius: 24px;
    padding: 40px 32px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: transform 0.9s ease, opacity 1.2s cubic-bezier(0.22, 1, 0.36, 1), transform-animation 1.2s cubic-bezier(0.22, 1, 0.36, 1);
    
    /* Animation initial state */
    opacity: 0;
    transform: translateY(60px) scale(0.92); /* Deeper start position */
    transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); /* Slower, smoother easing */
    transition-delay: calc(var(--index) * 0.25s); /* Increased delay between cards */
}

.cards-grid.is-visible .service-card {
    opacity: 1;
    transform: translateY(0) scale(1);
}

.service-card:hover {
    transform: translateY(-12px) !important; /* Premium lift on hover */
}

.card-header {
    display: flex;
    align-items: center;
    gap: 16px;
}

.icon-wrap {
    width: 56px;
    height: 56px;
    background-color: #1a5c52;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    flex-shrink: 0;
    overflow: hidden; /* For images */
}

.service-icon-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 10px; /* Give some breathing room */
}

.card-title {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: #1a3c34;
    line-height: 1.2;
}

.card-desc {
    font-size: 15.5px;
    color: #555;
    line-height: 1.5;
}

@media (max-width: 900px) {
    .services-section { padding: 50px 20px; }
    .services-heading h2 { font-size: 36px; }
    .cards-grid { grid-template-columns: 1fr; gap: 24px; }
}
</style>
