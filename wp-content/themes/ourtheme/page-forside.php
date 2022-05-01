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
<style>
#post-9 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-52b367fb.elementor-section-height-min-height.elementor-section-content-middle.elementor-section-items-top.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default > div.elementor-container.elementor-column-gap-default > div > div > div > div > h2{
    font-family:"macho",sans-serif;
}
</style>

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
