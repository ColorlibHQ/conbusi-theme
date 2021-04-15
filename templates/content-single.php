<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Conbusi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

?>
<!-- Post Item Start -->
<div id="<?php the_ID(); ?>" <?php post_class('single-post-area col-12 blog-post-details'); ?>>
	<div class="single-blog">
		<?php 
		/**
		 * Blog Post thumbnail
		 * @Hook  conbusi_blog_posts_thumb
		 *
		 * @Hooked conbusi_blog_posts_thumb_cb
		 * 
		 *
		 */
		do_action( 'conbusi_blog_posts_thumb' );

		/**
		 * 
		 * Blog details wrapper start hook function.
		 * column end.
		 *
		 * Hook conbusi_blog_details_wrap_start
		 *
		 * @Hooked conbusi_blog_details_wrap_start_cb
		 *  
		 */
		do_action( 'conbusi_blog_details_wrap_start' );
		
		/**
		 * Blog Post Meta
		 * @Hook  conbusi_blog_posts_meta
		 *
		 * @Hooked conbusi_blog_posts_meta_cb
		 * 
		 *
		 */
		// do_action( 'conbusi_blog_posts_meta' );

		/**
		 * Blog Post title
		 * @Hook  conbusi_blog_posts_title
		 *
		 * @Hooked conbusi_blog_posts_title_cb
		 * 
		 *
		 */
		do_action( 'conbusi_blog_posts_title' );		

		/**
		 * Blog posts info links hook function.
		 * @Hook  conbusi_blog_posts_info_link
		 *
		 * @Hooked conbusi_blog_posts_info_link_cb
		 * 
		 *
		 */
		do_action( 'conbusi_blog_posts_info_link' );

		/**
		 * 
		 * Blog details wrapper end hook function.
		 * column end.
		 *
		 * Hook conbusi_blog_details_wrap_end
		 *
		 * @Hooked conbusi_blog_details_wrap_end_cb
		 *  
		 */
		do_action( 'conbusi_blog_details_wrap_end' );
		
		/**
		 * Blog single page content 
		 * Post social share
		 * @Hook  conbusi_blog_posts_content
		 *
		 * @Hooked conbusi_blog_posts_content_cb
		 * 
		 *
		 */
		do_action( 'conbusi_blog_posts_content' );
		
		/**
		 * Blog post share content
		 * Post social share
		 * @Hook  conbusi_blog_posts_share
		 *
		 * @Hooked conbusi_blog_posts_share_cb
		 * 
		 *
		 */
		do_action( 'conbusi_blog_posts_share' );

		?>   
	</div>
	<?php 
	do_action('conbusi_blog_single_meta');
	// comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	
	?>  
</div>               