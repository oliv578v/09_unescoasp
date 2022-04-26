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
	/*--rykket paragraf og h2 ind til venstre--*/
	#post-81 > div.post-inner.thin > div > p:nth-child(2), #post-81 > div.post-inner.thin > div > h2{
		margin-left:2rem;
		max-width:70rem;
	}
	/*--styling til forms---*/
	div.wpforms-container-full .wpforms-form input.wpforms-field-medium, div.wpforms-container-full .wpforms-form select.wpforms-field-medium, div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-medium{
		max-width:100%;
	}
	#wpforms-submit-859{
		background-color:#276d9c;
		border-radius:100px;
		color:white;
	}
	#wpforms-859-field_19{
		background-color:#ECE9E5;
		border:none;
	}
	#wpforms-submit-954{
		margin-left:22rem;
		background-color:#276d9c;
		border-radius:100px;
		color:white;
		margin-top:5rem;

	}
	/*--baggrundsfarve til header---*/
	#upload .entry-content{
		background-color:#ECE9E5;
	}
	#post-81 > header{
	background-color:#ECE9E5;
	}

	/*--ændret font på p--*/
	#upload p, #wpforms-859, #wpforms-954 {
		font-family:"Roboto",sans-serif;
	}
	

</style>

<main id="upload">

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
