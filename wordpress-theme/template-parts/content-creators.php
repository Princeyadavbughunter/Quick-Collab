<section class="creators-section" id="creator">
    <div class="creators-heading">
        <h2>Our <strong>Creators</strong></h2>
    </div>

    <div class="underline-bar"></div>

    <p class="creators-subtext">
      A Strong network of 10k+ influencers and UGC creators across every niche ready to tell your brand's story.
    </p>

    <div class="creators-grid-wrapper">
        <div class="creators-grid-track">
            <?php 
            // 8 New Images
            $creators = [
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.07 AM.jpeg', 'border' => false],
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.07 AM(1).jpeg', 'border' => false],
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.08 AM.jpeg', 'border' => false],
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.08 AM(1).jpeg', 'border' => false],
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.09 AM.jpeg', 'border' => false],
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.09 AM(1).jpeg', 'border' => false],
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.09 AM(2).jpeg', 'border' => false],
                ['img' => 'WhatsApp Image 2026-03-11 at 12.36.10 AM.jpeg', 'border' => false],
            ];
            
            // Duplicate the array to create a seamless infinite loop
            $loop_creators = array_merge($creators, $creators);
            
            $sideColors = ["#1a5c52", "#2bbfaa", "#c8d832", "#1a5c52", "#1a5c52", "#2bbfaa", "#c8d832", "#1a5c52"];
            $colorCount = count($sideColors);
            
            foreach ($loop_creators as $index => $creator) : 
                $colorIndex = $index % $colorCount;
            ?>
                <div class="creator-card">
                    <div class="side-tag" style="background-color: <?php echo $sideColors[$colorIndex]; ?>;"></div>
                    <div class="card-img-wrap<?php echo $creator['border'] ? ' has-border' : ''; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creater/<?php echo $creator['img']; ?>" alt="Creator">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Scrolling Marquee Section -->
    <div class="creators-marquee-wrapper">
        <!-- Row 1: Left to Right -->
        <div class="marquee-row marquee-ltr">
            <div class="marquee-content">
                <?php 
                $count = count($creators);
                for($i=0; $i<10; $i++): 
                    $img1 = $creators[($i * 2) % $count]['img'];
                    $img2 = $creators[($i * 2 + 1) % $count]['img'];
                ?>
                    <span class="marquee-text">Let's work together</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creater/<?php echo $img1; ?>" class="marquee-img" alt="">
                    <span class="marquee-text">Let's work together</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creater/<?php echo $img2; ?>" class="marquee-img" alt="">
                <?php endfor; ?>
            </div>
        </div>

        <!-- Row 2: Right to Left -->
        <div class="marquee-row marquee-rtl">
            <div class="marquee-content">
                <?php 
                for($i=0; $i<10; $i++): 
                    $img1 = $creators[($i * 2 + 4) % $count]['img'];
                    $img2 = $creators[($i * 2 + 5) % $count]['img'];
                ?>
                    <span class="marquee-text">Let's work together</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creater/<?php echo $img1; ?>" class="marquee-img" alt="">
                    <span class="marquee-text">Let's work together</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creater/<?php echo $img2; ?>" class="marquee-img" alt="">
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <!-- Floating Cursor Button (Desktop) / Centered CTA (Mobile) -->
    <a href="#chat" class="floating-chat-cursor">Get in touch</a>
</section>

<style>
.creators-section {
    padding: 60px 50px 70px;
    width: 100%;
    background: #fff;
}

.creators-heading { text-align: center; margin-bottom: 12px; }
.creators-heading h2 { font-size: 38px; font-weight: 400; }

.underline-bar {
  width: 240px;
  height: 4px;
  margin: 0 auto 20px;
  background: linear-gradient(to right, #1a5c52 33.33%, #2bbfaa 33.33%, #2bbfaa 66.66%, #c8d832 66.66%);
}

.creators-subtext { text-align: center; font-size: 15px; color: #333; margin-bottom: 50px; line-height: 1.6; font-weight: 400; font-family: 'Open Sauce One', sans-serif; }

/* ── Sliding Creators Grid ── */
.creators-grid-wrapper {
    max-width: 1000px; /* Limits visible box size on desktop to show ~4 items */
    margin: 0 auto;
    overflow: hidden; /* Hide the scrolling overflow */
    padding: 10px 0;
    position: relative;
}

/* Gradient fade on left and right edges for smooth enter/exit */
.creators-grid-wrapper::before,
.creators-grid-wrapper::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 60px;
    z-index: 5;
    pointer-events: none;
}
.creators-grid-wrapper::before {
    left: 0;
    background: linear-gradient(to right, #fff 0%, rgba(255,255,255,0) 100%);
}
.creators-grid-wrapper::after {
    right: 0;
    background: linear-gradient(to left, #fff 0%, rgba(255,255,255,0) 100%);
}

.creators-grid-track {
    display: flex;
    gap: 24px;
    align-items: center;
    width: max-content;
    /* Move Right to Left: Standard Marquee */
    animation: slideCreators 30s linear infinite;
}

.creators-grid-wrapper:hover .creators-grid-track {
    animation-play-state: paused;
}

@keyframes slideCreators {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 12px)); } /* Slide towards left (pulling content from right) */
}

.creator-card { 
    position: relative; 
    width: 230px; /* Force width so 4 fit exactly in ~1000px */
    flex-shrink: 0; 
}

.side-tag {
    position: absolute;
    left: -20px; /* Aligned with the increased width */
    top: 50%;
    transform: translateY(-50%);
    width: 20px; /* Increased width as requested */
    height: 100px; /* Increased height as requested */
    border-radius: 5px 0 0 5px;
    z-index: 2;
}

.card-img-wrap {
    position: relative;
    border: none; /* Removed border as requested */
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    background: #000;
    aspect-ratio: 3 / 4; /* Standard portrait ratio */
}
.card-img-wrap img { 
    width: 100%; 
    height: 100%; 
    object-fit: cover; /* Fills the box completely */
    display: block;
    transition: transform 0.3s ease;
}

.creator-card:hover img {
    transform: scale(1.05);
}

@media (max-width: 900px) {
    .creators-grid-wrapper { 
        max-width: 100%; /* Full width on smaller screens */
    }
    .creators-grid-track {
        gap: 16px;
    }
    .creator-card {
        width: 180px; /* Slightly smaller cards */
    }
    .creators-section { padding: 40px 20px 50px; }
    .creators-title { font-size: 2.8rem; }
    .creators-subtext { font-size: 1.1rem; }
}

@media (max-width: 480px) {
    .creators-section { padding: 30px 15px 40px; margin-top: 50px; }
    .creators-grid-wrapper { max-width: 100%; }
    .creators-grid-track {
        gap: 12px;
    }
    .creator-card {
        width: 140px; /* Narrower cards so 2-3 show on mobile */
    }
    .card-img-wrap { border-radius: 12px; border-width: 2px; }
    .side-tag { height: 40px; width: 8px; left: -8px; }
    
    .decoration-shape { width: 150px; height: 150px; opacity: 0.1; }
    .shape-teal { top: -30px; left: -30px; }
    .shape-dark { bottom: -30px; right: -30px; }
    
    .creators-marquee-wrapper { margin-top: 40px; padding: 20px 0; }
    .marquee-text { font-size: 24px; letter-spacing: -1px; }
    .marquee-img { width: 35px; height: 35px; }

    /* Fix potential large white spaces between sections */
    .creators-section { margin-top: 0; padding-top: 60px; }
}

/* ── Marquee Styles ── */
.creators-marquee-wrapper {
    margin-top: 80px;
    padding: 40px 0;
    overflow: hidden;
    background: #f9f9f9;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    position: relative; /* Base for absolute positioning on mobile */
}

.marquee-row {
    display: flex;
    overflow: hidden;
    user-select: none;
    padding: 15px 0;
}

.marquee-content {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    min-width: 100%;
    gap: 30px;
}

.marquee-text {
    font-size: clamp(32px, 5vw, 64px);
    font-weight: 900;
    font-family: 'Open Sauce One', sans-serif;
    color: #1a5c52;
    text-transform: uppercase;
    white-space: nowrap;
    opacity: 0.8;
}

.marquee-img {
    width: clamp(50px, 6vw, 80px);
    height: clamp(50px, 6vw, 80px);
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    flex-shrink: 0;
}

/* LTR Animation */
.marquee-ltr .marquee-content {
    animation: ltr-scroll 80s linear infinite;
}

@keyframes ltr-scroll {
    from { transform: translateX(-50%); }
    to { transform: translateX(0); }
}

/* RTL Animation */
.marquee-rtl .marquee-content {
    animation: rtl-scroll 80s linear infinite;
}

@keyframes rtl-scroll {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

@media (max-width: 600px) {
    .marquee-text { font-size: 28px; }
    .marquee-img { width: 40px; height: 40px; }
}

/* ── Floating Cursor Button ── */
.floating-chat-cursor {
    position: fixed;
    top: 0;
    left: 0;
    padding: 12px 24px;
    background: #1a5c52;
    color: #ffffff !important;
    border-radius: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 700;
    font-family: 'Open Sauce One', sans-serif;
    text-transform: uppercase;
    text-align: center;
    pointer-events: none;
    opacity: 0;
    transform: translate(-50%, -50%) scale(0);
    transition: opacity 0.3s ease, transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    z-index: 9999;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    white-space: nowrap;
    text-decoration: none;
}

@media (max-width: 900px) {
    .floating-chat-cursor {
        display: none !important;
    }
}
</style>
