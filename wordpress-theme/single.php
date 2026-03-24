<?php get_header(); ?>

<main id="primary" class="site-main single-post-main">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <div class="container">
                    <div class="post-meta-single">
                        <?php echo get_the_date(); ?>
                    </div>
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </div>
            </header>

            <div class="entry-content">
                <div class="container">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'quick-collab' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </div>

            <footer class="entry-footer container">
                <?php
                $categories_list = get_the_category_list( esc_html__( ', ', 'quick-collab' ) );
                if ( $categories_list ) {
                    printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'quick-collab' ) . '</span>', $categories_list );
                }
                ?>
            </footer>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
