<?php

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'SECURITY_COMPANION_VERSION' ) ) {
    define( 'SECURITY_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'SECURITY_COMPANION_DIR_PATH' ) ) {
    define( 'SECURITY_COMPANION_DIR_PATH', SECURITY_DIR_PATH_INC . 'security-companion/' );
}

// Define inc dir path constant
if( ! defined( 'SECURITY_COMPANION_INC_DIR_PATH' ) ) {
    define( 'SECURITY_COMPANION_INC_DIR_PATH', SECURITY_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'SECURITY_COMPANION_SW_DIR_PATH' ) ) {
    define( 'SECURITY_COMPANION_SW_DIR_PATH', SECURITY_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'SECURITY_COMPANION_EW_DIR_PATH' ) ) {
    define( 'SECURITY_COMPANION_EW_DIR_PATH', SECURITY_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'SECURITY_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'SECURITY_COMPANION_DEMO_DIR_PATH', SECURITY_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define demo data dir path constant
if( ! defined( 'SECURITY_COMPANION_DIR_URL' ) ) {
    define( 'SECURITY_COMPANION_DIR_URL', SECURITY_DIR_URI . 'inc/security-companion/' );
}

require_once SECURITY_COMPANION_DIR_PATH . 'security-init.php';
