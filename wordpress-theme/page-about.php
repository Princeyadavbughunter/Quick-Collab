<?php
/**
 * Template Name: About Page
 * Description: About page for QuickCollab
 */

get_header();
?>

<style>
/* ================================================
   ABOUT PAGE — INLINE STYLES (guaranteed load)
   ================================================ */

/* ---- REVEAL ANIMATIONS (same system as homepage) ---- */
.reveal-on-scroll {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal-on-scroll.is-visible {
    opacity: 1;
    transform: translateY(0);
}
.reveal-fade {
    opacity: 0;
    transition: opacity 0.8s ease;
}
.reveal-fade.is-visible { opacity: 1; }

.reveal-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal-on-scroll.reveal-left.is-visible { opacity: 1; transform: translateX(0); }

.reveal-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal-on-scroll.reveal-right.is-visible { opacity: 1; transform: translateX(0); }

/* Stagger delays for cards */
.reveal-stagger-1 { transition-delay: 0.05s; }
.reveal-stagger-2 { transition-delay: 0.15s; }
.reveal-stagger-3 { transition-delay: 0.25s; }
.reveal-stagger-4 { transition-delay: 0.35s; }

/* ---- HERO ENTRANCE ---- */
@keyframes heroFadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes heroBadge {
    from { opacity: 0; transform: translateY(-10px); }
    to   { opacity: 1; transform: translateY(0); }
}
.about-hero-badge  { animation: heroBadge 0.6s ease 0.1s both; }
.about-hero-title  { animation: heroFadeUp 0.7s ease 0.25s both; }
.about-hero-subtitle { animation: heroFadeUp 0.7s ease 0.45s both; }

/* ---- COUNTER ANIMATION ---- */
@keyframes countUp {
    from { opacity: 0; transform: scale(0.7); }
    to   { opacity: 1; transform: scale(1); }
}
.story-stat-card.is-visible .story-stat-num {
    animation: countUp 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.1s both;
}

/* ---- ICON BOX POP ---- */
@keyframes iconPop {
    0%  { opacity: 0; transform: scale(0.5) rotate(-5deg); }
    80% { transform: scale(1.1) rotate(2deg); }
    100%{ opacity: 1; transform: scale(1) rotate(0deg); }
}
.story-stat-card { transition: opacity 0.6s ease, transform 0.6s ease; }
.sib { transition: opacity 0.5s ease, transform 0.5s ease; }
.sib.is-visible { animation: iconPop 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) both; }

/* ---- MISSION CARD ---- */
@keyframes slideInUp {
    from { opacity: 0; transform: translateY(60px) scale(0.97); }
    to   { opacity: 1; transform: translateY(0) scale(1); }
}
.mission-card.is-visible {
    animation: slideInUp 0.75s cubic-bezier(0.22, 1, 0.36, 1) both;
}

/* ---- VALUE CARD HOVER ---- */
.val-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.val-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 24px 60px rgba(0,92,80,0.14);
}
.val-card .val-icon {
    display: inline-block;
    transition: transform 0.3s ease;
}
.val-card:hover .val-icon { transform: scale(1.25) rotate(5deg); }

/* ---- CTA PULSE ---- */
@keyframes ctaPulse {
    0%,100% { box-shadow: 0 8px 30px rgba(0,0,0,0.15), 0 0 0 0 rgba(255,255,255,0.4); }
    50%      { box-shadow: 0 8px 30px rgba(0,0,0,0.15), 0 0 0 10px rgba(255,255,255,0); }
}
.cta-btn-main { animation: ctaPulse 2.5s ease-in-out infinite; }
.cta-btn-main:hover { animation: none; transform: translateY(-3px); box-shadow: 0 14px 40px rgba(0,0,0,0.2); }

/* ---- SHARED SECTION LAYOUT ---- */
.ab-section {
    padding: 90px 5%;
    width: 100%; box-sizing: border-box;
}
.ab-section.bg-light  { background: #f4faf8; }
.ab-section.bg-white  { background: #ffffff; }
.ab-container { max-width: 1200px; margin: 0 auto; }

.ab-tag {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 0.76rem; font-weight: 700;
    letter-spacing: 3px; text-transform: uppercase;
    color: #0097B2;
    display: flex; align-items: center; gap: 10px;
    margin-bottom: 18px;
}
.ab-tag::before {
    content: ''; width: 28px; height: 3px;
    background: linear-gradient(90deg, #0097B2, #7ED957);
    border-radius: 2px; display: block;
}
.ab-heading {
    font-family: 'Open Sauce One', sans-serif;
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 800; color: #005c50;
    line-height: 1.25; margin: 0 0 24px 0;
}
.ab-heading.center { text-align: center; margin-bottom: 48px; }
.ab-text {
    font-family: 'Poppins', sans-serif;
    font-size: 1.05rem; color: #222; line-height: 1.8; margin-bottom: 18px;
}

/* ---- HERO ---- */
.about-hero {
    background: linear-gradient(90deg, #0097B2 0%, #7ED957 100%);
    position: relative;
    padding: 130px 5% 0;
    text-align: center; overflow: hidden;
    width: 100%; box-sizing: border-box;
    margin-top: -110px;
}
.about-hero .about-pattern-bg {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
    background-size: 40px 40px;
    z-index: 1; pointer-events: none;
}
.about-hero-inner {
    position: relative; z-index: 2;
    max-width: 860px; margin: 0 auto; padding-bottom: 60px;
}
.about-hero-badge {
    display: inline-block;
    background: rgba(255,255,255,0.2); color: #fff;
    font-family: 'Poppins', sans-serif;
    font-size: 0.9rem; font-weight: 600;
    padding: 0.45rem 1.4rem; border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.35);
    margin-bottom: 28px; backdrop-filter: blur(6px);
}
.about-hero-title {
    font-family: 'Open Sauce One', sans-serif;
    font-size: clamp(2.8rem, 6vw, 5rem);
    font-weight: 800; color: #fff;
    line-height: 1.1; margin: 0 0 28px 0;
}
.about-hero-title .hl {
    background: rgba(255,255,255,0.18);
    border-radius: 8px; padding: 0 12px; display: inline-block;
}
.about-hero-subtitle {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(1rem, 2vw, 1.2rem);
    color: rgba(255,255,255,0.92);
    line-height: 1.8; max-width: 700px; margin: 0 auto;
}
.about-hero-wave { position: relative; z-index: 2; line-height: 0; margin-top: 40px; }
.about-hero-wave svg { width: 100%; display: block; }

/* ---- STORY ---- */
.story-grid {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 60px; align-items: center;
}
.story-left { display: flex; flex-direction: column; gap: 18px; }
.story-stat-card {
    background: linear-gradient(135deg, #005c50, #0097B2);
    border-radius: 20px; padding: 28px 36px;
    box-shadow: 0 10px 40px rgba(0,92,80,0.25);
}
.story-stat-num {
    display: block;
    font-family: 'Open Sauce One', sans-serif;
    font-size: 2.8rem; font-weight: 900;
    color: #7ED957; line-height: 1; margin-bottom: 6px;
}
.story-stat-lbl {
    font-family: 'Poppins', sans-serif;
    font-size: 0.95rem; font-weight: 500;
    color: rgba(255,255,255,0.85);
}
.story-icon-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
.sib {
    border-radius: 16px; padding: 20px;
    font-size: 1.8rem; text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
}
.sib:hover { transform: translateY(-6px) scale(1.08); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
.sib.teal  { background: #e0f5f2; }
.sib.lime  { background: #f0fad8; }
.sib.dark  { background: #005c50; }
.sib.lite  { background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.07); }
.pill-tags { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px; }
.pill-tag {
    font-family: 'Poppins', sans-serif;
    font-size: 0.82rem; font-weight: 600;
    color: #005c50; background: #e0f5f2;
    padding: 6px 16px; border-radius: 50px;
    border: 1px solid rgba(0,92,80,0.15);
    transition: background 0.2s, transform 0.2s;
}
.pill-tag:hover { background: #c8eee7; transform: translateY(-2px); }

/* ---- MISSION ---- */
.mission-card {
    position: relative;
    background: linear-gradient(135deg, #005c50 0%, #0097B2 100%);
    border-radius: 28px; padding: 60px 60px 60px 100px; overflow: hidden;
}
.mission-card::before {
    content: ''; position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 40px 40px;
}
.mission-quote {
    font-family: Georgia, serif; font-size: 9rem;
    color: rgba(255,255,255,0.13); line-height: 0.5;
    position: absolute; top: 40px; left: 30px;
}
.mission-text {
    font-family: 'Open Sauce One', sans-serif;
    font-size: clamp(1.15rem, 2.5vw, 1.65rem);
    font-weight: 600; color: rgba(255,255,255,0.92);
    line-height: 1.7; position: relative; z-index: 2; margin: 0;
}
.mission-text .mhl { color: #c8d832; font-weight: 800; }

/* ---- VALUES ---- */
.values-grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;
}
.val-card {
    background: #fff; border-radius: 20px; padding: 32px 28px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,92,80,0.08);
    position: relative; overflow: hidden;
}
.val-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #0097B2, #7ED957);
    border-radius: 20px 20px 0 0;
}
.val-icon { font-size: 2.2rem; margin-bottom: 16px; display: inline-block; }
.val-title {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 1.15rem; font-weight: 800; color: #005c50; margin-bottom: 12px;
}
.val-desc {
    font-family: 'Poppins', sans-serif;
    font-size: 0.92rem; color: #555; line-height: 1.7;
}

/* ---- LOCATION ---- */
.loc-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;
}
.city-pills { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 28px; }
.city-pill {
    display: flex; align-items: center; gap: 8px;
    background: #f4faf8;
    border: 1px solid rgba(0,92,80,0.15);
    border-radius: 50px; padding: 8px 18px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.88rem; font-weight: 600; color: #005c50;
    transition: transform 0.2s, background 0.2s;
}
.city-pill:hover { transform: translateY(-3px); background: #e0f5f2; }
.city-dot-g {
    width: 8px; height: 8px; border-radius: 50%;
    background: linear-gradient(135deg, #0097B2, #7ED957);
    display: inline-block; flex-shrink: 0;
}
.map-blob-wrap { display: flex; justify-content: center; align-items: center; }
.map-blob {
    width: 100%; max-width: 400px; aspect-ratio: 1;
    background: linear-gradient(135deg, #e0f5f2 0%, #f0fad8 100%);
    border-radius: 30% 70% 60% 40% / 40% 30% 70% 60%;
    position: relative;
    box-shadow: 0 20px 60px rgba(0,150,178,0.12);
    animation: blobM 8s ease-in-out infinite;
}
@keyframes blobM {
    0%,100% { border-radius: 30% 70% 60% 40% / 40% 30% 70% 60%; }
    33%      { border-radius: 50% 50% 40% 60% / 60% 40% 60% 40%; }
    66%      { border-radius: 40% 60% 70% 30% / 50% 60% 40% 70%; }
}
.map-pin-main {
    position: absolute; top: 42%; left: 50%;
    transform: translate(-50%,-50%);
    display: flex; flex-direction: column; align-items: center; gap: 6px;
}
.pin-diamond {
    width: 20px; height: 20px;
    border-radius: 50% 50% 50% 0; transform: rotate(-45deg);
    background: linear-gradient(135deg, #005c50, #0097B2);
    box-shadow: 0 4px 20px rgba(0,92,80,0.35);
    animation: pinP 2s ease-in-out infinite;
}
@keyframes pinP {
    0%,100% { box-shadow: 0 4px 20px rgba(0,92,80,0.35), 0 0 0 0 rgba(0,150,178,0.4); }
    50%      { box-shadow: 0 4px 20px rgba(0,92,80,0.35), 0 0 0 12px rgba(0,150,178,0); }
}
.pin-lbl {
    font-family: 'Poppins', sans-serif;
    font-size: 0.75rem; font-weight: 700; color: #005c50;
    background: #fff; padding: 3px 10px; border-radius: 50px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1); white-space: nowrap;
}
.fc-dot {
    position: absolute; display: flex; flex-direction: column; align-items: center; gap: 4px;
}
.fcd {
    width: 10px; height: 10px; border-radius: 50%; background: #0097B2;
    box-shadow: 0 0 0 3px rgba(0,150,178,0.22);
    animation: floatPing 2s ease-in-out infinite;
}
.fc-dot:nth-child(2) .fcd { animation-delay: 0.4s; }
.fc-dot:nth-child(3) .fcd { animation-delay: 0.8s; }
@keyframes floatPing {
    0%,100% { transform: scale(1); }
    50%      { transform: scale(1.3); }
}
.fcl {
    font-family: 'Poppins', sans-serif;
    font-size: 0.65rem; font-weight: 600; color: #005c50; white-space: nowrap;
}

/* ---- CTA ---- */
.about-cta-section {
    background: linear-gradient(90deg, #0097B2 0%, #7ED957 100%);
    padding: 100px 5%; text-align: center;
    position: relative; overflow: hidden;
    width: 100%; box-sizing: border-box;
}
.about-cta-section .about-pattern-bg {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
    background-size: 40px 40px; pointer-events: none;
}
.cta-inner { position: relative; z-index: 2; max-width: 700px; margin: 0 auto; }
.cta-badge {
    display: inline-block;
    background: rgba(255,255,255,0.2); color: #fff;
    font-family: 'Poppins', sans-serif;
    font-size: 0.88rem; font-weight: 600;
    padding: 0.4rem 1.2rem; border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.3); margin-bottom: 20px;
}
.cta-heading {
    font-family: 'Open Sauce One', sans-serif;
    font-size: clamp(2rem, 4.5vw, 3.5rem);
    font-weight: 800; color: #fff; margin: 0 0 20px 0; line-height: 1.15;
}
.cta-sub {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1rem; color: rgba(255,255,255,0.9);
    line-height: 1.75; margin-bottom: 40px;
}
.cta-btn-main {
    display: inline-flex; align-items: center; gap: 10px;
    background: #fff; color: #005c50 !important;
    font-family: 'Open Sauce One', sans-serif;
    font-weight: 700; font-size: 1.05rem;
    padding: 0.9rem 2.2rem; border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

/* ---- RESPONSIVE ---- */
@media (max-width: 1024px) { .values-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 768px) {
    .ab-section { padding: 60px 5%; }
    .story-grid, .loc-grid { grid-template-columns: 1fr; gap: 36px; }
    .story-left { order: -1; }
    .mission-card { padding: 40px 30px 40px 44px; }
    .mission-quote { font-size: 6rem; top: 20px; left: 14px; }
    .values-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
    .map-blob-wrap { order: -1; }
    .about-hero { padding: 120px 5% 0; }
}
@media (max-width: 480px) {
    .values-grid { grid-template-columns: 1fr; }
    .story-icon-grid { grid-template-columns: repeat(4, 1fr); }
    .about-cta-section { padding: 70px 5%; }
}
</style>

<!-- ===== HERO ===== -->
<section class="about-hero">
    <div class="about-pattern-bg"></div>
    <div class="about-hero-inner">
        <div class="about-hero-badge">🇮🇳 Born in Gurgaon, India</div>
        <h1 class="about-hero-title">We Are <span class="hl">QuickCollab</span></h1>
        <p class="about-hero-subtitle">Born in the heart of India's startup capital, Gurgaon, QuickCollab is a full-service influencer and UGC marketing agency built for the modern brand. We exist at the intersection of creativity, data, and authentic storytelling.</p>
    </div>
    <div class="about-hero-wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#f4faf8"/>
        </svg>
    </div>
</section>

<!-- ===== OUR STORY ===== -->
<section class="ab-section bg-light">
    <div class="ab-container">
        <div class="ab-tag reveal-on-scroll">OUR STORY</div>
        <div class="story-grid">
            <div class="story-left reveal-on-scroll reveal-left">
                <div class="story-stat-card reveal-on-scroll">
                    <span class="story-stat-num">₹50L+</span>
                    <span class="story-stat-lbl">Campaigns Delivered</span>
                </div>
                <div class="story-icon-grid">
                    <div class="sib teal reveal-on-scroll reveal-stagger-1">📱</div>
                    <div class="sib lime reveal-on-scroll reveal-stagger-2">🎥</div>
                    <div class="sib dark reveal-on-scroll reveal-stagger-3">📊</div>
                    <div class="sib lite reveal-on-scroll reveal-stagger-4">🤝</div>
                </div>
            </div>
            <div class="story-right reveal-on-scroll reveal-right">
                <h2 class="ab-heading">Why We Started</h2>
                <p class="ab-text">Brands were spending lakhs on influencer campaigns with little to show for it — vague metrics, misaligned creators, and content that didn't convert.</p>
                <p class="ab-text">We built QuickCollab to change that.</p>
                <p class="ab-text">Our founding team brings together backgrounds in digital marketing, content production, and brand strategy. We knew there was a smarter, more accountable way to run creator-led campaigns — and QuickCollab is exactly that.</p>
                <div class="pill-tags">
                    <span class="pill-tag">Digital Marketing</span>
                    <span class="pill-tag">Content Production</span>
                    <span class="pill-tag">Brand Strategy</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== OUR MISSION ===== -->
<section class="ab-section bg-white">
    <div class="ab-container">
        <div class="ab-tag reveal-on-scroll">OUR MISSION</div>
        <div class="mission-card reveal-on-scroll">
            <div class="mission-quote">"</div>
            <p class="mission-text">To make influencer and UGC marketing <span class="mhl">accessible, accountable,</span> and genuinely effective for every brand — from emerging D2C startups to established enterprises.</p>
        </div>
    </div>
</section>

<!-- ===== OUR VALUES ===== -->
<section class="ab-section bg-light">
    <div class="ab-container">
        <div class="ab-tag reveal-on-scroll">OUR VALUES</div>
        <h2 class="ab-heading center reveal-on-scroll">What Drives Us</h2>
        <div class="values-grid">
            <div class="val-card reveal-on-scroll reveal-stagger-1">
                <span class="val-icon">⚡</span>
                <h3 class="val-title">Accountability</h3>
                <p class="val-desc">We are answerable for every rupee you invest. No vague KPIs, no excuses.</p>
            </div>
            <div class="val-card reveal-on-scroll reveal-stagger-2">
                <span class="val-icon">🎯</span>
                <h3 class="val-title">Authenticity</h3>
                <p class="val-desc">We believe real voices drive real results. We champion genuine creator-brand partnerships.</p>
            </div>
            <div class="val-card reveal-on-scroll reveal-stagger-3">
                <span class="val-icon">🚀</span>
                <h3 class="val-title">Agility</h3>
                <p class="val-desc">The digital landscape moves fast. So do we.</p>
            </div>
            <div class="val-card reveal-on-scroll reveal-stagger-4">
                <span class="val-icon">🤝</span>
                <h3 class="val-title">Partnership</h3>
                <p class="val-desc">We work as an extension of your team — not just another vendor.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== LOCATION ===== -->
<section class="ab-section bg-white">
    <div class="ab-container">
        <div class="ab-tag reveal-on-scroll">LOCATION</div>
        <div class="loc-grid">
            <div class="loc-content reveal-on-scroll reveal-left">
                <h2 class="ab-heading">Headquartered in Gurgaon.<br>Working Pan-India.</h2>
                <p class="ab-text">Our team operates from Gurgaon with active campaigns across Delhi NCR, Mumbai, Bengaluru, and beyond. Wherever your audience is, we have the creator network to reach them.</p>
                <div class="city-pills">
                    <div class="city-pill reveal-on-scroll reveal-stagger-1"><span class="city-dot-g"></span>Delhi NCR</div>
                    <div class="city-pill reveal-on-scroll reveal-stagger-2"><span class="city-dot-g"></span>Mumbai</div>
                    <div class="city-pill reveal-on-scroll reveal-stagger-3"><span class="city-dot-g"></span>Bengaluru</div>
                    <div class="city-pill reveal-on-scroll reveal-stagger-4"><span class="city-dot-g"></span>Pan-India</div>
                </div>
            </div>
            <div class="map-blob-wrap reveal-on-scroll reveal-right">
                <div class="map-blob">
                    <div class="map-pin-main">
                        <span class="pin-diamond"></span>
                        <span class="pin-lbl">Gurgaon HQ</span>
                    </div>
                    <div class="fc-dot" style="top:28%;left:40%;"><span class="fcd"></span><span class="fcl">Delhi NCR</span></div>
                    <div class="fc-dot" style="top:55%;left:18%;"><span class="fcd"></span><span class="fcl">Mumbai</span></div>
                    <div class="fc-dot" style="top:65%;left:56%;"><span class="fcd"></span><span class="fcl">Bengaluru</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="about-cta-section">
    <div class="about-pattern-bg"></div>
    <div class="cta-inner reveal-on-scroll">
        <div class="cta-badge">✨ Let's Connect</div>
        <h2 class="cta-heading">Let's Grow Together</h2>
        <p class="cta-sub">Whether you're a brand looking to launch your first creator campaign or scale an existing one, we'd love to be part of your growth story.</p>
        <a href="https://wa.me/919999999999" class="cta-btn-main" target="_blank" rel="noopener">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.7 17.7 69.4 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.1-3.2-5.5-.3-8.5 2.5-11.2 2.5-2.5 5.5-6.5 8.3-9.7 2.8-3.2 3.7-5.5 5.6-9.3 1.9-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
            Book a Free Consultation
        </a>
    </div>
</section>

<?php get_footer(); ?>
