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

    /* .elementor-column-gap-default > .elementor-column > .elementor-element-populated {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
} */

    .elementor-element-3558f3e > div:nth-child(1) {
grid-column: 1/3;
grid-row: 1;
}

.elementor-element-248486c > div:nth-child(1) > p:nth-child(2) {
	grid-column: 1/3;
	grid-row: 1;
}

.elementor-element-85566b3 {
	grid-row: 2;
	grid-column: 1;
}
</style>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>