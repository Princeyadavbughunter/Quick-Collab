<?php
/**
 * QuickCollab functions and definitions
 */

function quickcollab_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'quickcollab' ),
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}
add_action( 'after_setup_theme', 'quickcollab_setup' );

/**
 * Register Customizer settings.
 */
function quickcollab_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'hero_section', array(
        'title'    => __( 'Hero Section', 'quickcollab' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'hero_title', array(
        'default'   => "#1 Top Influencer Marketing Agency in India",
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'    => __( 'Hero Title', 'quickcollab' ),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'hero_desc', array(
        'default'   => "India’s First CTR Based Influencer & UGC Marketing Agency",
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'hero_desc', array(
        'label'    => __( 'Hero Description', 'quickcollab' ),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'hero_btn_text', array(
        'default'   => 'Contact Now',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'hero_btn_text', array(
        'label'    => __( 'Hero Button Text', 'quickcollab' ),
        'section'  => 'hero_section',
        'type'     => 'text',
    ) );

    // Footer Section
    $wp_customize->add_section( 'footer_section', array(
        'title'    => __( 'Footer Settings', 'quickcollab' ),
        'priority' => 100,
    ) );

    $wp_customize->add_setting( 'footer_desc', array(
        'default'   => "Quick Collab is India's First CTR-based UGC and Influencer Marketing Agency based in Gurgaon..",
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'footer_desc', array(
        'label'    => __( 'Footer Description', 'quickcollab' ),
        'section'  => 'footer_section',
        'type'     => 'textarea',
    ) );

    // Company Section (Logos)
    $wp_customize->add_section( 'company_section', array(
        'title'    => __( 'Company Logos', 'quickcollab' ),
        'priority' => 40,
    ) );
    for ($i = 1; $i <= 8; $i++) {
        $wp_customize->add_setting( "company_logo_$i", array( 'default' => '', 'transport' => 'refresh' ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "company_logo_$i", array(
            'label'    => __( "Logo $i", 'quickcollab' ),
            'section'  => 'company_section',
        ) ) );
    }

    // Service Section
    $wp_customize->add_section( 'service_section', array(
        'title'    => __( 'Service Section', 'quickcollab' ),
        'priority' => 50,
    ) );
    $wp_customize->add_setting( 'service_heading', array( 'default' => 'Our Core Services', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service_heading', array( 'label' => 'Title', 'section' => 'service_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'service_subheading', array( 'default' => 'Influencer Marketing Strategies That Drive Results', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service_subheading', array( 'label' => 'Subtitle', 'section' => 'service_section', 'type' => 'text' ) );

    // Abc (Process) Section
    $wp_customize->add_section( 'abc_section', array(
        'title'    => __( 'Process (Abc) Section', 'quickcollab' ),
        'priority' => 60,
    ) );
    $wp_customize->add_setting( 'abc_heading', array( 'default' => 'How We Work', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'abc_heading', array( 'label' => 'Title', 'section' => 'abc_section', 'type' => 'text' ) );

    // MeetExpert Section
    $wp_customize->add_section( 'meetexpert_section', array(
        'title'    => __( 'Meet Expert Section', 'quickcollab' ),
        'priority' => 70,
    ) );
    $wp_customize->add_setting( 'expert_title', array( 'default' => 'Meet Our Expert', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'expert_title', array( 'label' => 'Title', 'section' => 'meetexpert_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'expert_image', array( 'default' => '', 'transport' => 'refresh' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'expert_image', array(
        'label'    => __( 'Expert Image', 'quickcollab' ),
        'section'  => 'meetexpert_section',
    ) ) );

    // Creators Section
    $wp_customize->add_section( 'creators_section', array(
        'title'    => __( 'Creators Section', 'quickcollab' ),
        'priority' => 80,
    ) );
    $wp_customize->add_setting( 'creators_title', array( 'default' => 'Join our team of 10,000+ top creators', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'creators_title', array( 'label' => 'Title', 'section' => 'creators_section', 'type' => 'textarea' ) );

    // FAQ Section
    $wp_customize->add_section( 'faq_section', array(
        'title'    => __( 'FAQ Section', 'quickcollab' ),
        'priority' => 90,
    ) );
    $wp_customize->add_setting( 'faq_heading', array( 'default' => 'Frequently Asked Questions', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'faq_heading', array( 'label' => 'Title', 'section' => 'faq_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'faq_subtext', array( 
        'default'   => 'You can schedule your call with QuickCollab in 3 simple steps and Transform your brand.', 
        'transport' => 'refresh' 
    ) );
    $wp_customize->add_control( 'faq_subtext', array( 
        'label'    => 'Subtext', 
        'section'  => 'faq_section', 
        'type'     => 'textarea' 
    ) );
}
add_action( 'customize_register', 'quickcollab_customize_register' );

/**
 * Enqueue scripts and styles.
 */
function quickcollab_scripts() {
    // Standard style.css
    wp_enqueue_style( 'quickcollab-style', get_stylesheet_uri(), array(), '1.0.3' );

    // Main JS
    wp_enqueue_script( 'quickcollab-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.1', true );

    // Google Fonts
    wp_enqueue_style( 'quickcollab-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Poppins:wght@300;400;600;700;800;900&family=Open+Sauce+One:wght@400;500;600;700;900&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'quickcollab_scripts' );
