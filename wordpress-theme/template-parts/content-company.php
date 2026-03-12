<div class="company-marquee-wrapper">
    <div class="company-logos-track">
        <?php 
        function render_company_logos() {
            // Updated to 9 images as requested
            for ($i = 1; $i <= 9; $i++) {
                $ext = ($i == 9) ? 'svg' : 'png';
                $logo_url = get_template_directory_uri() . '/assets/images/company/' . $i . '.' . $ext;
                
                echo '<div class="company-logo-item">';
                echo '<img src="' . $logo_url . '" alt="Client Logo ' . $i . '" class="floating-logo">';
                echo '</div>';
            }
        }

        // Render twice for seamless loop
        render_company_logos();
        render_company_logos();
        ?>
    </div>
</div>

<style>
.company-marquee-wrapper {
    width: 100%;
    overflow: hidden;
    background-color: #e0e0e0; /* Match services section light grey */
    padding: 20px 0;
    position: relative;
    user-select: none;
    /* Create a fade out effect on the left and right sides so logos blur/fade in and out */
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
}

.company-logos-track {
    display: flex;
    width: max-content;
    animation: marquee-scroll 40s linear infinite;
    align-items: center;
}

.company-logo-item {
    flex: 0 0 250px; /* Fixed width ensures perfect looping with -50% */
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
    transition: transform 0.3s ease;
}

.company-logo-item:hover {
    transform: scale(1.1);
}

.floating-logo {
    max-width: 90%; /* Prevent touching edges */
    max-height: 80%; /* Prevent horizontal/vertical clipping */
    width: auto;
    height: auto;
    object-fit: contain;
    mix-blend-mode: multiply; 
    filter: contrast(1.1) brightness(1.05);
}

@keyframes marquee-scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%); /* This works perfectly now with fixed-width items */
    }
}

.company-marquee-wrapper:hover .company-logos-track {
    animation-play-state: paused;
}

@media (max-width: 768px) {
    .company-logo-item {
        flex: 0 0 100px; /* Reduced from 150px to fit ~3.5 on most screens */
        height: 60px; /* Smaller height */
        padding: 0 10px; /* Reduced padding between logos */
    }
}
</style>
