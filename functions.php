<?php

function scripts_my_theme() {

	wp_enqueue_style( 'font-Rubik', '//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap' );
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/theme-style.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.theme.default.min.css.css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
	wp_enqueue_script('poper.min', get_template_directory_uri() . '/assets/js/poper.min.js');
/* 	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'); */
	wp_enqueue_script('jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/60e9348959.js');
	wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
	
}
add_action( 'wp_enqueue_scripts', 'scripts_my_theme' );

if ( ! function_exists( 'my_custom_theme' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function my_custom_theme() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1140, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
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
				'script',
				'style',
				'navigation-widgets',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height.
		add_theme_support( 'custom-line-height' );
		
		if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) 
		{
			$content_width = 740;
		}
	}
endif;
add_action( 'after_setup_theme', 'my_custom_theme' );


// Add theme support for Custom Logo.
function config_custom_logo() {
	add_theme_support( 'custom-logo' );
	}
add_action( 'after_setup_theme' , 'config_custom_logo' );


// Add theme support for Header Menu.
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function init_widgets_custom() {
	
	// Header User Buttons
	register_sidebar(array(
        'name' => 'Header User Button',
        'id'   => 'header-user-button',
        'before_widget' => '<div class="header-user-button">',
        'after_widget' => '</div>',
    ));
	
	// Footer Widgets
    register_sidebar(array(
        'name' => 'Footer content',
        'id'   => 'footer-content',
        'before_widget' => '<div class="footer-content">',
        'after_widget' => '</div>',
    ));
	register_sidebar(array(
        'name' => 'Footer Product',
        'id'   => 'footer-Product',
        'before_widget' => '<div class="footer-Product">',
        'after_widget' => '</div>',
    ));
	register_sidebar(array(
        'name' => 'Footer Engage',
        'id'   => 'footer-Engage',
        'before_widget' => '<div class="footer-Engage">',
        'after_widget' => '</div>',
    ));
	register_sidebar(array(
        'name' => 'Footer Earn',
        'id'   => 'footer-Earn',
        'before_widget' => '<div class="footer-Earn">',
        'after_widget' => '</div>',
    ));
	register_sidebar(
		array(
			'name'          => 'Blog Sidebar',
			'id'            => 'sidebar-1',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init','init_widgets_custom');




 
function my_acf_json_save_point( $path ) {
  // update path
  $path = get_stylesheet_directory() . '/acf-json';
  // return
  return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_load_point( $paths ) {
  // remove original path (optional)
  unset($paths[0]);
  // append path
  $paths[] = get_stylesheet_directory() . '/acf-json';
  // return
  return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');





?>