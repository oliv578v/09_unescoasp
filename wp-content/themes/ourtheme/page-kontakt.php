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
<header>
<link rel="stylesheet" href="https://use.typekit.net/dgu3gdk.css">

</header>


<main id="site-content" class="kontakt">

	<?php
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	}

	?>

	<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>


<style>


/* mit */
 

body {
	text-align: center;
}

#post-11 {
	text-align: center;
}
section {
    padding: 0;
	text-align: center; 
}

 .entry-title {
  color: #5C9945;
font-family: macho, sans-serif;
font-size: 6rem;
text-align: center;
}

h1.entry-title, h2.entry-title {
  margin-left: 0;
}


/* mit */




/* footer */

button.toggle:nth-child(3) > span:nth-child(1) > span:nth-child(2) {
  display: none;
}

.mobile-search-toggle > span:nth-child(1) > span:nth-child(2) {
  display: none;
}

.copyright {
  display: none;
}

.copyright > span:nth-child(1) > a:nth-child(1) {
  display: none;
}

.footer-top {
  display: none;
}

#site-footer {
  display: none;
}

.footer-widgets-outer-wrapper {
  border-bottom: none;
}

div.section-inner:nth-child(3) {
  display: none;
}

div.widget:nth-child(4)
  > div:nth-child(1)
  > ul:nth-child(1)
  > li:nth-child(3)
  > a:nth-child(1) {
  color: #ffff;
}

div.widget:nth-child(4)
  > div:nth-child(1)
  > ul:nth-child(1)
  > li:nth-child(3)
  > a:nth-child(2) {
  color: #ffff;
}

.wp-container-3 > div:nth-child(1) > h2:nth-child(1) {
  font-size: 2rem;
  color: #ffff;
}

div.widget:nth-child(4)
  > div:nth-child(1)
  > ul:nth-child(1)
  > li:nth-child(2)
  > a:nth-child(1) {
  color: #ffff;
}

@media (max-width: 600px) {
  .footer-nav-widgets-wrapper {
    background-color: #c41f33;
    color: #ffff;
  }

  .footer-widgets {
    display: table-cell;
    vertical-align: middle;
  }

  .has-normal-font-size,
  div.widget:nth-child(3) > div:nth-child(1) > ul:nth-child(1),
  div.widget:nth-child(4) > div:nth-child(1) > ul:nth-child(1) {
    list-style: none;
    font-size: 1.5rem;
    max-width: 40rem;
    width: 100%;
    padding-left: 12rem;
    margin-right: auto;
    padding-bottom: 2rem;
  }

  [class*="__inner-container"]
    > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
    list-style: none;
    font-size: 1.5rem;
    max-width: 40rem;
    width: 100%;
    padding-left: 12rem;
    margin-right: auto;
    padding-bottom: 2rem;
  }

  ul,
  ol {
    margin: 0;
  }

  .wp-image-1177 {
    margin-left: 4rem;
    width: 20rem;
    margin-top: 7rem;
  }

  .wp-block-image:not(.is-style-rounded) > a,
  .wp-block-image:not(.is-style-rounded) img {
    margin-left: -1rem;
  }

  div.widget:nth-child(4)
    > div:nth-child(1)
    > ul:nth-child(1)
    > li:nth-child(3)
    > a:nth-child(1) {
    color: #ffff;
  }

  div.widget:nth-child(4)
    > div:nth-child(1)
    > ul:nth-child(1)
    > li:nth-child(3)
    > a:nth-child(2) {
    color: #ffff;
  }

  .wp-container-3 > div:nth-child(1) > h2:nth-child(1) {
    font-size: 2rem;
    color: #ffff;
  }

  .has-normal-font-size > li:nth-child(1) {
    font-size: 2rem;
  }

  div.widget:nth-child(4)
    > div:nth-child(1)
    > ul:nth-child(1)
    > li:nth-child(2)
    > a:nth-child(1) {
    color: #ffff;
  }

  .has-normal-font-size > li:nth-child(1) {
    width: 100%;
  }
}

@media (min-width: 600px) {
  .footer-widgets {
    width: 100%;
    display: flex;
    margin-left: 0;
    background-color: #c41f33;
    color: #ffff;
    gap: 15rem;
    padding-right: 5rem;
    line-height: 0.5rem;
  }

  [class*="__inner-container"]
    > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
    list-style: none;
    font-size: 1.5rem;
    max-width: 100%;
    width: 100%;
    padding-left: 0rem;
    margin-right: 0;
    padding-bottom: 0rem;
    padding-top: 2rem;
  }

  .has-normal-font-size,
  div.widget:nth-child(3) > div:nth-child(1) > ul:nth-child(1),
  div.widget:nth-child(4) > div:nth-child(1) > ul:nth-child(1) {
    list-style: none;
    font-size: 1.5rem;
    max-width: 100%;
    width: 100%;
    padding-left: 0rem;
    margin-right: 0;
    padding-bottom: 0rem;
  }

  .footer-widgets-wrapper {
    display: grid;
    grid-template-columns: 1fr;
  }

  .footer-inner {
    width: calc(100% - 0rem);
    max-width: 100%;
  }

  .footer-widgets-outer-wrapper {
    padding: 0;
  }

  .wp-image-1177 {
    margin-left: 8rem;
    width: 20rem;
    margin-top: 3rem;
  }

  .wp-block-image:not(.is-style-rounded) > a,
  .wp-block-image:not(.is-style-rounded) img {
    margin-left: 12rem;
    margin-top: 3rem;
  }

  .wp-container-3 > div:nth-child(1) > ul:nth-child(1) {
    list-style: none;
    font-size: 1.5rem;
  }

  div.widget:nth-child(3) > div:nth-child(1) > ul:nth-child(1) {
    list-style: none;
    font-size: 1.5rem;
  }

  div.widget:nth-child(4) > div:nth-child(1) > ul:nth-child(1) {
    list-style: none;
    font-size: 1.5rem;
  }

  div.widget:nth-child(2) {
    margin-top: 1rem;
  }

  .widget {
    margin-top: 10rem;
  }

  .has-normal-font-size > li:nth-child(1) {
    font-size: 20px;
  }

  div.widget:nth-child(3) {
    padding-top: 6rem;
  }

  div.widget:nth-child(4) {
    padding-top: 6rem;
  }

  li {
    line-height: 1;
  }

  div.widget:nth-child(4)
    > div:nth-child(1)
    > ul:nth-child(1)
    > li:nth-child(2)
    > a:nth-child(1) {
    color: #ffff;
  }
  .has-normal-font-size > li:nth-child(1) {
    width: 100%;
  }

  .reduced-spacing.footer-top-visible .footer-nav-widgets-wrapper,
  .reduced-spacing.footer-top-hidden #site-footer {
    border-top-width: 0rem;
  }

  .footer-top-visible .footer-nav-widgets-wrapper,
  .footer-top-hidden #site-footer {
    margin-top: 0rem;
  }

  .test4 .footer-widgets-outer-wrapper {
    margin-top: 10rem;
  }
}

/* footer */




</style>