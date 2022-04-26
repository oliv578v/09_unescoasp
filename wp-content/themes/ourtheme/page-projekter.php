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
    #post-29 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-078ed11.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div > div.elementor-element.elementor-element-033ab90.elementor-widget.elementor-widget-heading{
        margin-top:-10rem;
    }
    #post-29 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-a3eb120.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default{
        margin-top:-6rem;
        background-color:#ECE9E5;
    }
    #post-29 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-078ed11.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default{
        background-color:#ECE9E5;
    }
    #projekter h1.entry-title{
        text-align:left;
        color:#c41f33;
    }

</style>

<main id="projekter">

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
