<?php
/**
 * @Packge     : Security
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

function security_widgets_init() {
    // sidebar widgets register
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'security' ),
            'id'            => 'security-post-sidebar',
            'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="title">',
            'after_title'   => '</h4>',
        )
    );
    
    // footer widgets register
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer One', 'security' ),
            'id'            => 'footer-1',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Two', 'security' ),
            'id'            => 'footer-2',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Three', 'security' ),
            'id'            => 'footer-3',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        )
    ); 
    
}
add_action( 'widgets_init', 'security_widgets_init' );
