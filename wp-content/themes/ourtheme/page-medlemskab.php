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
#post-74 > div.post-inner.thin > div{
    background-color:#ECE9E5;
}

#medlemskab .entry-content > *:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide){
    margin-left:3.5rem;
    max-width:63rem;
}
#medlemskab h1.entry-title{
    color: #276D9C;
    text-align: left;
    margin-left: 3.5rem;
    font-size: 6rem;
}

#medlemskab p{
    font-family:"Roboto",sans-serif;
}

#wpforms-878{
    margin-left:1rem;
    font-family:"Roboto",sans-serif;
}
#wpforms-submit-878{
    background-color: #276D9C;
    color:white;
    border-radius:100px;
    width:145px;

}


    /*formindsker afstanden mellem sektionerne*/
   /* #post-74 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-4bdbf05.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div > div.elementor-element.elementor-element-e9f1d91.elementor-widget.elementor-widget-heading > div > h2{
         margin-top:-10rem;
         background-color:#ECE9E5;
    }
    #post-74 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-6ddf223.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div{
        margin-top:-15rem;
        background-color:#ECE9E5;
    }
    #post-74 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-b17c876.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div{
        margin-top:-15rem;
        background-color:#ECE9E5;
    }
    #post-74 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-5b2f9ef.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div{
        margin-top:-15rem;
        background-color:#ECE9E5;
    }
    #post-74 > div.post-inner.thin > div > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-c3379b2.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div{
        margin-top:-15rem;
        background-color:#ECE9E5;
    }*/
    
</style>

<main id="medlemskab">

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
