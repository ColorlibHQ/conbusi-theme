<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'conbusi_preloader', 'conbusi_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'conbusi_header', 'conbusi_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'conbusi_footer', 'conbusi_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'conbusi_wrp_start', 'conbusi_wrp_start_cb', 10 );
	add_action( 'conbusi_wrp_end', 'conbusi_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'conbusi_blog_col_start', 'conbusi_blog_col_start_cb', 10 );
	add_action( 'conbusi_blog_col_end', 'conbusi_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'conbusi_blog_posts_thumb', 'conbusi_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'conbusi_blog_details_wrap_start', 'conbusi_blog_details_wrap_start_cb', 10 );
	add_action( 'conbusi_blog_details_wrap_end', 'conbusi_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'conbusi_blog_posts_title', 'conbusi_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'conbusi_blog_posts_meta', 'conbusi_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'conbusi_blog_posts_excerpt', 'conbusi_blog_posts_excerpt_cb', 10 );
	// add_action( 'conbusi_blog_posts_excerpt', 'conbusi_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'conbusi_blog_posts_info_link', 'conbusi_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'conbusi_blog_posts_content', 'conbusi_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'conbusi_blog_posts_share', 'conbusi_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'conbusi_blog_sidebar', 'conbusi_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'conbusi_blog_single_meta', 'conbusi_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'conbusi_page_content', 'conbusi_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'conbusi_fof', 'conbusi_fof_cb', 10 );

	

?>