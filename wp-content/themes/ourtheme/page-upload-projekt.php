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
		background-color:#276d9c;
		border-radius:100px;
		color:white;
		margin-top:5rem;

	}
	/*--baggrundsfarve til header---*/
	.upload .entry-content{
		background-color:#ECE9E5;
	}

	.upload header{
	background-color:#ECE9E5;
	}

	/*--ændret font på p--*/
	.upload p, #wpforms-859, #wpforms-954 {
		font-family:"Roboto",sans-serif;
	}

	/*-- h1 farveændring---*/
	.upload h1.entry-title{
		color:#276d9c;
		font-family:"macho",sans-serif;
	}
	

</style>

<main id="site-content" class="upload">
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
