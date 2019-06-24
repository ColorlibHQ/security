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
