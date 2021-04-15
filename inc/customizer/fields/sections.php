<?php 
/**
 * @Packge     : Conbusi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'conbusi_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'conbusi' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'conbusi_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'conbusi_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'conbusi_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'conbusi_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'conbusi_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'conbusi_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'conbusi_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'conbusi_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'conbusi' ),
            'panel'    => 'conbusi_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>