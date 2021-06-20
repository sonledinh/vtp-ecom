<?php
/**
 * vtp-ecom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vtp-ecom
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
} 

if ( ! function_exists( 'vtp_ecom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vtp_ecom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vtp-ecom, use a find and replace
		 * to change 'vtp-ecom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vtp-ecom', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'vtp-ecom' ),
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
				'vtp_ecom_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'vtp_ecom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vtp_ecom_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vtp_ecom_content_width', 640 );
}
add_action( 'after_setup_theme', 'vtp_ecom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vtp_ecom_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vtp-ecom' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vtp-ecom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vtp_ecom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

define('__BASE_URL__', get_template_directory_uri().'/assets');

function vtp_ecom_scripts() {
	wp_enqueue_style( 'animate', __BASE_URL__.'/css/animate.css' , array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', __BASE_URL__.'/css/bootstrap.min.css' , array(), _S_VERSION );
	wp_enqueue_style( 'swiper', __BASE_URL__.'/css/swiper.min.css' , array(), _S_VERSION );
	wp_enqueue_style( 'awesome', __BASE_URL__.'/css/font-awesome.css' , array(), _S_VERSION );
	wp_enqueue_style( 'mmenu', __BASE_URL__.'/css/jquery.mmenu.all.css' , array(), _S_VERSION );
	wp_enqueue_style( 'slick', __BASE_URL__.'/css/slick.min.css' , array(), _S_VERSION );
	wp_enqueue_style( 'slick-theme', __BASE_URL__.'/css/slick-theme.min.css' , array(), _S_VERSION );
	wp_enqueue_style( 'style', __BASE_URL__.'/css/style.css' , array(), _S_VERSION );
	wp_enqueue_style( 'responsive', __BASE_URL__.'/css/responsive.css' , array(), _S_VERSION );

	wp_enqueue_script( 'jquery-js', __BASE_URL__.'/js/jquery.min.js' , array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', __BASE_URL__.'/js/bootstrap.min.js' , array(), _S_VERSION, true );
	wp_enqueue_script( 'mmenu-js', __BASE_URL__.'/js/jquery.mmenu.all.js' , array(), _S_VERSION, true );
	wp_enqueue_script( 'slick-js', __BASE_URL__.'/js/slick.min.js' , array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-js', __BASE_URL__.'/js/swiper.min.js' , array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-js', __BASE_URL__.'/js/swiper.min.js' , array(), _S_VERSION, true );
	wp_enqueue_script( 'wow-js', __BASE_URL__.'/js/wow.min.js' , array(), _S_VERSION, true );
	wp_enqueue_script( 'private', __BASE_URL__.'/js/private.js' , array(), _S_VERSION, true );}
add_action( 'wp_enqueue_scripts', 'vtp_ecom_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' => 'Cài Đặt Chung', 
		'menu_title' => 'Cài Đặt Chung', 
		'menu_slug' => 'theme-settings', 
		'capability' => 'edit_posts',
		'redirect' => false
	));
}