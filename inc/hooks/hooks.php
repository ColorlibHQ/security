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
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'security_preloader', 'security_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'security_header', 'security_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'security_footer', 'security_footer_area', 10 );
add_action( 'security_footer', 'security_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'security_wrp_start', 'security_wrp_start_cb', 10 );
add_action( 'security_wrp_end', 'security_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'security_blog_col_start', 'security_blog_col_start_cb', 10 );
add_action( 'security_blog_col_end', 'security_blog_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'security_blog_posts_thumb', 'security_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'security_blog_posts_title', 'security_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'security_blog_posts_meta', 'security_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'security_blog_posts_bottom_meta', 'security_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'security_blog_posts_excerpt', 'security_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'security_blog_posts_content', 'security_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'security_blog_sidebar', 'security_blog_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'security_blog_posts_share', 'security_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'security_blog_single_meta', 'security_blog_single_meta_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'security_page_content', 'security_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'security_fof', 'security_fof_cb', 10 );
