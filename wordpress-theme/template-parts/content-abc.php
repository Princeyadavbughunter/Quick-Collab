<section class="abc-section">
    <div class="abc-container">
        <!-- Left: Heading + Description -->
        <div class="abc-left">
            <div class="heading-wrapper" style="margin-bottom: 32px;">
                <p style="margin: 0; font-size: 36px; font-weight: 400; color: #1a3c34; line-height: 1.1; font-family: 'Open Sauce One', sans-serif;">
                    How QuickCollab
                </p>
                <p style="margin: 0; font-size: 44px; font-weight: 800; color: #1a3c34; line-height: 1.1; font-family: 'Open Sauce One', sans-serif;">
                    Helps Brands?
                </p>
            </div>
            <p style="font-size: 18px; color: #2bbfaa; line-height: 1.6; margin: 0; font-weight: 500;">
                Whether you need authentic UGC video ads for performance marketing or large-scale influencer activations, our team has the expertise and network to make it happen.
            </p>
        </div>

        <!-- Right: Phase Arrows -->
        <div class="abc-right reveal-on-scroll">
            <!-- Arrow Row -->
            <div class="phase-arrows" style="display: flex; align-items: center; margin-bottom: 32px; gap: 20px;">
                <?php 
                $phases = [
                    ['label' => 'Ideations', 'color' => '#1a5c52', 'text_color' => '#fff'],
                    ['label' => 'Creation', 'color' => '#2bbfaa', 'text_color' => '#000'],
                    ['label' => 'Launch', 'color' => '#c8d832', 'text_color' => '#fff']
                ];
                foreach ($phases as $index => $phase) : ?>
                    <div style="display: flex; align-items: center; flex: 1;">
                        <div style="position: relative; flex: 1; height: var(--arrow-height); display: flex; align-items: center;">
                            <div class="phase-main" style="background-color: <?php echo $phase['color']; ?>; z-index: <?php echo 3 - $index; ?>; --index: <?php echo $index; ?>;">
                                <span class="phase-span" style="color: <?php echo $phase['text_color']; ?>; font-weight: 800; letter-spacing: 0.5px; padding-left: <?php echo $index === 0 ? 'calc(var(--side-padding) / 2)' : 'var(--side-padding)'; ?>; text-align: center;">
                                    <?php echo $phase['label']; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Text Row -->
            <div class="phase-text-row" style="display: flex; gap: 32px;">
                <?php 
                $phase_texts = [
                    'Understading your best Selling USPs of your Brand or Product.',
                    'Creating the best Viral Script ideas with the right Creator.',
                    'Fast Launch Campaigns get 4x more results for your brand.'
                ];
                foreach ($phase_texts as $index => $text) : ?>
                    <div style="flex: 1;" class="phase-desc-wrapper">
                        <p style="font-size: 16px; color: #555; line-height: 1.6; margin: 0; font-weight: 400; transition-delay: calc(<?php echo $index; ?> * 0.15s + 0.3s);" class="phase-desc">
                            <?php echo $text; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
.abc-section {
    padding: 80px 24px;
    background-color: #fff;
    display: flex;
    justify-content: center;
    --arrow-height: 72px;
    --arrow-tip: 25px;
    --arrow-overlap: 0px; /* Removed overlap */
    --arrow-font: 18px;
    --side-padding: 40px;
}

.abc-container {
    width: 100%;
    max-width: 1400px;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 60px;
    flex-wrap: wrap;
}

.abc-left {
    flex: 0 1 450px;
}

.abc-right {
    flex: 1 1 600px;
    min-width: 300px;
}

.phase-main {
    height: var(--arrow-height);
    clip-path: polygon(0 0, calc(100% - var(--arrow-tip)) 0, 100% 50%, calc(100% - var(--arrow-tip)) 100%, 0 100%, var(--arrow-tip) 50%);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    
    /* Animation initial state */
    opacity: 0;
    transform: translateX(-40px) scale(0.92);
    transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1);
    transition-delay: calc(var(--index) * 0.2s);
}

.phase-desc {
    opacity: 0;
    transform: translateY(30px);
    transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1);
}

.reveal-on-scroll.is-visible .phase-main,
.abc-right.is-visible .phase-desc {
    opacity: 1;
    transform: translateX(0) scale(1) translateY(0);
}

.phase-span {
    font-size: var(--arrow-font);
    padding-right: var(--arrow-tip);
}

@media (max-width: 900px) {
    .abc-section {
        padding: 60px 20px;
        --arrow-height: 54px;
        --arrow-tip: 18px;
        --arrow-font: 14px;
        --side-padding: 20px;
    }
    .abc-container {
        flex-direction: column; /* Stack left and right */
        text-align: center;
        gap: 40px;
    }
    .abc-left, .abc-right {
        width: 100%;
        flex: 1 1 auto;
    }
    .abc-left p {
        text-align: center;
    }
    .phase-arrows {
        flex-direction: row !important; /* Keep horizontal like web */
        gap: 4px !important;
        margin-bottom: 24px !important;
    }
    .phase-text-row {
        flex-direction: row !important; /* Keep horizontal like web */
        gap: 12px !important;
        text-align: center;
    }
    .phase-desc {
        font-size: 13px !important; /* Scale text down to fit row */
        line-height: 1.4 !important;
    }
}
</style>
