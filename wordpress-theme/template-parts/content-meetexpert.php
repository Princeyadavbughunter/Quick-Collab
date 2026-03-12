<section class="meet-section" id="work">
    <div class="meet-grid reveal-on-scroll">
        <!-- Expert Cards Scroller Area -->
        <div class="expert-slider-area">
            <div class="expert-track">
                <?php 
                $experts = [
                    ['name' => 'Abhishek Sarraf', 'role' => 'Founder & CEO'],
                    ['name' => 'Prince Yadav', 'role' => 'Web Developer'],
                    ['name' => 'Raghav Sharma', 'role' => 'Video Editor'],
                    ['name' => 'Vivek Kumar', 'role' => 'Campaign Strategist'],
                    ['name' => 'Pushkar Raj', 'role' => 'Cinematographer'],
                ];
                foreach ($experts as $i => $expert) : 
                    $img_num = $i + 1;
                ?>
                    <div class="expert-card" style="--index: <?php echo $i; ?>;">
                        <div class="expert-img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teams/<?php echo $img_num; ?>.png" alt="<?php echo $expert['name']; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Slider Dots -->
            <div class="slider-dots">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
            </div>
        </div>

        <!-- Right Info Box -->
        <div class="meet-info">
            <h2>Meet the experts</h2>
            <p>
                Leveraging the talents of professional social media influencers and content creators, our influencer marketing experts collaborate.
            </p>
        </div>
    </div>
</section>

<style>
.meet-section {
    padding: 50px 0 0px 40px; /* Removed bottom padding so it flushes strictly to the next section */
    background: #fff;
    width: 100%;
    overflow-x: hidden;
}

.meet-grid {
    display: grid;
    grid-template-columns: 3fr 2.2fr; /* Restored original proportional ratio */
    gap: 24px;
    align-items: stretch;
    width: 100%;
}

.expert-slider-area {
    display: flex;
    flex-direction: column;
    gap: 20px;
    min-width: 0;
    padding-top: 40px; /* Pushes images section down as requested */
}

.expert-track {
    display: flex;
    gap: 24px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    scrollbar-width: none;
}

.expert-track::-webkit-scrollbar {
    display: none;
}

.expert-card {
    flex: 0 0 calc(33.33% - 16px);
    min-width: 250px;
    border: 2px solid #2bbfaa;
    border-radius: 12px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    scroll-snap-align: start;

    /* Animation initial state */
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
    transition-delay: calc(var(--index) * 0.1s);
}

.meet-grid.is-visible .expert-card {
    opacity: 1;
    transform: translateY(0);
}

.expert-img-wrap {
    flex: 1;
    background: transparent; /* Changed from grey so it blends */
    display: flex; /* Added flex to center image */
    justify-content: center;
    align-items: center;
    padding: 10px; /* Optional padding */
}

.expert-img-wrap img {
    width: 100%;
    max-height: 400px; /* Let it scale up slightly */
    height: auto;
    object-fit: contain; /* Shows full image without clipping */
    display: block;
}

.expert-footer {
    background: #fff;
    padding: 16px;
}

.footer-bar {
    display: flex;
    height: 6px;
    margin-bottom: 12px;
}

.bar-dark { background: #1a5c52; flex: 3; }
.bar-green { background: #c8d832; flex: 1; }

.expert-role {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 13px;
    color: #2bbfaa;
    font-weight: 600;
    margin-bottom: 4px;
}

.expert-name {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 18px;
    font-weight: 800;
    color: #1a3c34;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* Dots Styling */
.slider-dots {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #e0e0e0;
    cursor: pointer;
    transition: all 0.3s ease;
}

.dot.active {
    background: #1a5c52;
    transform: scale(1.2);
}

.meet-info {
    background: #1a5c52;
    padding: 60px 48px; /* Restored original padding */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.meet-info h2 {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 42px; /* Restored original size */
    font-weight: 800;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 24px;
}

.meet-info p {
    font-family: 'Open Sauce One', sans-serif;
    font-size: 17px; /* Restored original size */
    color: #a8d5c8;
    line-height: 1.6;
    max-width: 500px;
    margin: 0 auto;
}

@media (max-width: 1100px) {
    .meet-grid { grid-template-columns: 1fr; }
    .meet-info { order: -1; border-radius: 12px; margin-right: 0; padding: 40px 20px; }
    .expert-card { flex: 0 0 calc(50% - 12px); }
    .slider-dots { display: flex; /* Made it visible again */ }
}

@media (max-width: 600px) {
    .meet-section { padding: 40px 20px 0px 20px; } /* Removed bottom padding */
    .expert-card { flex: 0 0 85%; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.expert-track');
    const dots = document.querySelectorAll('.dot');
    
    // Mouse dragging capability
    let isDown = false;
    let startX;
    let scrollLeft;

    if (track) {
        track.addEventListener('mousedown', (e) => {
            isDown = true;
            track.classList.add('active');
            startX = e.pageX - track.offsetLeft;
            scrollLeft = track.scrollLeft;
            // Disable scroll-snap during active dragging
            track.style.scrollSnapType = 'none';
        });

        track.addEventListener('mouseleave', () => {
            isDown = false;
            track.style.scrollSnapType = 'x mandatory';
        });

        track.addEventListener('mouseup', () => {
            isDown = false;
            track.style.scrollSnapType = 'x mandatory';
        });

        track.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - track.offsetLeft;
            const walk = (x - startX) * 2; // Drag multiplier
            track.scrollLeft = scrollLeft - walk;
        });

        // Click dots to scroll page chunks
        if (dots.length > 0) {
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    const maxScrollLeft = track.scrollWidth - track.clientWidth;
                    const scrollTarget = index === 0 ? 0 : maxScrollLeft;
                    track.scrollTo({ left: scrollTarget, behavior: 'smooth' });
                });
            });

            // Dot highlighting based on scroll position
            track.addEventListener('scroll', () => {
                const maxScrollLeft = track.scrollWidth - track.clientWidth;
                if(maxScrollLeft <= 0) return; 

                const scrollPercent = track.scrollLeft / maxScrollLeft;
                
                // Switch dots at 50%
                if (scrollPercent >= 0.5) {
                    dots[0].classList.remove('active');
                    if(dots[1]) dots[1].classList.add('active');
                } else {
                    dots[0].classList.add('active');
                    if(dots[1]) dots[1].classList.remove('active');
                }
            });
        }
    }
});
</script>
</style>
