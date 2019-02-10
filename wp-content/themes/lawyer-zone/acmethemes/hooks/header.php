<?php
/**
 * Setting global variables for all theme options saved values
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_set_global' ) ) :
    function lawyer_zone_set_global() {
        /*Getting saved values start*/
        $lawyer_zone_saved_theme_options = lawyer_zone_get_theme_options();
        $GLOBALS['lawyer_zone_customizer_all_values'] = $lawyer_zone_saved_theme_options;
        /*Getting saved values end*/
    }
endif;
add_action( 'lawyer_zone_action_before_head', 'lawyer_zone_set_global', 0 );

/**
 * Doctype Declaration
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_doctype' ) ) :
    function lawyer_zone_doctype() {
        ?>
        <!DOCTYPE html><html <?php language_attributes(); ?>>
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before_head', 'lawyer_zone_doctype', 10 );

/**
 * Code inside head tage but before wp_head funtion
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_before_wp_head' ) ) :

    function lawyer_zone_before_wp_head() {
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="//gmpg.org/xfn/11">
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before_wp_head', 'lawyer_zone_before_wp_head', 10 );

/**
 * Add body class
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array
 *
 */
if ( ! function_exists( 'lawyer_zone_body_class' ) ) :

    function lawyer_zone_body_class( $lawyer_zone_body_classes ) {

        global $lawyer_zone_customizer_all_values;
        $lawyer_zone_enable_animation = $lawyer_zone_customizer_all_values['lawyer-zone-enable-animation'];
        $lawyer_zone_enable_transparent = $lawyer_zone_customizer_all_values['lawyer-zone-enable-transparent'];
    
        /*wow animation*/
        if( 1 != $lawyer_zone_enable_animation ){
            $lawyer_zone_body_classes[] = 'acme-animate';
        }
        $lawyer_zone_body_classes[] = lawyer_zone_sidebar_selection();

        $lawyer_zone_enable_feature = $lawyer_zone_customizer_all_values['lawyer-zone-enable-feature'];
         if( is_front_page() ) {
             if( 1 == $lawyer_zone_enable_feature && !is_home() ){
                 if( 1 == $lawyer_zone_enable_transparent  ){
                     $lawyer_zone_body_classes[] = 'header-transparent';
                     $lawyer_zone_enable_header_top = $lawyer_zone_customizer_all_values['lawyer-zone-enable-header-top'];
                     if( 1 == $lawyer_zone_enable_header_top  ){
                         $lawyer_zone_body_classes[] = 'header-enable-top';
                     }
                 }
             }
         }else{
                 if( 1 == $lawyer_zone_enable_transparent  ){
                     $lawyer_zone_body_classes[] = 'header-transparent';
                     $lawyer_zone_enable_header_top = $lawyer_zone_customizer_all_values['lawyer-zone-enable-header-top'];
                     if( 1 == $lawyer_zone_enable_header_top  ){
                         $lawyer_zone_body_classes[] = 'header-enable-top';
                     }
                 }
             }

         if ( 1 != $lawyer_zone_enable_feature && is_front_page()){
            $lawyer_zone_body_classes[] = 'at-front-no-feature';
         }
        return $lawyer_zone_body_classes;
    }
endif;
add_action( 'body_class', 'lawyer_zone_body_class', 10, 1 );

/**
 * Start site div
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_site_start' ) ) :

    function lawyer_zone_site_start() {
        ?>
        <div class="site" id="page">
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before', 'lawyer_zone_site_start', 20 );

/**
 * Skip to content
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_skip_to_content' ) ) :

    function lawyer_zone_skip_to_content() {
        ?>
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lawyer-zone' ); ?></a>
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before_header', 'lawyer_zone_skip_to_content', 10 );

/**
 * Main header
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_header' ) ) :
    function lawyer_zone_header() { ?>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Expand at md</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <?php
            wp_nav_menu( array(
                'theme_location'  => 'ish-custom',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));
        ?>
      </div>
    </div>  
    </nav>
<?php
    }
endif;
add_action( 'lawyer_zone_action_header', 'lawyer_zone_header', 10 );