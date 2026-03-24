<?php
/**
 * Template Name: Contact Page
 * Description: Contact Us page for QuickCollab
 */

get_header();
?>

<style>
/* ================================================
   CONTACT PAGE — INLINE STYLES
   ================================================ */

/* Reveal animations (same as homepage + about) */
.reveal-on-scroll {
    opacity: 0; transform: translateY(40px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal-on-scroll.is-visible { opacity: 1; transform: translateY(0); }
.reveal-on-scroll.reveal-left { transform: translateX(-50px); }
.reveal-on-scroll.reveal-left.is-visible { transform: translateX(0); }
.reveal-on-scroll.reveal-right { transform: translateX(50px); }
.reveal-on-scroll.reveal-right.is-visible { transform: translateX(0); }
.reveal-stagger-1 { transition-delay: 0.05s; }
.reveal-stagger-2 { transition-delay: 0.15s; }
.reveal-stagger-3 { transition-delay: 0.25s; }
.reveal-stagger-4 { transition-delay: 0.35s; }

/* Hero entrance */
@keyframes cHeroUp { from { opacity:0; transform:translateY(30px);} to { opacity:1; transform:translateY(0);} }
@keyframes cBadge  { from { opacity:0; transform:translateY(-10px);} to { opacity:1; transform:translateY(0);} }

/* ---- CONTACT HERO ---- */
.contact-hero {
    background: linear-gradient(90deg, #0097B2 0%, #7ED957 100%);
    position: relative; padding: 130px 5% 0;
    text-align: center; overflow: hidden;
    width: 100%; box-sizing: border-box;
    margin-top: -110px;
}
.contact-hero .cpatt {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
    background-size: 40px 40px; z-index:1; pointer-events:none;
}
.contact-hero-inner {
    position: relative; z-index: 2;
    max-width: 800px; margin: 0 auto; padding-bottom: 60px;
}
.contact-hero-badge {
    display: inline-block;
    background: rgba(255,255,255,0.2); color: #fff;
    font-family: 'Poppins', sans-serif; font-size: 0.9rem; font-weight: 600;
    padding: 0.45rem 1.4rem; border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.35); margin-bottom: 24px;
    animation: cBadge 0.6s ease 0.1s both;
}
.contact-hero-title {
    font-family: 'Open Sauce One', sans-serif;
    font-size: clamp(2.2rem, 5vw, 4rem); font-weight: 800;
    color: #fff; line-height: 1.15; margin: 0 0 24px 0;
    animation: cHeroUp 0.7s ease 0.25s both;
}
.contact-hero-sub {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(1rem, 2vw, 1.15rem);
    color: rgba(255,255,255,0.9); line-height: 1.75;
    max-width: 620px; margin: 0 auto;
    animation: cHeroUp 0.7s ease 0.4s both;
}
.contact-hero-wave { position:relative; z-index:2; line-height:0; margin-top:40px; }
.contact-hero-wave svg { width:100%; display:block; }

/* ---- MAIN BODY ---- */
.contact-body {
    background: #f4faf8; padding: 80px 5%;
    width: 100%; box-sizing: border-box;
}
.contact-body-inner {
    max-width: 1180px; margin: 0 auto;
    display: grid; grid-template-columns: 1.5fr 1fr; gap: 50px; align-items: start;
}

/* ---- FORM CARD ---- */
.contact-form-card {
    background: #fff; border-radius: 24px;
    padding: 48px 44px;
    box-shadow: 0 12px 50px rgba(0,92,80,0.09);
    border: 1px solid rgba(0,92,80,0.07);
}
.cf-tag {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 0.74rem; font-weight: 700; letter-spacing: 3px;
    text-transform: uppercase; color: #0097B2;
    display: flex; align-items: center; gap: 10px; margin-bottom: 14px;
}
.cf-tag::before {
    content: ''; width: 26px; height: 3px;
    background: linear-gradient(90deg, #0097B2, #7ED957);
    border-radius: 2px; display: block;
}
.cf-heading {
    font-family: 'Open Sauce One', sans-serif;
    font-size: clamp(1.5rem, 3vw, 2rem); font-weight: 800;
    color: #005c50; margin: 0 0 32px 0; line-height: 1.25;
}
.cf-group { margin-bottom: 22px; }
.cf-label {
    display: block; font-family: 'Poppins', sans-serif;
    font-size: 0.88rem; font-weight: 600; color: #005c50;
    margin-bottom: 8px; letter-spacing: 0.3px;
}
.cf-input,
.cf-select {
    width: 100%; padding: 14px 18px;
    font-family: 'Poppins', sans-serif; font-size: 0.95rem; color: #222;
    background: #f4faf8; border: 1.5px solid rgba(0,92,80,0.15);
    border-radius: 12px; outline: none; box-sizing: border-box;
    transition: border-color 0.25s, box-shadow 0.25s;
    appearance: none; -webkit-appearance: none;
}
.cf-select { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='9' viewBox='0 0 14 9'%3E%3Cpath d='M1 1l6 6 6-6' stroke='%23005c50' stroke-width='2' fill='none' stroke-linecap='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 16px center; padding-right: 44px; cursor: pointer; }
.cf-input:focus, .cf-select:focus {
    border-color: #0097B2;
    box-shadow: 0 0 0 3px rgba(0,151,178,0.12);
    background: #fff;
}
.cf-input::placeholder { color: #aaa; }
.cf-budget-row {
    display: grid; grid-template-columns: repeat(3,1fr); gap: 12px; margin-top: 10px;
}
.cf-budget-opt { display: none; }
.cf-budget-lbl {
    display: block; text-align: center; cursor: pointer;
    font-family: 'Poppins', sans-serif; font-size: 0.82rem; font-weight: 600;
    color: #005c50; background: #f4faf8;
    border: 1.5px solid rgba(0,92,80,0.15);
    border-radius: 10px; padding: 12px 8px;
    transition: all 0.2s ease;
}
.cf-budget-lbl:hover { background: #e0f5f2; border-color: #0097B2; }
.cf-budget-opt:checked + .cf-budget-lbl {
    background: linear-gradient(135deg, #005c50, #0097B2);
    color: #fff; border-color: transparent;
    box-shadow: 0 4px 14px rgba(0,92,80,0.25);
}
.cf-submit {
    width: 100%; padding: 16px 24px;
    background: linear-gradient(135deg, #005c50, #0097B2);
    color: #fff; font-family: 'Open Sauce One', sans-serif;
    font-size: 1.05rem; font-weight: 700;
    border: none; border-radius: 14px; cursor: pointer;
    display: flex; align-items: center; justify-content: center; gap: 10px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 6px 24px rgba(0,92,80,0.25);
    margin-top: 8px;
}
.cf-submit:hover { transform: translateY(-3px); box-shadow: 0 12px 36px rgba(0,92,80,0.32); }
.cf-reassurance {
    font-family: 'Poppins', sans-serif; font-size: 0.82rem;
    color: #777; line-height: 1.65; margin-top: 18px;
    text-align: center; padding-top: 18px;
    border-top: 1px dashed rgba(0,92,80,0.12);
}
.cf-reassurance span { color: #0097B2; font-weight: 600; }

/* ---- SIDEBAR CONTACT DETAILS ---- */
.contact-sidebar { display: flex; flex-direction: column; gap: 24px; }

.contact-direct-card {
    background: linear-gradient(135deg, #005c50 0%, #0097B2 100%);
    border-radius: 24px; padding: 36px 32px;
    box-shadow: 0 12px 40px rgba(0,92,80,0.22);
    position: relative; overflow: hidden;
}
.contact-direct-card::before {
    content: ''; position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 30px 30px;
}
.cd-inner { position: relative; z-index: 2; }
.cd-tag {
    font-family: 'Poppins', sans-serif; font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 2px;
    color: #c8d832; margin-bottom: 14px; display: block;
}
.cd-heading {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 1.25rem; font-weight: 800; color: #fff;
    margin: 0 0 24px 0; line-height: 1.3;
}
.cd-item {
    display: flex; align-items: flex-start; gap: 14px; margin-bottom: 20px;
}
.cd-item:last-child { margin-bottom: 0; }
.cd-icon {
    width: 40px; height: 40px; border-radius: 12px;
    background: rgba(255,255,255,0.15); display: flex;
    align-items: center; justify-content: center;
    font-size: 1.1rem; flex-shrink: 0;
}
.cd-info-label {
    font-family: 'Poppins', sans-serif; font-size: 0.75rem;
    font-weight: 600; color: rgba(255,255,255,0.6);
    text-transform: uppercase; letter-spacing: 1px; display: block;
    margin-bottom: 3px;
}
.cd-info-val {
    font-family: 'Poppins', sans-serif; font-size: 0.95rem;
    font-weight: 600; color: #fff;
    text-decoration: none; transition: color 0.2s;
}
a.cd-info-val:hover { color: #c8d832; }

.contact-trust-card {
    background: #fff; border-radius: 20px; padding: 28px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,92,80,0.08);
}
.trust-row {
    display: flex; align-items: center; gap: 14px;
    padding: 14px 0; border-bottom: 1px dashed rgba(0,92,80,0.1);
}
.trust-row:last-child { border-bottom: none; padding-bottom: 0; }
.trust-emoji { font-size: 1.5rem; }
.trust-text {
    font-family: 'Poppins', sans-serif; font-size: 0.88rem; color: #333; line-height: 1.5;
}
.trust-text strong { color: #005c50; }

/* ---- FINAL CTA STRIP ---- */
.contact-cta-strip {
    background: linear-gradient(90deg, #0097B2 0%, #7ED957 100%);
    padding: 80px 5%; text-align: center;
    position: relative; overflow: hidden;
    width: 100%; box-sizing: border-box;
}
.contact-cta-strip .cpatt {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
    background-size: 40px 40px; pointer-events: none;
}
.cta-strip-inner { position: relative; z-index: 2; max-width: 800px; margin: 0 auto; }
.cta-strip-stats {
    display: flex; justify-content: center; align-items: center;
    gap: 40px; margin-bottom: 32px; flex-wrap: wrap;
}
.cta-stat { text-align: center; }
.cta-stat-num {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 2.5rem; font-weight: 900; color: #fff;
    display: block; line-height: 1;
}
.cta-stat-lbl {
    font-family: 'Poppins', sans-serif; font-size: 0.85rem;
    color: rgba(255,255,255,0.8); font-weight: 500; margin-top: 4px;
}
.cta-strip-divider { width: 1px; height: 50px; background: rgba(255,255,255,0.3); }
.cta-strip-heading {
    font-family: 'Open Sauce One', sans-serif;
    font-size: clamp(1.6rem, 3.5vw, 2.6rem); font-weight: 800;
    color: #fff; margin: 0 0 12px 0; line-height: 1.2;
}
.cta-strip-sub {
    font-family: 'Poppins', sans-serif; font-size: 1rem;
    color: rgba(255,255,255,0.85); margin: 0 0 32px 0;
    font-style: italic;
}
.cta-strip-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.csb-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: #fff; color: #005c50 !important;
    font-family: 'Open Sauce One', sans-serif; font-weight: 700; font-size: 1rem;
    padding: 0.85rem 2rem; border-radius: 50px; text-decoration: none;
    box-shadow: 0 8px 28px rgba(0,0,0,0.15);
    transition: transform 0.2s, box-shadow 0.2s;
}
.csb-primary:hover { transform: translateY(-3px); box-shadow: 0 14px 36px rgba(0,0,0,0.2); }
.csb-secondary {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255,255,255,0.15); color: #fff !important;
    font-family: 'Open Sauce One', sans-serif; font-weight: 600; font-size: 1rem;
    padding: 0.85rem 2rem; border-radius: 50px; text-decoration: none;
    border: 1.5px solid rgba(255,255,255,0.4);
    transition: background 0.2s, transform 0.2s;
}
.csb-secondary:hover { background: rgba(255,255,255,0.25); transform: translateY(-3px); }

/* ---- RESPONSIVE ---- */
@media (max-width: 900px) {
    .contact-body-inner { grid-template-columns: 1fr; gap: 36px; }
    .contact-form-card { padding: 36px 28px; }
    .contact-hero { padding: 120px 5% 0; }
    .cf-budget-row { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 480px) {
    .contact-body { padding: 60px 5%; }
    .cta-strip-stats { gap: 24px; }
    .cta-stat-num { font-size: 2rem; }
    .cta-strip-divider { display: none; }
    .contact-cta-strip { padding: 60px 5%; }
    .cf-budget-row { grid-template-columns: 1fr; }
}
</style>

<!-- ===== CONTACT HERO ===== -->
<section class="contact-hero">
    <div class="cpatt"></div>
    <div class="contact-hero-inner">
        <div class="contact-hero-badge">📬 We Respond in 24 Hours</div>
        <h1 class="contact-hero-title">Let's Build Your<br>Next Campaign</h1>
        <p class="contact-hero-sub">Tell us about your brand and your goals. Our team will get back to you within 24 hours with a tailored approach.</p>
    </div>
    <div class="contact-hero-wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#f4faf8"/>
        </svg>
    </div>
</section>

<!-- ===== MAIN BODY ===== -->
<section class="contact-body">
    <div class="contact-body-inner">

        <!-- FORM -->
        <div class="contact-form-card reveal-on-scroll">
            <div class="cf-tag">GET IN TOUCH</div>
            <h2 class="cf-heading">Send Us Your Brief</h2>

            <form method="post" action="#" novalidate>
                <div class="cf-group">
                    <label class="cf-label" for="cf_name">Full Name</label>
                    <input class="cf-input" type="text" id="cf_name" name="cf_name" placeholder="Your full name" required>
                </div>
                <div class="cf-group">
                    <label class="cf-label" for="cf_brand">Brand / Company Name</label>
                    <input class="cf-input" type="text" id="cf_brand" name="cf_brand" placeholder="Your brand or company" required>
                </div>
                <div class="cf-group">
                    <label class="cf-label" for="cf_phone">Phone Number</label>
                    <input class="cf-input" type="tel" id="cf_phone" name="cf_phone" placeholder="+91 XXXXX XXXXX" required>
                </div>
                <div class="cf-group">
                    <label class="cf-label" for="cf_service">What Are You Looking For?</label>
                    <select class="cf-select cf-input" id="cf_service" name="cf_service" required>
                        <option value="" disabled selected>Select a service</option>
                        <option value="influencer">Influencer Marketing</option>
                        <option value="ugc">UGC Ads</option>
                        <option value="both">Both</option>
                        <option value="notsure">Not Sure Yet</option>
                    </select>
                </div>
                <div class="cf-group">
                    <label class="cf-label">Monthly Budget Range</label>
                    <div class="cf-budget-row">
                        <div>
                            <input class="cf-budget-opt" type="radio" id="budget1" name="cf_budget" value="25k-50k">
                            <label class="cf-budget-lbl" for="budget1">₹25K – ₹50K</label>
                        </div>
                        <div>
                            <input class="cf-budget-opt" type="radio" id="budget2" name="cf_budget" value="50k-1L">
                            <label class="cf-budget-lbl" for="budget2">₹50K – ₹1L</label>
                        </div>
                        <div>
                            <input class="cf-budget-opt" type="radio" id="budget3" name="cf_budget" value="above-1L">
                            <label class="cf-budget-lbl" for="budget3">Above ₹1L</label>
                        </div>
                    </div>
                </div>
                <button class="cf-submit" type="submit">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    Send My Brief
                </button>
                <p class="cf-reassurance">
                    <span>⏱ We respond within 24 hours</span> on working days.<br>
                    Your information is completely confidential and will never be shared with third parties.
                </p>
            </form>
        </div>

        <!-- SIDEBAR -->
        <div class="contact-sidebar">

            <!-- Direct Contact Card -->
            <div class="contact-direct-card reveal-on-scroll reveal-right">
                <div class="cd-inner">
                    <span class="cd-tag">Direct Contact</span>
                    <h3 class="cd-heading">Prefer to Reach Out Directly?</h3>
                    <div class="cd-item">
                        <div class="cd-icon">📧</div>
                        <div>
                            <span class="cd-info-label">Email</span>
                            <a class="cd-info-val" href="mailto:hello@quickcollab.in">hello@quickcollab.in</a>
                        </div>
                    </div>
                    <div class="cd-item">
                        <div class="cd-icon">📱</div>
                        <div>
                            <span class="cd-info-label">Phone / WhatsApp</span>
                            <a class="cd-info-val" href="tel:+919999999999">+91 XXXXX XXXXX</a>
                        </div>
                    </div>
                    <div class="cd-item">
                        <div class="cd-icon">📍</div>
                        <div>
                            <span class="cd-info-label">Office</span>
                            <span class="cd-info-val">Gurgaon, Haryana, India</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust badges -->
            <div class="contact-trust-card reveal-on-scroll reveal-right reveal-stagger-2">
                <div class="trust-row">
                    <span class="trust-emoji">⚡</span>
                    <p class="trust-text"><strong>Fast Turnaround</strong><br>Campaign strategy ready in 48 hrs</p>
                </div>
                <div class="trust-row">
                    <span class="trust-emoji">🔒</span>
                    <p class="trust-text"><strong>100% Confidential</strong><br>Your data is never shared</p>
                </div>
                <div class="trust-row">
                    <span class="trust-emoji">🎯</span>
                    <p class="trust-text"><strong>No Generic Pitches</strong><br>Every proposal is tailored to your brand</p>
                </div>
                <div class="trust-row">
                    <span class="trust-emoji">🤝</span>
                    <p class="trust-text"><strong>No Long-Term Lock-In</strong><br>Start with a pilot, scale on results</p>
                </div>
            </div>

        </div><!-- /sidebar -->
    </div>
</section>

<!-- ===== FINAL CTA STRIP ===== -->
<section class="contact-cta-strip">
    <div class="cpatt"></div>
    <div class="cta-strip-inner reveal-on-scroll">
        <div class="cta-strip-stats">
            <div class="cta-stat">
                <span class="cta-stat-num">50+</span>
                <span class="cta-stat-lbl">Brands Served</span>
            </div>
            <div class="cta-strip-divider"></div>
            <div class="cta-stat">
                <span class="cta-stat-num">500+</span>
                <span class="cta-stat-lbl">Verified Creators</span>
            </div>
            <div class="cta-strip-divider"></div>
            <div class="cta-stat">
                <span class="cta-stat-num">1</span>
                <span class="cta-stat-lbl">Agency. All-In.</span>
            </div>
        </div>
        <h2 class="cta-strip-heading">50+ Brands. 500+ Creators. One Agency.</h2>
        <p class="cta-strip-sub">QuickCollab — Where Brands Meet Their Audience.</p>
        <div class="cta-strip-btns">
            <a href="#contact-form" class="csb-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="5 12 12 5 19 12"/><line x1="12" y1="19" x2="12" y2="5"/></svg>
                Start Today
            </a>
            <a href="https://wa.me/919999999999" class="csb-secondary" target="_blank" rel="noopener">
                No Commitment, Just Results →
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
