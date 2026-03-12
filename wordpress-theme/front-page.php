<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php get_template_part( 'template-parts/content', 'hero' ); ?>
    
    <div class="company-section-wrapper" style="padding: 2rem 4rem; background-color: #fff;">
        <?php get_template_part( 'template-parts/content', 'company' ); ?>
    </div>

    <?php get_template_part( 'template-parts/content', 'abc' ); ?>
    
    <?php get_template_part( 'template-parts/content', 'service' ); ?>
    
    <?php get_template_part( 'template-parts/content', 'meetexpert' ); ?>
    
    <?php get_template_part( 'template-parts/content', 'enquiry' ); ?>
    
    <?php get_template_part( 'template-parts/content', 'creators' ); ?>
    
    <?php get_template_part( 'template-parts/content', 'faq' ); ?>

</main>

<?php get_footer(); ?>
