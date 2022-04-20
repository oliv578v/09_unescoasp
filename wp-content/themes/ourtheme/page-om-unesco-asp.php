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
margin-bottom: 10rem;
}

.elementor-element-1de1fa6 {
	grid-column: 1;
}

.elementor-element-4181393 {
	grid-column: 2;
}

.elementor-element-588a9f1 {
	grid-row: 3;
	grid-column: 1/3;
	text-align: center;
	margin-top: 10rem;
}

section.elementor-section:nth-child(3) {
	background-color: #ECE9E5;
}

.elementor-element-e588db0 {
	grid-column: 1/3;
}

.elementor-element-8197e65 {
	grid-column: 1/3;
}

.elementor-element-4869f5e {
	text-align: center;
	grid-column: 1/3;
}

.elementor-element-b6a8f0e {
	grid-column: 1/3;
}

.elementor-element-03b18e1 {
	grid-column: 1/3;
}

.elementor-element-b2e81e1 {
	grid-column: 1/3;
	text-align: center;
}

.elementor-element-82bc7f2 {
	grid-column: 1/3;
}

.elementor-element-b5845c5  {
	grid-column: 1/3;
}

.elementor-element-3792f27 {
	grid-column: 1/3;
	text-align: center;
}

div.elementor-col-33:nth-child(1) {
	margin-right: 5rem;
}

div.elementor-column:nth-child(2) {
	margin-right: 5rem;
}

div.elementor-column:nth-child(3) {
	margin-right: 5rem;
}

div.section-inner:nth-child(3) {
	display: none;
}

</style>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>