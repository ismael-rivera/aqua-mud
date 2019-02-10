<?php
/**
 * Template Name: Homepage - Custom
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
get_header(); ?>

<?php
/**
 * lawyer_zone_action_front_page hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_featured_slider -  10
 * @hooked lawyer_zone_front_page -  20
 */
do_action( 'lawyer_zone_action_feature_slider' );
?>
<div class="container">
	<div class="row">
		<div class="col-lg">	
			<div id="content" class="site-content container clearfix">
			          <?php $pageid = get_the_id();
			                $content_post = get_post($pageid);
			                $content = $content_post->post_content;
			                $content = apply_filters('the_content', $content);
			                $content = str_replace(']]>', ']]&gt;', $content);
			                echo $content;
			          ?>      
			</div>
		</div>	
	</div>		
</div>

<?php
get_footer();