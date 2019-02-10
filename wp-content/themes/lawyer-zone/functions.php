<?php
/**
 * Lawyer Zone functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */




/**
 * Require init.
 */
require trailingslashit( get_template_directory() ).'acmethemes/init.php';



    // Load the main stylesheet
    //wp_enqueue_style( 'my-styles', get_stylesheet_uri() );
	//wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css' );

//enable classic editor for wordpress//
add_filter('use_block_editor_for_post','__return_false');


// Register Custom Navigation Walker
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

//Register New Custom Sidebar
//add_action( 'widgets_init', 'new_custom_sidebar_init' );

//Register new Sidebar
// function new_custom_sidebar_init() {
//     $args = array(
// 	'name'          => __( 'Homepage Sidebar', 'homepage_sidebar' ),
// 	'id'            => 'homepage-sidebar',    // ID should be LOWERCASE  ! ! !
// 	'description'   => 'A custom sidebar for a custom page',
//         'class'         => 'sb_customizado',
// 	'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 	'after_widget'  => '</li>',
// 	'before_title'  => '<h2 class="widgettitle">',
// 	'after_title'   => '</h2>' ); 

// 	 register_sidebar( $args );
// }	 

// add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 



/**
 * Remove Admin Menu Link to Theme Customizer
 */
add_action( 'admin_menu', function () {
    global $submenu;

    if ( isset( $submenu[ 'themes.php' ] ) ) {
        foreach ( $submenu[ 'themes.php' ] as $index => $menu_item ) {
            if ( in_array( array( 'Customize', 'Customizer', 'customize' ), $menu_item ) ) {
                unset( $submenu[ 'themes.php' ][ $index ] );
            }
        }
    }
});


