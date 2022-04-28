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

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>


<style>

 




.entry-content > *:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
	max-width: 1000rem;
 
}

section {
    padding: 0;
}

 .entry-title {
  color: #5C9945;
  
font-family: macho, sans-serif;

}

.elementor-element-2ecc70db > div:nth-child(1) > h2:nth-child(3) {
font-family: macho, sans-serif;
}

 p {
      margin: 0;
      font-size: 1.5rem;
  }
</style>