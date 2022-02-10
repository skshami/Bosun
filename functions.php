<?php
/**
 * Bosun functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bosun
 */

if ( !defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bosun_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Bosun, use a find and replace
     * to change 'bosun' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'bosun', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails', array('post','page', 'slider', 'service', 'case','team', 'testimonial') );

    add_image_size( 'service-thumb', 308, 205, true );
    add_image_size( 'team-member-photo', 270, 350, true );
    add_image_size( 'recent-thumb', 370, 246, true );
    add_image_size( 'case-thumb', 370, 465, true );
    add_image_size( 'case-slider', 247, 310, true );
    add_image_size( 'testimonial-logo', 114, 114, true );
    add_image_size( 'post-thumbnails', 750, 375, true );
    add_image_size( 'prev-next-post-thumbnails', 60, 60, true );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'bosun' ),
            'footer-menu' => esc_html__( 'Footer menu', 'bosun' ),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'bosun_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

add_action( 'after_setup_theme', 'bosun_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bosun_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'bosun_content_width', 640 );
}

add_action( 'after_setup_theme', 'bosun_content_width', 0 );


// Except to 30 Word
function bosun_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'bosun_custom_excerpt_length', 999 );

function bosun_excerpt_more( $more ) {
    return '....';
}
add_filter( 'excerpt_more', 'bosun_excerpt_more' );


//ACF Options Page.
if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Bosun Theme',
        'menu_slug'  => 'theme-general-settings',
        'icon_url'   => 'dashicons-chart-pie',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ) );

    acf_add_options_sub_page( array(
        'page_title'  => 'Theme Header Settings',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-general-settings',
    ) );

    acf_add_options_sub_page( array(
        'page_title'  => 'Theme Footer Settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ) );

}



// Pagenav Function
function bosun_pagenav() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;

    if ( !$current = get_query_var( 'paged' ) ) {
        $current = 1;
    }

    $args['base'] = str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) );
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = '<i class="ti-angle-left"></i>';
    $args['next_text'] = '<i class="ti-angle-right"></i>';

    if ( $max > 1 ) {
        echo '<pre>
    <nav class="blog-pagination justify-content-center d-flex">';
    }

    echo $pages . paginate_links( $args );

    if ( $max > 1 ) {
        echo '</nav></pre>';
    }

}

//ACF Admin Ber Hide
add_filter( 'acf/settings/show_admin', '__return_false' );

/**
 * Enqueue scripts and styles.
 */
function bosun_scripts() {

    wp_enqueue_style( 'bosun-font', '//fonts.googleapis.com/css?family=Poppins:100,200,200i,300,400,500,600,700,800,900&display=swap', false );
    wp_enqueue_style( 'bosun-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bosun-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bosun-slicknav', get_template_directory_uri() . '/assets/css/assets/css/slicknav.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bosun-font-awesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bosun-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bosun-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bosun-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'bosun-style', 'rtl', 'replace' );

    wp_enqueue_script( 'bosun-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bosun-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bosun-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bosun-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bosun-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bosun-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bosun-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bosun-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}

add_action( 'wp_enqueue_scripts', 'bosun_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

 
//ACF. 
require get_template_directory() . '/assets/inc/acf-mb.php';

//TGM. 
require get_template_directory() . '/assets/inc/tgm.php';

 
//Custom Post Type. 
require get_template_directory() . '/inc/custom-post-type.php';


//Custom widgets.
require get_template_directory() . '/inc/bosun-widgets.php';

//Custom Shortcode.
require get_template_directory() . '/inc/shortcode.php';

//Custom template.
require get_template_directory() . '/inc/custom.php';

/**
 * Load Jetpack compatibility file.
 */

if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
