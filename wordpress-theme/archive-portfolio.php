<?php
/**
 * The template for displaying portfolio archives
 */

get_header(); ?>

<div class="portfolio-archive-wrapper">
    <div class="portfolio-pattern-bg"></div>
    
    <section class="portfolio-hero">
        <div class="container hero-inner">
            <div class="portfolio-hero-badge">✨ Our Track Record</div>
            <h1 class="portfolio-hero-title">Our <span class="hl">Success Stories</span></h1>
            <p class="portfolio-hero-subtitle">We've helped brands scale through data-driven influencer & UGC marketing. Each campaign is a testament to our commitment to results.</p>
        </div>
    </section>

    <section class="portfolio-grid-section">
        <div class="container">
            <div class="portfolio-grid">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-card'); ?>>
                        <div class="portfolio-card-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="portfolio-card-tag">Campaign</div>
                        </div>
                        <div class="portfolio-card-body">
                            <h3 class="portfolio-card-title"><?php the_title(); ?></h3>
                            <p class="portfolio-card-excerpt"><?php echo get_the_excerpt(); ?></p>
                            
                            <div class="portfolio-card-stats">
                                <div class="stat-item">
                                    <span class="stat-value"><?php echo get_post_meta(get_the_ID(), '_portfolio_total_posts', true) ?: '10+'; ?></span>
                                    <span class="stat-label">Posts</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-value"><?php echo get_post_meta(get_the_ID(), '_portfolio_avg_views', true) ?: '100K+'; ?></span>
                                    <span class="stat-label">Views</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-value"><?php echo get_post_meta(get_the_ID(), '_portfolio_duration', true) ?: '1M'; ?></span>
                                    <span class="stat-label">Duration</span>
                                </div>
                            </div>
                            
                            <div class="portfolio-card-footer">
                                <a href="<?php the_permalink(); ?>" class="portfolio-btn">Read More</a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); else : ?>
                    <p><?php esc_html_e( 'No portfolio items found.', 'quickcollab' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
