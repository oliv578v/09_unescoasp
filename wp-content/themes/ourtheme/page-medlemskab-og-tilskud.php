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
    h1.entry-title {
        color: #276D9C;
    }
    /*---afstand mellem h1 og første h2---*/
    #post-31 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-b6ffd2e.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div{
        margin-top:-10rem;
    }
    /*---knapper----*/
    #post-31 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-43226f9.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-3021d64 > div > div.elementor-element.elementor-element-920a142.elementor-align-center.elementor-widget.elementor-widget-button > div > div > a{
        border-radius:32px;
    }
    #post-31 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-97f938b.elementor-section-full_width.elementor-section-stretched.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-51cb687 > div > div.elementor-element.elementor-element-ae0f58f.elementor-align-center.elementor-widget.elementor-widget-button > div > div > a{
        border-radius:32px;
    }

    /*---sections---*/
    #post-31 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-97f938b.elementor-section-full_width.elementor-section-stretched.elementor-section-height-default.elementor-section-height-default, #post-31 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-43226f9.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
        background-color:
    }
</style>

<main id="site-content">

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
