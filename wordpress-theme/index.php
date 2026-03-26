<?php get_header(); ?>

<div class="blog-header">
    <div class="blog-header-content">
        <h1>Latest Insights & News</h1>
        <p>Stay updated with the latest trends in influencer marketing and UGC.</p>
    </div>
</div>

<div class="blog-container">
    <div class="blog-grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <header class="entry-header">
                            <div class="post-meta">
                                <span class="post-date"><?php echo get_the_date(); ?></span>
                            </div>
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                        </header>

                        <div class="entry-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="read-more-btn">
                            Read More <span class="arrow">→</span>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="portfolio-archive-wrapper fallback-mode" style="margin-top: 0; width: 100vw; margin-left: calc(-50vw + 50%);">
                <div class="portfolio-pattern-bg"></div>
                
                <section class="portfolio-hero" style="padding: 100px 5% 60px;">
                    <div class="container hero-inner">
                        <div class="portfolio-hero-badge">Latest Work</div>
                        <h2 class="portfolio-hero-title">Portfolio <span class="hl">Showcase</span></h2>
                    </div>
                </section>

                <section class="portfolio-grid-section">
                    <div class="container">
                        <div class="portfolio-grid">
                            <?php 
                            $portfolio_query = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 4));
                            if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); 
                            ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-card'); ?>>
                                    <div class="portfolio-card-image">
                                        <?php if (has_post_thumbnail()) : the_post_thumbnail('large'); else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="portfolio-card-tag">Portfolio</div>
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
                                            <a href="<?php the_permalink(); ?>" class="portfolio-btn">View Case Study</a>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; wp_reset_postdata(); else : ?>
                                <p><?php esc_html_e('Sorry, no content matched your criteria.'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
