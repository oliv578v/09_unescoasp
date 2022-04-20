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
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

section.elementor-section:nth-child(1) {
	background-color: #ECE9E5;
}

.entry-content > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
	max-width: 100%;
	width: calc(100% - 0rem);
}

    .elementor-column-gap-default > .elementor-column > .elementor-element-populated {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr;
}

    .elementor-element-3558f3e {
grid-column: 1/3;
grid-row: 1;
text-align: center;
}

.elementor-element-248486c {
	grid-column: 1/3;
	grid-row: 1;
	text-align: center;
	margin-top: 15rem;
}

.elementor-element-85566b3 {
	grid-row: 2/1;
	grid-column: 1;
	margin-top: 30rem;
}

.elementor-element-48e8061 {
	grid-column: 2;
	grid-row: 2/1;
	margin-top: 30rem;
}

#site-header {
	background-color: #ECE9E5;
}

.entry-header {
	background-color: #ECE9E5;
}

.post-inner {
	padding-top: 0;
}

.singular .entry-header {
	padding: 0;
	padding-top: 10rem;
}

.singular .entry-header {
	background-color: #ECE9E5;
}

section {
padding: 0;
}

.elementor-element-d6bf876 {
	grid-column: 1;
}

.elementor-element-a1a18ca {
	grid-column: 1;
}

section.elementor-section:nth-child(2) > div:nth-child(1) {
	max-width: 100%;
padding-left: 8rem;
}

.elementor-element-a1a18ca > div:nth-child(1) > img:nth-child(1) {
	max-width: 100%;
}

</style>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>