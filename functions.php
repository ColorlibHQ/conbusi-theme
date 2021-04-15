<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'CONBUSI_DIR_URI' ) ) {
	define( 'CONBUSI_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'CONBUSI_DIR_ASSETS_URI' ) ) {
	define( 'CONBUSI_DIR_ASSETS_URI', CONBUSI_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'CONBUSI_DIR_CSS_URI' ) ) {
	define( 'CONBUSI_DIR_CSS_URI', CONBUSI_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'CONBUSI_DIR_JS_URI' ) ) {
	define( 'CONBUSI_DIR_JS_URI', CONBUSI_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'CONBUSI_DIR_IMGS_URI' ) ) {
	define( 'CONBUSI_DIR_IMGS_URI', CONBUSI_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'CONBUSI_DIR_ICON_IMG_URI' ) ) {
	define( 'CONBUSI_DIR_ICON_IMG_URI', CONBUSI_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'CONBUSI_DIR_PATH' ) ) {
	define( 'CONBUSI_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'CONBUSI_DIR_PATH_INC' ) ) {
	define( 'CONBUSI_DIR_PATH_INC', CONBUSI_DIR_PATH . 'inc/' );
}

//Conbusi Libraries Folder Directory
if ( ! defined( 'CONBUSI_DIR_PATH_LIBS' ) ) {
	define( 'CONBUSI_DIR_PATH_LIBS', CONBUSI_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'CONBUSI_DIR_PATH_CLASSES' ) ) {
	define( 'CONBUSI_DIR_PATH_CLASSES', CONBUSI_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'CONBUSI_DIR_PATH_HOOKS' ) ) {
	define( 'CONBUSI_DIR_PATH_HOOKS', CONBUSI_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function conbusi_admin_script(){
    wp_enqueue_style( 'conbusi-admin', get_template_directory_uri().'/assets/css/conbusi-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'conbusi_admin', get_template_directory_uri().'/assets/js/conbusi-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'conbusi_admin_script' );



/**
 * Include File
 *
 */
require_once( CONBUSI_DIR_PATH_INC . 'conbusi-breadcrumbs.php' );
require_once( CONBUSI_DIR_PATH_INC . 'conbusi-widgets-reg.php' );
require_once( CONBUSI_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( CONBUSI_DIR_PATH_INC . 'post-like.php' );
require_once( CONBUSI_DIR_PATH_INC . 'conbusi-functions.php' );
require_once( CONBUSI_DIR_PATH_INC . 'conbusi-commoncss.php' );
require_once( CONBUSI_DIR_PATH_INC . 'support-functions.php' );
require_once( CONBUSI_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( CONBUSI_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( CONBUSI_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( CONBUSI_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( CONBUSI_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( CONBUSI_DIR_PATH_HOOKS . 'hooks.php' );
require_once( CONBUSI_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( CONBUSI_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( CONBUSI_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Conbusi object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Conbusi = new Conbusi();