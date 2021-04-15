<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Conbusi
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$conbusi_reservation_title     = !empty( conbusi_opt( 'conbusi_reservation_title' ) ) ? conbusi_opt( 'conbusi_reservation_title' ) : '';
	$conbusi_reservation_sub_title = !empty( conbusi_opt( 'conbusi_reservation_sub_title' ) ) ? conbusi_opt( 'conbusi_reservation_sub_title' ) : '';
	$conbusi_reservation_btn_text  = !empty( conbusi_opt( 'conbusi_reservation_btn_text' ) ) ? conbusi_opt( 'conbusi_reservation_btn_text' ) : '';
	$conbusi_reservation_btn_url	  = !empty( conbusi_opt( 'conbusi_reservation_btn_url' ) ) ? conbusi_opt( 'conbusi_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $conbusi_reservation_title )?></h3>
			<p><?php echo esc_html( $conbusi_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $conbusi_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $conbusi_reservation_btn_text )?></a>
		</div>
	</div>