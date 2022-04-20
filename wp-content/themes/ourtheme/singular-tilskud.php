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

<main id="site-content">
	øg om tilskud til din skoles projekt</h2>
<p>Der kan gives tilskud til aktiviteter – skolebaserede såvel som netværksorienterede – der kan støtte og udvikle ASP-skolernes arbejde med UNESCOs værdier og målsætningen for ASP.</p>
<h2>Kriterier for bevilling af midler fra ASP projektpuljen.</h2>
<p>Der lægges vægt på at aktiviteterne involverer så mange elever, fag og lærere som muligt, og at der er en idé og vilje til aktiv spredning af resultater og eksempler på god praksis.
Det forventes som hovedregel, at de ansøgende skoler er indstillet på medfinansiering af de beskrevne aktiviteter.</p>
<h3>Eksempler på aktiviteter, der kunne understøttes</h3>
<p>
<li>Tilskud til besøg i Danmark af partnere og ASP samarbejdslande.</li>
<li>Tilskud til danske læreres besøg hos samarbejdspartnere på skoler i Afrika, Caribien, Baltikum og Mellemøsten. Der forventes klar plan for samarbejdet og hvordan det kan nyttiggøres i forhold til ASP-undervisningen.</li>
<li>Tilskud til indkøb af inspirationsmateriale til brug for lærere i arbejdet med ASP og de forskellige netværksprojekter.</li>
<li>
Tilskud til nøglepersoners udvikling af kurser, studieture o.l. til gavn og inspiration for hele netværket.</li>
<li>Tilskud til elevgruppers deltagelse i ASP relaterede udvekslinger, konferencer, kurser og workshops.</li>
</p>
<a href="">Hent ansøgningsskema</a>
<a href="">Se årshjul</a>


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
