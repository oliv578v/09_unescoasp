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
    /*----h1---*/
    #medlem_tilskud h1.entry-title {
        color: #276D9C;
		font-family:"macho",sans-serif;
    }


</style>

<main id="medlem_tilskud">
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
