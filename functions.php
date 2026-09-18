<?php 
/**
 * @Packge 	   : Security
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 *
 * Define constant
 *
 */
 
// Base URI
if( ! defined( 'SECURITY_DIR_URI' ) ) {
	define( 'SECURITY_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'SECURITY_DIR_ASSETS_URI' ) ) {
	define( 'SECURITY_DIR_ASSETS_URI', SECURITY_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'SECURITY_DIR_CSS_URI' ) ) {
	define( 'SECURITY_DIR_CSS_URI', SECURITY_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'SECURITY_DIR_JS_URI' ) ) {
	define( 'SECURITY_DIR_JS_URI', SECURITY_DIR_ASSETS_URI .'js/' );
}

// Icon Images
if( ! defined('SECURITY_DIR_ICON_IMG_URI') ) {
	define( 'SECURITY_DIR_ICON_IMG_URI', SECURITY_DIR_ASSETS_URI.'img/icons/' );
}

// Base Directory
if( ! defined( 'SECURITY_DIR_PATH' ) ) {
	define( 'SECURITY_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'SECURITY_DIR_PATH_INC' ) ) {
	define( 'SECURITY_DIR_PATH_INC', SECURITY_DIR_PATH.'inc/' );
}

//Security libraries Folder Directory
if( ! defined( 'SECURITY_DIR_PATH_LIBS' ) ) {
	define( 'SECURITY_DIR_PATH_LIBS', SECURITY_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'SECURITY_DIR_PATH_CLASSES' ) ) {
	define( 'SECURITY_DIR_PATH_CLASSES', SECURITY_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'SECURITY_DIR_PATH_HOOKS' ) ) {
	define( 'SECURITY_DIR_PATH_HOOKS', SECURITY_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'SECURITY_DIR_PATH_WIDGET' ) ) {
	define( 'SECURITY_DIR_PATH_WIDGET', SECURITY_DIR_PATH_INC.'widgets/' );
}


// Admin Enqueue script
function security_admin_script(){
    wp_enqueue_style( 'security-admin', get_template_directory_uri().'/assets/css/security_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'security_admin', get_template_directory_uri().'/assets/js/security_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'security_admin_script' );


/**
 * Include File
 *
 */

require_once( SECURITY_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( SECURITY_DIR_PATH_INC . 'widgets-reg.php' );
require_once( SECURITY_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( SECURITY_DIR_PATH_INC . 'security-functions.php' );
require_once( SECURITY_DIR_PATH_INC . 'commoncss.php' );
require_once( SECURITY_DIR_PATH_INC . 'support-functions.php' );
require_once( SECURITY_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( SECURITY_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( SECURITY_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( SECURITY_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( SECURITY_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( SECURITY_DIR_PATH_HOOKS . 'hooks.php' );
require_once( SECURITY_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( SECURITY_DIR_PATH_INC . 'security-companion/security-companion.php' );
require_once( SECURITY_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( SECURITY_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Security object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new Security();


/**
 * A page by title, without get_page_by_title().
 *
 * WordPress deprecated get_page_by_title() in 6.2; this keeps the same
 * signature and return shape so existing calls behave identically.
 *
 * @param string $title     Page title.
 * @param string $output    OBJECT, ARRAY_A or ARRAY_N.
 * @param string $post_type Post type to search.
 * @return WP_Post|array|null
 */
if ( ! function_exists( 'security_get_page_by_title' ) ) {
	function security_get_page_by_title( $title, $output = OBJECT, $post_type = 'page' ) {
		$query = new WP_Query(
			array(
				'post_type'              => $post_type,
				'title'                  => $title,
				'post_status'            => 'all',
				'posts_per_page'         => 1,
				'no_found_rows'          => true,
				'ignore_sticky_posts'    => true,
				'update_post_term_cache' => false,
				'update_post_meta_cache' => false,
				'orderby'                => 'post_date ID',
				'order'                  => 'ASC',
			)
		);

		$page = ! empty( $query->posts ) ? $query->posts[0] : null;

		if ( ! $page ) {
			return null;
		}

		if ( ARRAY_A === $output ) {
			return get_object_vars( $page );
		}

		if ( ARRAY_N === $output ) {
			return array_values( get_object_vars( $page ) );
		}

		return $page;
	}
}


/**
 * Editor and markup support this theme predates.
 */
if ( ! function_exists( 'security_modern_supports' ) ) {
	function security_modern_supports() {
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
	}
	add_action( 'after_setup_theme', 'security_modern_supports', 20 );
}
