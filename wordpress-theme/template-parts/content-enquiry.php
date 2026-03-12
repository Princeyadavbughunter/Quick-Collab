<section class="enquiry-section">
    <!-- Grid Pattern Overlay -->
    <div class="enquiry-pattern-overlay"></div>
    
    <!-- Left -->
    <div class="enquiry-left reveal-on-scroll">
        <h2 class="desktop-nowrap" style="font-family: 'Open Sauce One', sans-serif; font-size: clamp(30px, 3.2vw, 42px); font-weight: 900; text-align: left; line-height: 1.1; color: #fff;">
            Scale Your Brand with the Right Creators?
        </h2>
        <div class="enquiry-subtext-wrap">
            <p style="text-align: left; font-size: clamp(16px, 1.8vw, 20px); margin-top: 20px; color: #fff; line-height: 1.5; font-weight: 400;">
                <span class="line-1">Join 50+ brands that trust QuickCollab for their influencer and UGC marketing needs.</span><br />
                <span class="line-2">Let's build something that resonates.</span>
            </p>
        </div>
    </div>

    <!-- Right Form -->
    <div class="enquiry-form-box reveal-on-scroll">
        <div class="form-title">Enquiry Form</div>

        <?php
        $form_success = false;
        $form_errors  = [];

        if (
            isset($_POST['brand_form_nonce']) &&
            wp_verify_nonce($_POST['brand_form_nonce'], 'brand_video_form_action') &&
            isset($_POST['brand_submit'])
        ) {
            $name     = sanitize_text_field($_POST['brand_name'] ?? '');
            $website  = esc_url_raw($_POST['brand_website'] ?? '');
            $whatsapp = sanitize_text_field($_POST['brand_whatsapp'] ?? '');
            $videos   = sanitize_text_field($_POST['brand_videos'] ?? '');

            if (empty($name))     $form_errors[] = 'Name is required.';
            if (empty($whatsapp)) $form_errors[] = 'WhatsApp number is required.';
            if (empty($videos))   $form_errors[] = 'Please select number of videos.';

            if (empty($form_errors)) {
                $admin_email = get_option('admin_email');
                $subject     = 'New Brand Video Order from ' . $name;
                $message     = "Name: $name\nWebsite: $website\nWhatsApp: $whatsapp\nVideos Required: $videos";
                wp_mail($admin_email, $subject, $message);
                $form_success = true;
            }
        }
        ?>

        <?php if ($form_success): ?>
            <div class="brand-form-success">
                <p>✅ Form Submitted!<span>We'll contact you on WhatsApp soon.</span></p>
            </div>
        <?php else: ?>

            <?php if (!empty($form_errors)): ?>
                <div class="brand-form-errors">
                    <?php foreach ($form_errors as $error): ?>
                        <p>⚠ <?php echo esc_html($error); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <?php wp_nonce_field('brand_video_form_action', 'brand_form_nonce'); ?>

                <div class="form-group">
                    <label>Name <span class="req">*</span></label>
                    <input type="text" name="brand_name" value="<?php echo esc_attr($_POST['brand_name'] ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label>Your Brand Website</label>
                    <input type="url" name="brand_website" value="<?php echo esc_attr($_POST['brand_website'] ?? ''); ?>" placeholder="https://">
                </div>

                <div class="form-group">
                    <label>Whatsapp number <span class="req">*</span></label>
                    <input type="tel" name="brand_whatsapp" value="<?php echo esc_attr($_POST['brand_whatsapp'] ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label>Number of Videos Required <span class="req">*</span></label>
                    <div class="select-wrapper">
                        <select name="brand_videos" required>
                            <option value="" disabled <?php selected(($_POST['brand_videos'] ?? ''), ''); ?>>5 to 6 videos</option>
                            <option value="5 to 6 videos"   <?php selected(($_POST['brand_videos'] ?? ''), '5 to 6 videos'); ?>>5 to 6 videos</option>
                            <option value="10 to 15 videos" <?php selected(($_POST['brand_videos'] ?? ''), '10 to 15 videos'); ?>>10 to 15 videos</option>
                            <option value="25+ videos"      <?php selected(($_POST['brand_videos'] ?? ''), '25+ videos'); ?>>25+ videos</option>
                        </select>
                        <span class="select-arrow">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="submit-wrap">
                    <button type="submit" name="brand_submit" class="submit-btn">Submit</button>
                </div>

            </form>

        <?php endif; ?>

    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sauce+One:wght@400;500;600;700;900&display=swap');

.enquiry-section {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #1ab8b8 0%, #2bbfaa 30%, #7ed957 70%, #a8e63d 100%);
    padding: 70px 5% 70px 8%; 
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap; 
    gap: 40px; 
    min-height: 400px;
}

.enquiry-pattern-overlay {
    position: absolute;
    top: 50px; /* Offset to match the top border */
    left: 0;
    width: 50%;
    height: calc(100% - 50px);
    background-image: 
        linear-gradient(rgba(255, 255, 255, 0.12) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.12) 1px, transparent 1px);
    background-size: 40px 40px;
    z-index: 0;
    pointer-events: none;
}

.enquiry-left, .enquiry-form-box {
    position: relative;
    z-index: 1;
}

.enquiry-left h2 {
    margin-left: 0; /* Align further left to give room for single line */
}

.enquiry-left {
    flex: 1;
    max-width: 850px; /* Increased to allow single line heading */
    min-width: 320px;
}

/* ── New Form Box ── */
.enquiry-form-box {
    background: rgba(255, 255, 255, 0.25); /* Less transparent as requested */
    border: 1px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 32px 28px 36px;
    width: 340px;
    flex-shrink: 0;
    font-family: 'Open Sauce One', sans-serif;
}

.form-title {
    background: linear-gradient(135deg, #1ab8b8 0%, #2bbfaa 30%, #7ed957 70%, #a8e63d 100%); /* Full theme gradient */
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    padding: 8px 24px;
    border-radius: 50px;
    display: inline-block;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.enquiry-form-box .form-group {
    margin-bottom: 16px;
}

.enquiry-form-box label {
    display: block;
    font-family: 'Open Sauce One', sans-serif;
    font-size: 13.5px;
    font-weight: 500;
    color: #fff;
    margin-bottom: 7px;
}

.enquiry-form-box .req {
    color: #FF4D4D;
    margin-left: 2px;
}

.enquiry-form-box input[type="text"],
.enquiry-form-box input[type="url"],
.enquiry-form-box input[type="tel"] {
    width: 100%;
    height: 48px;
    background: #fff;
    border: none;
    border-radius: 50px;
    padding: 0 20px;
    font-family: 'Open Sauce One', sans-serif;
    font-size: 14px;
    color: #333;
    outline: none;
    transition: box-shadow 0.2s ease;
}

.enquiry-form-box input[type="text"]:focus,
.enquiry-form-box input[type="url"]:focus,
.enquiry-form-box input[type="tel"]:focus {
    box-shadow: 0 0 0 3px rgba(255,255,255,0.4);
}

.enquiry-form-box .select-wrapper {
    position: relative;
}

.enquiry-form-box select {
    width: 100%;
    height: 48px;
    background: #fff;
    border: none;
    border-radius: 50px;
    padding: 0 44px 0 20px;
    font-family: 'Open Sauce One', sans-serif;
    font-size: 14px;
    color: #333;
    outline: none;
    appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
    transition: box-shadow 0.2s ease;
}

.enquiry-form-box select:focus {
    box-shadow: 0 0 0 3px rgba(255,255,255,0.4);
}

.enquiry-form-box .select-arrow {
    position: absolute;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #555;
    display: flex;
    align-items: center;
}

.enquiry-form-box .submit-wrap {
    margin-top: 24px;
    display: flex;
    justify-content: center;
}

.enquiry-form-box .submit-btn {
    background: linear-gradient(135deg, #1ab8b8 0%, #2bbfaa 30%, #7ed957 70%, #a8e63d 100%); /* Full theme gradient */
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 13px 56px;
    font-family: 'Open Sauce One', sans-serif;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    width: auto;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.enquiry-form-box .submit-btn:hover {
    filter: brightness(1.1);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.25);
}

.brand-form-errors {
    background: rgba(255,77,77,0.15);
    border: 1px solid rgba(255,77,77,0.4);
    border-radius: 10px;
    padding: 10px 14px;
    margin-bottom: 16px;
}

.brand-form-errors p {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 12px;
    color: #fff;
    margin-bottom: 3px;
}

.brand-form-success {
    text-align: center;
    padding: 40px 0;
}

.brand-form-success p {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #fff;
}

.brand-form-success span {
    display: block;
    font-size: 14px;
    font-weight: 400;
    margin-top: 8px;
    opacity: 0.85;
}

.enquiry-subtext-wrap { padding-left: 0; margin-top: 25px; }
.line-1 { display: block; }
.line-2 { padding-left: 0; display: block; margin-top: 8px; opacity: 0.9; }

.desktop-nowrap { white-space: nowrap; } /* Restored to force single line on desktop */

    @media (max-width: 900px) {
    .enquiry-section { flex-direction: column; padding: 60px 20px; text-align: center; margin-top: 0; border-top: 50px solid #ffffff; }
    .enquiry-left { text-align: center; max-width: 100%; }
    .enquiry-left h2 { font-size: 28px !important; text-align: center !important; line-height: 1.2; margin-left: 0 !important; }
    .desktop-nowrap { white-space: normal !important; }
    .enquiry-subtext-wrap { padding-left: 0; margin-top: 20px; }
    .enquiry-left p { text-align: center !important; font-size: 16px !important; }
    .line-1 { white-space: normal !important; }
    .line-2 { padding-left: 0; display: block; margin-top: 10px; }
    .enquiry-form-box { width: 100%; margin-top: 30px; padding: 25px 20px; }
}
</style>