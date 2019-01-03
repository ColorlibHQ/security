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

/**
 * Footer Area
 *
 * @Footer
 * @Back To Top Button
 *
 * @Hook security_footer
 *
 * @Hooked  security_footer_area 10
 * @Hooked  security_back_to_top 20 
 *
 */

do_action( 'security_footer' );

wp_footer(); 
?>
</body>
</html>