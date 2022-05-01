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

<<<<<<< HEAD
<main id="site-content">

=======
<main id="site-content" class="ungeamb">
<head> <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css"></head>
>>>>>>> 059eb0170ef5feb3e730f1f9e6692cac3ca6c3fb
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

<<<<<<< HEAD
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
=======
    <style>

        #site-header {
	background-color: #ECE9E5;
}

        .ungeamb .entry-header {
            background-color: #ECE9E5;
        }

        .ungeamb .entry-title {
            color: #c41f33;
            font-family: macho, sans-serif;
            text-align: left;
        }

        .ungeamb .elementor-kit-7 h1 {
            font-family: macho, sans-serif;
        }

        .ungeamb .entry-content > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
  max-width: 1000rem;
  width: calc(100% - 0rem);
}

.ungeamb .elementor-element-c1552ac > div:nth-child(1) > img:nth-child(2) {
    max-width: 103%;
}

.ungeamb .elementor-35 .elementor-element.elementor-element-523d8af {
  width: 33.783%;
  margin-right: auto;
  margin-left: auto;
}

.ungeamb .elementor-element-b2f612d > div:nth-child(1) > h2:nth-child(2) {
    margin-left: 2.5rem;
}

.ungeamb .elementor-element-d7a612d > div:nth-child(1) > h3:nth-child(1) {
    margin-left: 2.5rem;
}

.ungeamb div.elementor-element:nth-child(3) > div:nth-child(1) {
    margin-left: 2.5rem;
}

.ungeamb div.elementor-element:nth-child(4) > div:nth-child(1) > h3:nth-child(1){
    margin-left: 2.5rem;
}

.ungeamb div.elementor-element:nth-child(5) > div:nth-child(1) > p:nth-child(1) {
    margin-left: 2.5rem;
}

.ungeamb .elementor-element-29ad697 > div:nth-child(1) > p:nth-child(1) {
    max-width: 60rem;
    margin-left: auto;
margin-right: auto;
}

.ungeamb .elementor-element-4ceab26 > div:nth-child(1) > h3:nth-child(1) {
    max-width: 60rem;
    margin-left: auto;
margin-right: auto;
}

.ungeamb .elementor-element-4083914 > div:nth-child(1) > img:nth-child(1) {
    margin-left: 5rem;
}

.ungeamb .elementor-35 .elementor-element.elementor-element-c846a80 {
  width: 80%;
  max-width: 80%;
  align-self: end;
  margin-left: auto;
  margin-right: auto;
}

.ungeamb .elementor-element-665ac62 > div:nth-child(1) > h3:nth-child(1){
    max-width: 112rem;
margin-left: auto;
margin-right: auto;
}

.ungeamb .elementor-element-f7f921c > div:nth-child(1) > p:nth-child(1) {
    max-width: 112rem;
margin-left: auto;
margin-right: auto;
}
    </style>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
>>>>>>> 059eb0170ef5feb3e730f1f9e6692cac3ca6c3fb
