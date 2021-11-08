<?php
/**
 * Thahiti functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Thahiti
 */


add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'thahiti_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thahiti_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Thahiti, use a find and replace
		 * to change 'thahiti' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thahiti', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'thahiti' ),
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
				'thahiti_custom_background_args',
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
add_action( 'after_setup_theme', 'thahiti_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thahiti_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thahiti_content_width', 640 );
}
add_action( 'after_setup_theme', 'thahiti_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thahiti_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'thahiti' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'thahiti' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'thahiti_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}  
function thahiti_scripts() {
	wp_enqueue_style( 'thahiti-style', get_stylesheet_uri() );
	wp_enqueue_style( 'thahiti-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'fancyboxcss', get_stylesheet_directory_uri() . '/assets/css/fancybox.css');
	wp_enqueue_style( 'thahiti-main-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
	
	
	
	
	wp_style_add_data( 'thahiti-style', 'rtl', 'replace' );

	wp_register_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrapjs' );
	wp_enqueue_script( 'fancyboxjs', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slickslider', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'thahiti-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thahiti_scripts' );

// Registration Post Type

add_action('init', 'tahiti_island');
function tahiti_island(){

	register_taxonomy( 'category_island', array('island'), array (
		'label'                 => 'Add new category', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Category',
			'singular_name'     => 'Categories',
			'search_items'      => 'Search categories',
			'all_items'         => 'All items categories',
			'parent_item'       => 'Perent item category',
			'parent_item_colon' => 'Perent item category:',
			'edit_item'         => 'Edit item category',
			'update_item'       => 'Update item category',
			'add_new_item'      => 'Add new category',
			'new_item_name'     => 'New item category',
			'menu_name'         => 'Categories',
		),
		'description'           => 'Рубрики для раздела вопросов', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		'rewrite'               => array('slug'=>'island', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	 ) );

	register_post_type('island', array(
		'labels'             => array(
			'name'               => 'Islands', // Основное название типа записи
			'singular_name'      => 'Island', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new island',
			'edit_item'          => 'Edit island',
			'new_item'           => 'New island',
			'view_item'          => 'View island',
			'search_items'       => 'Search island',
			'not_found'          => 'Island not found',
			'not_found_in_trash' => 'Island not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Islands'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','editor','thumbnail','excerpt'),
		'menu_icon'			 => 'dashicons-location-alt'
	) );
}

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

