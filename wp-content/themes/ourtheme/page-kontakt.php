<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" class="test3">

	<?php
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	}

	?>

<style>

 

body:not(.overlay-header) .primary-menu > li > a, body:not(.overlay-header) .primary-menu > li > .icon, .modal-menu a, .footer-menu a, .footer-widgets a, #site-footer .wp-block-button.is-style-outline, .wp-block-pullquote::before, .singular:not(.overlay-header) .entry-header a, .archive-header a, .header-footer-group .color-accent, .header-footer-group .color-accent-hover:hover {
  color: black;
  font-size: 16px
}

  
 #site-header, .singular .entry-header, .entry-content   {
     background-color: #ECE9E4; 
 }

    

.entry-content > *:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
	max-width: 1000rem;
 
}

section {
    padding: 0;
}

 .entry-title {
  color: #5C9945;

}

 p {
      margin: 0;
  }
</style>