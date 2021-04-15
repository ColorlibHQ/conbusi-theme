<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

	//  Call Header
	get_header();

	/**
	 * 404 page
	 * @Hook conbusi_fof
	 * @Hooked conbusi_fof_cb
	 *
	 */

	do_action( 'conbusi_fof' );

	 // Call Footer
	 get_footer();
?>