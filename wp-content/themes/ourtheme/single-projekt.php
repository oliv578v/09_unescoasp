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
h1.baeredygtig-udvikling {
  color:#5C9945;
}
h1.globalt-medborgerskab{
  color:#c41f33;
}
h1.verdensmal{
  color:#276D9C;
}
#single_projekt > article{
  background-color:#ECE9E5;
}


</style>



<main id="single_projekt">
	<article class="single_projekt">
            <h1></h1>
            <h2 class="skole_navn"></h2>
			<h3 class="kontakt_info"></h3>
            <p class="lang_beskriv"></p>
          </article>

</main><!-- #site-content -->
   <script>

let categories;
const caturl = "https://allthelin.dk/kea/09_CMS/09_unescoasp/wp-json/wp/v2/categories";

      let projekt;
      const url = "https://allthelin.dk/kea/09_CMS/09_unescoasp/wp-json/wp/v2/projekt/"+<?php echo get_the_ID() ?>


      //funktion der henter JSON data
      async function hentData() {
        //sæt id fra url-parametrene ind i kald til restdb og modtag kun en post.
        const data = await fetch(url);
        const catdata = await fetch(caturl)
        projekt = await data.json();
        categories = await catdata.json();
        console.log(projekt)
        visProjekter();
      }

      //tilføj tekst og billede fra json til html ved at vælge de forskellige classes og tags
      function visProjekter() {
        document.querySelector("h1").textContent =
          projekt.title.rendered;
        document.querySelector("h2").textContent = projekt.skole_navn;
        document.querySelector(".lang_beskriv").textContent = projekt.lang_beskrivelse;
        document.querySelector(".kontakt_info").textContent = "Kontakt: " + projekt.kontakt;

		//find kategori der passer til artiklen og tilføjer class. Tjekker den første (og i dette tilfælde eneste) kategori for det enkelte projekt//
            const category = categories.find((category)=>category.id==projekt.categories[0]);
            const categoryCssClass = category.slug
            document.querySelector("h1").classList.add(categoryCssClass)
      }
      hentData()
    </script>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
