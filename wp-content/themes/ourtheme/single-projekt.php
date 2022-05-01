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
  font-size:6rem;
  margin-left:3rem;
  font-family:"macho",sans-serif;
}
h1.globalt-medborgerskab{
  color:#c41f33;
  font-size:6rem;
  margin-left:3rem;
  font-family:"macho",sans-serif;
}
h1.verdensmal{
  color:#276D9C;
  font-size:6rem;
  margin-left:3rem;
  font-family:"macho",sans-serif;
}
#single_projekt h2{
  text-align:center;
}

@media (min-width:700px) {
#about {
  display:grid;
  grid-template-columns:1fr 1fr;
  padding:5rem;
}

.lang_beskriv{
  margin-left:200px;
  margin-right:200px;
  padding:100px;
}
}


@media (max-width:900px){
.lang_beskriv{
 margin-left: 3rem;
 margin-right:3rem;
 padding:2rem;
}
}
#about2 {
  background-color:#ECE9E5;
}
</style>
 <?php the_content(); ?>



<main id="single_projekt">
   <head> <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css"></head>
	<article class="single_projekt">
            <h1></h1>
            <section id="about">
            <div class="col_left">
            <p class="omrade"></p>
            <p class="niveau"></p>
            <p class="skole_navn"></p>
			<p class="kontakt_info"></p>
      <p class="verdensmal"></p>
      </div>
      <div class="col_right">
      <img src="" alt="" class="picture">
      </div>
      </section>
      <section id="about2">
      <h2>Projektet</h2>
            <p class="lang_beskriv"></p>
            </section>
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
        document.querySelector(".skole_navn").textContent = "Skolenavn: " +  projekt.skole_navn;
        document.querySelector(".omrade").textContent = "Fokus: " + projekt.fagomrade;
        document.querySelector(".niveau").textContent = "Uddannelsestrin: " + projekt.niveau;
        document.querySelector(".lang_beskriv").textContent = projekt.lang_beskrivelse;
        document.querySelector(".kontakt_info").textContent = "Kontakt: " + projekt.kontakt;
        document.querySelector(".picture").src = projekt.billede.guid;
        document.querySelector(".verdensmal").textContent="Verdensmål: "  + projekt.verdensmal;

		//find kategori der passer til artiklen og tilføjer class. Tjekker den første (og i dette tilfælde eneste) kategori for det enkelte projekt//
            const category = categories.find((category)=>category.id==projekt.categories[0]);
            const categoryCssClass = category.slug
            document.querySelector("h1").classList.add(categoryCssClass)
      }
      hentData()
    </script>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
