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
    #post-85 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-e5b7d8c.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default{
        border:solid 2px #276d9c;
    }
	.ressourcebank h1.entry-title{
		color:#276d9c;
		font-family:"macho",sans-serif;
	}

</style>

<main id="site-content" class="ressourcebank">
	 <head> <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css"></head>

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
