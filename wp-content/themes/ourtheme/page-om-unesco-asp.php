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

<main id="site-content" class="test4">

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

div.section-inner:nth-child(3) {
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

#site-header {
	background-color: #ECE9E5;
}

section.elementor-section:nth-child(1) {
	background-color: #ECE9E5;
}

.test4 .entry-header {
	background-color: #ECE9E5;
}

.test4 .singular .entry-header {
	background-color: #ECE9E5;
}

section.elementor-section:nth-child(3) {
	background-color: #ECE9E5;
}

@media (max-width: 600px) {
.entry-content > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
  max-width: 1000rem;
  width: calc(100% - 0rem);
} 

.test4 .entry-title {
	color: #c41f33;
	text-align: center;
	font-size: 40px;
}

h2.elementor-heading-title:nth-child(2) {
	text-align: center;
}

.elementor-element.elementor-element-3558f3e .elementor-heading-title {
margin-top: -3rem;	
}

.elementor-element-248486c > div:nth-child(1) > p:nth-child(2) {
	margin-left: auto;
    margin-right: auto;
    width: 24em
}

.elementor-element-321934f > div:nth-child(1) > h2:nth-child(1) {
	text-align: center;
}

.elementor-element-d6bf876 > div:nth-child(1) > p:nth-child(1) {
	margin-left: auto;
    margin-right: auto;
    width: 24em
}

.elementor-element-a5d08f7 > div:nth-child(1) > h2:nth-child(1) {
	width: 12.5em;
	margin-left: auto;
    margin-right: auto;
}

.elementor-element-1de1fa6 > div:nth-child(1) > p:nth-child(1) {
	margin-left: auto;
    margin-right: auto;
    width: 24em
}

.elementor-element-588a9f1 {
	text-align: center;
}

section.elementor-section:nth-child(5) > div:nth-child(1) {
	gap: 5rem;
	margin-inline: 2rem;
}

.elementor-element-bc5b2f0 {
	text-align: center;
}

section.elementor-section:nth-child(5) {
margin-top: -6rem;
}

.elementor-element-b6a8f0e > div:nth-child(1) > h3:nth-child(1), .elementor-element-e588db0 > div:nth-child(1) > h3:nth-child(1), .elementor-element-82bc7f2 > div:nth-child(1) > h3:nth-child(1)  {
	text-align: center;
}

.elementor-element-03b18e1 > div:nth-child(1) > p:nth-child(1), .elementor-element-8197e65 > div:nth-child(1) > p:nth-child(1), .elementor-element-b5845c5 > div:nth-child(1) > p:nth-child(1) {
	margin-left: auto;
    margin-right: auto;
    width: 24em
}


.elementor-element-b2e81e1, .elementor-element-4869f5e, .elementor-element-3792f27 {
	text-align: center;
}

.elementor-element-d6bf876 > div:nth-child(1) > p:nth-child(1) {
	padding-bottom: 3rem;
}

.elementor-element-b5dbe06 > div:nth-child(1) > p:nth-child(1) {
	padding-top: 3rem;
	padding-bottom: 3rem;
	max-width: 24em;
	margin-left: auto;
    margin-right: auto;
}

.elementor-element-03b18e1 > div:nth-child(1) > p:nth-child(1) {
	padding-bottom: 15rem;
}

.elementor-element-8197e65 > div:nth-child(1) > p:nth-child(1) {
	padding-bottom: 15em;
}

.elementor-element-b5845c5 > div:nth-child(1) > p:nth-child(1) {
	padding-bottom: 15em;
}

/* footer*/
.footer-widgets {
	display: table-cell;
    vertical-align: middle
}

.has-normal-font-size, div.widget:nth-child(3) > div:nth-child(1) > ul:nth-child(1), div.widget:nth-child(4) > div:nth-child(1) > ul:nth-child(1) {
	list-style: none;
	font-size: 1.5rem;
}

}

@media (min-width: 700px) {

.entry-content > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
	max-width: 100%;
	width: calc(100% - 0rem);
}

.test4 .entry-header {
	padding-bottom: 0;
}

h2.elementor-heading-title:nth-child(2) {
  text-align: left;
}

    .elementor-column-gap-default > .elementor-column > .elementor-element-populated {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

    .elementor-element-3558f3e {
grid-column: 1/3;
grid-row: 1;
text-align: left;
padding-left: 8rem;
}

.test4 .section-inner {
	width: 1000rem;
}

.elementor-element-248486c {
	grid-column: 1/3;
	grid-row: 1;
	text-align: left;
	margin-top: 12rem;
	padding-left: 8rem;
	max-width: 90rem;
	margin-bottom: 5rem;
}

.elementor-element-1de1fa6 {
	max-width: 55rem;
}

.elementor-element-1de1fa6 > div:nth-child(1) > p:nth-child(1) {
	line-height: 2.5rem;
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

.elementor-element-248486c > div:nth-child(1) > p:nth-child(2) {
	max-width: 100%;
	line-height: 1.8;
}

.test4 .entry-title {
	color: #c41f33;
	text-align: left;
	margin-left: 8.5rem;
}

.test4 .post-inner {
	padding-top: 0;
}

.test4 .singular .entry-header {
	padding: 0;
	padding-top: 10rem;
}

.test4 section {
padding: 0;
}

.elementor-element-d6bf876 {
	grid-column: 1;
	max-width: 100rem;
}

.elementor-element-d6bf876 > div:nth-child(1) > p:nth-child(1) {
	line-height: 1.8;
	margin-bottom: 5rem;
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
	grid-row: 4;
	grid-column: 1/3;
	text-align: center;
	margin-top: 5rem;
	margin-bottom: 10rem;
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
.elementor-element-03b18e1 > div:nth-child(1) > p:nth-child(1) {
	line-height: 2.5rem;
	padding-bottom: 15rem;
	max-width: 40rem;
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

.elementor-element-b5dbe06 {
	grid-column: 1/3;
	text-align: center;
	padding-top: 8rem;
}

section.elementor-section:nth-child(5) > div:nth-child(1) {
	gap: 5rem;
}

.elementor-kit-7 img {
  opacity: 1;
}

section.elementor-section:nth-child(5) > div:nth-child(1) {
	margin-inline: 8rem;
}

.elementor-element-bc5b2f0 > div:nth-child(1) > h2:nth-child(1) {
	margin-inline: 8rem;
}

.elementor-element-8197e65 > div:nth-child(1) > p:nth-child(1) {
	line-height: 2.5rem;
	padding-bottom: 12rem;
	max-width: 40rem;
}

.elementor-element-b5845c5 > div:nth-child(1) > p:nth-child(1) {
	line-height: 2.5rem;
	padding-bottom: 17rem;
	max-width: 40rem;
}

/* footer */

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

.footer-widgets-wrapper {
display: grid;
  grid-template-columns: 1fr;
}

.wp-container-3 > div:nth-child(1) > h2:nth-child(1) {
	font-size: 2rem;
	color: #ffff;
}

.footer-inner {
	width: calc(100% - 0rem);
}

.footer-widgets-outer-wrapper {
	padding: 0;
}

.footer-inner {
	max-width: 1000rem;
}

.wp-image-482 {
	margin-left: 8rem;
	width: 20rem;
	margin-top: 7rem;
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

div.widget:nth-child(4) > div:nth-child(1) > ul:nth-child(1) > li:nth-child(3) > a:nth-child(1) {
	color: #ffff;
}

div.widget:nth-child(4) > div:nth-child(1) > ul:nth-child(1) > li:nth-child(3) > a:nth-child(2) {
	color: #ffff;
}

.has-normal-font-size > li:nth-child(1) {
	font-size: 20px;
}

div.widget:nth-child(3) {
	padding-top: 4rem;
}

div.widget:nth-child(4) {
	padding-top: 4rem;
}

li {
	line-height: 1;
}

div.widget:nth-child(4) > div:nth-child(1) > ul:nth-child(1) > li:nth-child(2) > a:nth-child(1) {
	color: #ffff;
}

}

</style>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>