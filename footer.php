<?php 
/**
 * @Packge     : Conbusi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook conbusi_footer
         *
         * @Hooked  conbusi_footer_area 
         *
         */

		do_action( 'conbusi_footer' );

	wp_footer(); 
 ?>
</body>
</html>