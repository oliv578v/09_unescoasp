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

<main id="site-content" class="skolerne"> 
<head> <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css"></head>
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

    <style>

        /* desktop*/
#site-header {
    background-color: #ECE9E5;
}

.skolerne section.elementor-section:nth-child(1) {
  background-color: #ece9e5;
}

.skolerne .header-inner {
  background-color: #ece9e5;
}

.skolerne .section-inner {
  max-width: 1000rem;
}

.skolerne
  .entry-content
  > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
  max-width: 100%;
  width: calc(100% - 0rem);
}

.skolerne .entry-header {
  padding-bottom: 0;
  background-color: #ece9e5;
}

.skolerne .entry-title {
  color: #c41f33;
  text-align: left;
  margin-left: 5rem;
  font-family:"macho",sans-serif;
}

.skolerne .singular .entry-header {
  padding: 0;
  padding-top: 10rem;
}

.skolerne section {
  padding: 0;
}

.skolerne
  .elementor-33
  .elementor-element.elementor-element-feadf5a
  .elementor-heading-title {
  text-align: left;
  margin-left: 2rem;
  margin-bottom: 3rem;
}

.skolerne .elementor-section.elementor-section-boxed > .elementor-container {
  width: 130rem;
  border-color: black;
  padding-bottom: 20rem;
}

.skolerne .elementor-element-024626a > div:nth-child(1) > p:nth-child(2) {
  max-width: 60rem;
  margin-left: 2rem;
  margin-bottom: 4rem;
}

.skolerne section.elementor-section:nth-child(2) > div:nth-child(1) {
  background-color: #ffff;
}

.skolerne section.elementor-section:nth-child(2) {
  background-color: #ece9e5;
  padding-bottom: 30rem;
}

.skolerne section.elementor-section:nth-child(2) h2 {
  background-color: #ece9e5;
  text-align: center;
  font-size: 3rem;
  padding: 1.5rem;
}

.skolerne .entry-content h1,
.entry-content h2,
.entry-content h3 {
  margin: 0rem auto 3rem;
}

.skolerne .footer-nav-widgets-wrapper {
  margin-top: 0;
}

.skolerne .elementor-element-4b1996e > div:nth-child(1) {
  padding-bottom: 27rem;
  text-align: center;
}

.skolerne .elementor-element-48755fe > div:nth-child(1) {
  margin-block: 0.8rem;
  margin-left: 6rem;
}

.skolerne .elementor-element-48755fe > div:nth-child(1) p {
  line-height: 2.5;
}

.skolerne .elementor-element-e2c8337 > div:nth-child(1) > p:nth-child(1) {
  padding-bottom: 5rem;
  text-align: center;
}

.skolerne .elementor-element-3635135 {
  margin-top: 4.8rem;
  background-color: #ece9e5;
  padding-left: 6rem;
}

.skolerne .elementor-element-e2c8337 > div:nth-child(1) > p:nth-child(1) {
  margin-top: 5rem;
  background-color: #ece9e5;
  padding-bottom: 10rem;
}

.skolerne .elementor-element-d9e0396 > div:nth-child(1) > p:nth-child(1) {
  padding-bottom: 32rem;
  text-align: center;
}

.skolerne .elementor-element-6dd696c > div:nth-child(1) > p:nth-child(1) {
  padding-bottom: 10rem;
  background-color: #ece9e5;
  text-align: center;
}

.skolerne .elementor-element-3635135 > div:nth-child(1) > p:nth-child(2) {
  margin-bottom: -0.5rem;
  padding-block: 2.5rem;
}

.skolerne .elementor-element-b1c702c {
  margin-top: 6rem;
}
.skolerne .elementor-element-63ababb > div:nth-child(1) > p:nth-child(1) {
  margin-top: 6rem;
  margin-bottom: 12rem;
  text-align: center;
}

.skolerne .elementor-element-babe2f9 > div:nth-child(1) > p:nth-child(1) {
  margin-top: 6rem;
  margin-bottom: 12rem;
  text-align: center;
}

.skolerne .elementor-33 .elementor-element.elementor-element-b1c702c {
  margin-bottom: 3.5rem;
}

.skolerne .elementor-element-3635135 > div:nth-child(1) p {
  line-height: 2.5;
}

.skolerne .elementor-element-b1c702c > div:nth-child(1) p {
  line-height: 2.5;
  margin-bottom: 1.5rem;
  margin-left: 6rem;
}

.skolerne .elementor-element-6ee1b9d > div:nth-child(1) p {
  line-height: 2.5;
}

.skolerne .elementor-element-69baaee {
  background-color: #ece9e5;
  padding: 4.5rem;
  text-align: center;
}

.skolerne .elementor-element-6ee1b9d {
  background-color: #ece9e5;
  padding-left: 6rem;
}

.skolerne .elementor-element-26fd58d {
  background-color: #ece9e5;
  padding: 4.5rem;
  text-align: center;
}

/* .skolerne .elementor-element-d9e0396 > div:nth-child(1) > p:nth-child(1) {
  margin-bottom: 32rem;
  text-align: center;
}

.skolerne .elementor-element-69baaee {
  padding-bottom: 13.5rem;
} */

/* mobil */

    </style>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
