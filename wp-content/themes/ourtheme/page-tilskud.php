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
	/*---Rykker content til venstre og ændrer max-width så indholdet kan fylde mere på siden---*/
	#tilskud p{
		margin-left:2rem;
		max-width:70rem;
		font-size:2rem;
	}
	#post-76 > div.post-inner.thin > div > ul{
		margin-left:2rem;
	}
	#post-76 > div.post-inner.thin > div > div.wp-container-3.wp-block-buttons, #post-76 > div.post-inner.thin > div > div.wp-container-2.wp-block-buttons{
		margin-left:2rem;
	}

/*-----ændre h2 og h3 størrelse samt rykker overskrifter til venstre---*/
#post-76 > header > div > h1{
	color:#276D9C;
	text-align:left;
}
	#post-76 > div.post-inner.thin > div > h2:nth-child(1), #post-76 > div.post-inner.thin > div > h2:nth-child(3){
		font-size:29px;
		margin-left:2rem
	}
	#post-76 > div.post-inner.thin > div > h3{
		font-size:19px;
		margin-left:2rem
	}

	
</style>

<main id="tilskud">

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
