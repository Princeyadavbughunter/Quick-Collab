<section class="hero-section" id="about">
    <div class="pattern-overlay"></div>
    <div class="hero-container">
        <!-- LEFT SIDE - Content -->
        <div class="hero-content">
            <h1 class="hero-title">
                <?php echo nl2br( esc_html( get_theme_mod( 'hero_title', "#1 Top Influencer Marketing \n Agency in India" ) ) ); ?>
            </h1>
            <p class="hero-description">
                <?php echo esc_html( get_theme_mod( 'hero_desc', "India’s First CTR Based Influencer & UGC Marketing Agency" ) ); ?>
            </p>
            <button class="hero-cta-button">
                <svg class="btn-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-8 392H56c-4.4 0-8-3.6-8-8V160h352v288c0 4.4-3.6 8-8 8zM144 236c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 104c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm104-104c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 104c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40z"></path></svg>
                <span><?php echo esc_html( get_theme_mod( 'hero_btn_text', 'Contact Now' ) ); ?></span>
            </button>

            <!-- Brand Section -->
            <div class="hero-brands-section">
                <span class="worked-with-text">Worked with</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sharktank.png" alt="Shark Tank Brands" class="hero-brand-image">
                <span class="brands-suffix">Brands</span>
            </div>
        </div>

        <!-- RIGHT SIDE - Animated Video Sliders -->
        <div class="hero-video-sliders">
            <!-- Removed blur overlays as requested -->
            <div class="slider-fade slider-fade-top" style="display: none;"></div>
            <div class="slider-fade slider-fade-bottom" style="display: none;"></div>

            <!-- Column 1: Slides Down -->
            <div class="video-col col-down">
                <div class="video-track track-down">
                    <!-- Duplicate items to create infinite loop -->
                    <?php for($i=0; $i<2; $i++): ?>
                        <div class="vid-item">
                            <video autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero vedio/Vid1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="vid-item">
                            <video autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero vedio/vid2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="vid-item">
                            <video autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero vedio/vid3.mp4" type="video/mp4">
                            </video>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Column 2: Slides Up -->
            <div class="video-col col-up">
                <div class="video-track track-up">
                    <?php for($i=0; $i<2; $i++): ?>
                        <div class="vid-item">
                            <video autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero vedio/Vid1 2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="vid-item">
                            <video autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero vedio/vid2 2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="vid-item">
                            <video autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero vedio/vid1 3.mp4" type="video/mp4">
                            </video>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ── Hero Video Sliders ── */
.hero-video-sliders {
    flex: 1;
    display: flex;
    justify-content: flex-end; /* Align right on desktop */
    align-items: center;
    gap: 20px;
    height: 500px; /* Fixed height for the window */
    max-height: 500px;
    max-width: 500px;
    position: relative;
    overflow: hidden !important;
    padding: 20px 0;
    margin-left: auto;
}

@media (max-width: 900px) {
    .hero-video-sliders {
        justify-content: center;
        margin: 40px auto 0;
        height: 300px !important; /* Reduced size for mobile as requested */
        max-height: 300px !important;
        width: 100%;
        overflow: hidden !important;
        gap: 12px;
    }
}

/* Blur/Fade effect at top and bottom edges */
.slider-fade {
    position: absolute;
    left: 0;
    width: 100%;
    height: 60px; /* Adjust height of the fade */
    z-index: 10;
    pointer-events: none;
}

.slider-fade-top {
    top: 0;
    background: linear-gradient(to bottom, #FFFFFF 0%, rgba(255,255,255,0) 100%);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    /* Soft top edge fading into the hero background */
}

.slider-fade-bottom {
    bottom: 0;
    background: linear-gradient(to top, #FFFFFF 0%, rgba(255,255,255,0) 100%);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
}

.video-col {
    flex: 1;
    height: 100%;
    max-height: 100%;
    overflow: hidden !important;
    position: relative;
    border-radius: 12px;
}

.video-track {
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 100%;
}

.vid-item {
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 9/16; /* Typical Reels/Shorts format */
    width: 100%;
    flex-shrink: 0;
    background: #000;
    border: 3px solid #005c50; /* Dark green border as requested */
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

.vid-item video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Animations */
.track-up {
    animation: slideUp 20s linear infinite;
}

.track-down {
    /* Need to start halfway so it flows properly */
    transform: translateY(-50%);
    animation: slideDown 20s linear infinite;
}

/* Pause on hover so user can see it */
.hero-video-sliders:hover .video-track {
    animation-play-state: paused;
}

@keyframes slideUp {
    0% { transform: translateY(0); }
    100% { transform: translateY(-50%); }
}

@keyframes slideDown {
    0% { transform: translateY(-50%); }
    100% { transform: translateY(0); }
}
</style>
