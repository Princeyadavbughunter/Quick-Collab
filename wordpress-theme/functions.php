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
    wp_enqueue_style( 'quickcollab-style', get_stylesheet_uri(), array(), '1.1.0' );

    // Main JS
    wp_enqueue_script( 'quickcollab-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.1', true );

    // Google Fonts
    wp_enqueue_style( 'quickcollab-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Poppins:wght@300;400;600;700;800;900&family=Open+Sauce+One:wght@400;500;600;700;900&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'quickcollab_scripts' );

/**
 * Register Portfolio Custom Post Type
 */
function quickcollab_register_portfolio_cpt() {
    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name', 'quickcollab' ),
        'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'quickcollab' ),
        'menu_name'             => __( 'Our Work (Portfolio)', 'quickcollab' ),
        'name_admin_bar'        => __( 'Portfolio', 'quickcollab' ),
        'archives'              => __( 'Portfolio Archives', 'quickcollab' ),
        'attributes'            => __( 'Portfolio Attributes', 'quickcollab' ),
        'parent_item_colon'     => __( 'Parent Portfolio:', 'quickcollab' ),
        'all_items'             => __( 'All Portfolios', 'quickcollab' ),
        'add_new_item'          => __( 'Add New Portfolio item', 'quickcollab' ),
        'add_new'               => __( 'Add New', 'quickcollab' ),
        'new_item'              => __( 'New Portfolio', 'quickcollab' ),
        'edit_item'             => __( 'Edit Portfolio', 'quickcollab' ),
        'update_item'           => __( 'Update Portfolio', 'quickcollab' ),
        'view_item'             => __( 'View Portfolio', 'quickcollab' ),
        'view_items'            => __( 'View Portfolios', 'quickcollab' ),
        'search_items'          => __( 'Search Portfolio', 'quickcollab' ),
        'not_found'             => __( 'Not found', 'quickcollab' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'quickcollab' ),
        'featured_image'        => __( 'Card Image', 'quickcollab' ),
        'set_featured_image'    => __( 'Set Card image', 'quickcollab' ),
        'remove_featured_image' => __( 'Remove Card image', 'quickcollab' ),
        'use_featured_image'    => __( 'Use as Card image', 'quickcollab' ),
        'insert_into_item'      => __( 'Insert into Portfolio', 'quickcollab' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'quickcollab' ),
        'items_list'            => __( 'Portfolios list', 'quickcollab' ),
        'items_list_navigation' => __( 'Portfolios list navigation', 'quickcollab' ),
        'filter_items_list'     => __( 'Filter Portfolios list', 'quickcollab' ),
    );
    $args = array(
        'label'                 => __( 'Portfolio', 'quickcollab' ),
        'description'           => __( 'Case studies and works', 'quickcollab' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'portfolio'),
        'show_in_rest'          => true,
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'quickcollab_register_portfolio_cpt', 0 );

/**
 * Add Meta Box for Portfolio Folder Name
 */
function quickcollab_portfolio_add_meta_boxes() {
    add_meta_box(
        'portfolio_folder_name',
        __( 'Video Folder Name', 'quickcollab' ),
        'quickcollab_portfolio_folder_meta_box_callback',
        'portfolio',
        'side'
    );
}
add_action( 'add_meta_boxes', 'quickcollab_portfolio_add_meta_boxes' );

function quickcollab_portfolio_folder_meta_box_callback( $post ) {
    wp_nonce_field( 'quickcollab_portfolio_save_meta', 'quickcollab_portfolio_meta_nonce' );
    $value = get_post_meta( $post->ID, '_portfolio_folder_name', true );
    echo '<p><label for="portfolio_folder_name_field">' . __( 'Enter folder name in public/portfolio/ (e.g. 1. Suzuki)', 'quickcollab' ) . '</label></p>';
    echo '<input type="text" id="portfolio_folder_name_field" name="portfolio_folder_name_field" value="' . esc_attr( $value ) . '" style="width:100%;" />';
}

/**
 * Save Meta Box data
 */
function quickcollab_portfolio_save_meta( $post_id ) {
    if ( ! isset( $_POST['quickcollab_portfolio_meta_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['quickcollab_portfolio_meta_nonce'], 'quickcollab_portfolio_save_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['portfolio_folder_name_field'] ) ) {
        update_post_meta( $post_id, '_portfolio_folder_name', sanitize_text_field( $_POST['portfolio_folder_name_field'] ) );
    }

    if ( isset( $_POST['portfolio_total_posts'] ) ) update_post_meta( $post_id, '_portfolio_total_posts', sanitize_text_field( $_POST['portfolio_total_posts'] ) );
    if ( isset( $_POST['portfolio_duration'] ) ) update_post_meta( $post_id, '_portfolio_duration', sanitize_text_field( $_POST['portfolio_duration'] ) );
    if ( isset( $_POST['portfolio_avg_views'] ) ) update_post_meta( $post_id, '_portfolio_avg_views', sanitize_text_field( $_POST['portfolio_avg_views'] ) );
}
add_action( 'save_post', 'quickcollab_portfolio_save_meta' );

/**
 * Add extra meta fields for campaign results
 */
function quickcollab_portfolio_results_meta_boxes() {
    add_meta_box(
        'portfolio_results',
        __( 'Campaign Results', 'quickcollab' ),
        'quickcollab_portfolio_results_callback',
        'portfolio',
        'normal'
    );
}
add_action( 'add_meta_boxes', 'quickcollab_portfolio_results_meta_boxes' );

function quickcollab_portfolio_results_callback( $post ) {
    $total_posts = get_post_meta( $post->ID, '_portfolio_total_posts', true );
    $duration = get_post_meta( $post->ID, '_portfolio_duration', true );
    $avg_views = get_post_meta( $post->ID, '_portfolio_avg_views', true );
    ?>
    <p>
        <label>Total Campaign Posts:</label><br>
        <input type="text" name="portfolio_total_posts" value="<?php echo esc_attr($total_posts); ?>" />
    </p>
    <p>
        <label>Month Duration:</label><br>
        <input type="text" name="portfolio_duration" value="<?php echo esc_attr($duration); ?>" />
    </p>
    <p>
        <label>Avg Views:</label><br>
        <input type="text" name="portfolio_avg_views" value="<?php echo esc_attr($avg_views); ?>" />
    </p>
    <?php
}

/**
 * Automatically sync Portfolio CPT with folders in /var/www/html/portfolio/
 */
function quickcollab_sync_portfolio_folders() {
    $portfolio_path = get_template_directory() . '/portfolio/';
    if ( ! is_dir( $portfolio_path ) ) return;

    $folders = array_diff( scandir( $portfolio_path ), array( '.', '..' ) );

    foreach ( $folders as $folder ) {
        if ( is_dir( $portfolio_path . $folder ) ) {
            // Check if post already exists for this folder
            $existing_post = get_posts( array(
                'post_type'  => 'portfolio',
                'meta_key'   => '_portfolio_folder_name',
                'meta_value' => $folder,
                'posts_per_page' => 1,
            ) );

            if ( empty( $existing_post ) ) {
                // Create new portfolio post
                // Clean up title (remove numbering if present, e.g. "1. Suzuki" -> "Suzuki")
                $title = preg_replace( '/^\d+\.\s*/', '', $folder );
                
                $post_id = wp_insert_post( array(
                    'post_title'   => $title,
                    'post_status'  => 'publish',
                    'post_type'    => 'portfolio',
                    'post_excerpt' => 'Campaign for ' . $title,
                ) );

                if ( $post_id ) {
                    update_post_meta( $post_id, '_portfolio_folder_name', $folder );
                    // Set some default stats for the cards
                    update_post_meta( $post_id, '_portfolio_total_posts', '10+' );
                    update_post_meta( $post_id, '_portfolio_duration', '1 Month' );
                    update_post_meta( $post_id, '_portfolio_avg_views', '100K+' );
                }
            }
        }
    }
}
// Run periodically or on admin load for demo purposes
add_action( 'admin_init', 'quickcollab_sync_portfolio_folders' );
// Also run once on theme activation or just on init for this task
add_action( 'init', 'quickcollab_sync_portfolio_folders' );
