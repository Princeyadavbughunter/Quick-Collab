<?php
/**
 * The template for displaying single portfolio items
 */

get_header(); ?>

<div class="single-portfolio-wrapper">
    <div class="portfolio-pattern-bg"></div>
    
    <?php while ( have_posts() ) : the_post(); 
        $folder = get_post_meta(get_the_ID(), '_portfolio_folder_name', true);
        $total_posts = get_post_meta(get_the_ID(), '_portfolio_total_posts', true);
        $duration =get_post_meta(get_the_ID(), '_portfolio_duration', true);
        $avg_views = get_post_meta(get_the_ID(), '_portfolio_avg_views', true);
    ?>

    <section class="portfolio-single-hero">
        <div class="container hero-inner">
            <div class="portfolio-hero-badge">Campaign Case Study</div>
            <h1 class="company-name"><?php the_title(); ?></h1>
            <p class="campaign-title"><?php echo get_the_excerpt(); ?></p>
        </div>
    </section>

    <div class="container main-content-container">
        <!-- Results Section -->
        <section class="campaign-results">
            <h2 class="section-title">Campaign Results</h2>
            <div class="results-grid">
                <div class="result-item">
                    <span class="result-number"><?php echo esc_html($total_posts); ?></span>
                    <span class="result-label">Total Campaign Posts</span>
                </div>
                <div class="result-item">
                    <span class="result-number"><?php echo esc_html($duration); ?></span>
                    <span class="result-label">Month Duration</span>
                </div>
                <div class="result-item">
                    <span class="result-number"><?php echo esc_html($avg_views); ?></span>
                    <span class="result-label">Avg Views</span>
                </div>
            </div>
        </section>

        <!-- Videos Section -->
        <?php if($folder) : ?>
        <section class="campaign-videos">
            <div class="video-grid">
                <?php 
                for($i=1; $i<=3; $i++) : 
                    $video_file = get_template_directory_uri() . "/portfolio/" . $folder . "/Vid" . $i . ".mp4";
                    $video_path = get_template_directory() . "/portfolio/" . $folder . "/Vid" . $i . ".mp4";
                    if ( ! file_exists( $video_path ) ) {
                        $video_file = get_template_directory_uri() . "/portfolio/" . $folder . "/vid" . $i . ".mp4";
                        $video_path = get_template_directory() . "/portfolio/" . $folder . "/vid" . $i . ".mp4";
                    }
                    if ( ! file_exists( $video_path ) ) continue; // skip if video doesn't exist
                ?>
                <div class="video-item">
                    <div class="video-wrap">
                        <video
                            class="portfolio-video"
                            autoplay
                            muted
                            loop
                            playsinline
                            preload="auto"
                        >
                            <source src="<?php echo esc_url($video_file); ?>" type="video/mp4">
                        </video>
                        <!-- Click overlay: pause/play on tap -->
                        <div class="video-overlay" onclick="
                            var v = this.previousElementSibling;
                            if(v.paused){ v.play(); this.classList.remove('paused'); }
                            else { v.pause(); this.classList.add('paused'); }
                        ">
                            <span class="play-icon">▶</span>
                        </div>
                        <!-- Audio toggle -->
                        <button class="audio-btn" onclick="
                            var v = this.closest('.video-wrap').querySelector('video');
                            v.muted = !v.muted;
                            this.textContent = v.muted ? '🔇' : '🔊';
                        " title="Toggle Audio">🔇</button>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- Strategy Section -->
        <section class="project-strategy card-style">
            <h3 class="strategy-title">Strategy</h3>
            <div class="strategy-content">
                <?php the_content(); ?>
            </div>
        </section>

        <!-- More Case Studies -->
        <section class="more-case-studies">
            <h2 class="section-title">More Case Studies</h2>
            <div class="mini-grid">
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 2,
                    'post__not_in' => array(get_the_ID()),
                );
                $query = new WP_Query($args);
                if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                ?>
                <div class="mini-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h4><?php the_title(); ?></h4>
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </section>
    </div>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
