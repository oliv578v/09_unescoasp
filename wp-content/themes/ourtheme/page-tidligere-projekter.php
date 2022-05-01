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
/*----section---*/
#tidligere {
  background-color:#ECE9E5;
}

/*---headers---*/

h1.heading1_tidligere{
color:#276D9C;
font-family:"macho",sans-serif;
margin-left:8rem;
margin-top:-3rem;
}
h2.heading2_tidligere{
  font-size:3rem;
  margin-top:-1rem;
  margin-left:8rem;
}
h3.heading3_tidligere{
  font-size:2rem;
  margin-left:8rem;
}

h3.name{
  font-size:2rem;
  color:white;
  margin:1rem;
}

.p_tidligere{
  margin-left:8rem;
}
/*---grid til projekt opsætning---*/

@media (min-width:800px){
  .liste {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 7rem;
  padding:3rem;
  }
}
/*---article som indeholder projekt---*/

  .tidligere article {
  margin-bottom: 5px;
  border: solid 0.5px darkgrey;
  text-align: left;
  margin-top:2rem;
  cursor:pointer;
}
.tidligere article:hover{
  transform: scale(102%);
  transition: 0.3s;
}

/*----nav med filtreringsknapper---*/
@media (max-width:1137px){
#filtrering{
  display:grid;
  gap:10px;
  width:225px;
  margin-left:16rem;
}
}

@media (min-width:1137px){
#filtrering {
  display: flex;
  margin-left: 17rem;
  gap:10px;
  background-color:#ECE9E5;
}
}
#filtrering button{
  border-radius: 50px;
  background-color: #276D9C;
}

#filtrering button:focus{
  background-color:#ECE9E5;
  color:#276D9C;
  border:3px #276D9C solid;
  text-decoration:none;
}
/*---border rundt om fagområde og niveau---*/
.subject_level {
    background-color:white;
}

/*----img---*/
#tidligere.picture{
  max-width:100%;
  height:auto;
  background-color:white;
}
/*---artikel baggrundsfarver--*/

.baeredygtig-udvikling {
  background-color:#5C9945;
}
.globalt-medborgerskab{
  background-color:#c41f33;
}
.verdensmal{
  background-color:#276D9C;
}
/*---ændre tekstfarve---*/
.kort_beskriv, .verdensmal_tekst {
  color:white;
  margin:1rem;
}

img.wp-image-1177{
background-color:#c41f33;
}







</style>
<header>
<link rel="stylesheet" href="https://use.typekit.net/dgu3gdk.css">
</header>
<section id="tidligere">
<h1 class="heading1_tidligere">Tidligere projekter</h1>
<h2 class="heading2_tidligere">Find inspiration til et projekt</h2>
<p class="p_tidligere">På siden findes projekter indsendt af danske UNESCO verdensmålsskoler. Projekterne er alle med udgangspunkt i FNs 17 verdensmål og kan bruges som inspiration og motivation samt udgøre grundlaget for eksempelvis skoleprojekter, undersøgelser eller lignende.</p>
<nav id="filtrering"><button data-projekt="all">Alle</button></nav>
</section>
<header><h3 class="heading3_tidligere">Alle</h3></header>
<main id="site-content" class="tidligere">
   <head> <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css"></head>
<section class="liste"></section>
</main>
<template>
          <article>
            <img src="" alt="" class="picture" />
            <p class="subject_level"></p>
            <h3 class="name"></h3>
            <p class="kort_beskriv"></p>
            <p class="verdensmal_tekst"></p>
          </article>
        </template>
    <script>
    const header = document.querySelector("header h3");
		let projekter;
    let categories;
    let filterProjekt = "all"
      // Konstant til dataset
      const url = "https://allthelin.dk/kea/09_CMS/09_unescoasp/wp-json/wp/v2/projekt?per_page=100";
      const caturl = "https://allthelin.dk/kea/09_CMS/09_unescoasp/wp-json/wp/v2/categories";

      // Henter data fra json
      async function hentData() {
        const respons = await fetch(url);
        const catdata = await fetch(caturl)
        projekter = await respons.json();
        categories = await catdata.json();
		    console.log(categories)
        vis(projekter);
        opretknapper();
      }
      //funktion der opretter knapper
function opretknapper(){
  categories.forEach(cat =>{
    document.querySelector("#filtrering").innerHTML += `<button class="filter" data-projekt="${cat.id}">${cat.name}</button>`;
  })

  addEventListenersToButtons();
}

//funktion der tilføjer evenlistener på knapper der lytter efter klik
function addEventListenersToButtons(){
  document.querySelectorAll("#filtrering button").forEach(elm =>{
    elm.addEventListener("click", filtrering);
  })
};
//funktion der filtrerer data og som sørger for at fremvise det rigtige efter der er trykket på en af knapperne 
function filtrering (){
  filterProjekt = this.dataset.projekt;
  header.textContent = this.textContent;
  console.log(filterProjekt)
  vis(projekter)

}

      // Functionen der viser data og tilføjer de korrekte kategorier til domelementerne
      function vis(projekter) {
        const container = document.querySelector(".liste");
		const template = document.querySelector("template").content;
        container.textContent = "";
        projekter.forEach((projekt) => {
          if (filterProjekt == "all"|| projekt.categories.includes(parseInt(filterProjekt))){
            const klon = template.cloneNode(true);
            klon.querySelector(".picture").src = projekt.billede.guid;
            klon.querySelector(".subject_level").textContent = projekt.fagomrade + " - " + projekt.niveau;
            klon.querySelector("h3").textContent = projekt.title.rendered;
            klon.querySelector(".kort_beskriv").textContent = projekt.kort_beskrivelse;
            klon.querySelector(".verdensmal_tekst").textContent="Verdensmål: " + projekt.verdensmal;

            //find kategori der passer til artiklen og tilføjer class. Tjekker den første (og i dette tilfælde eneste) kategori for det enkelte projekt//
            const category = categories.find((category)=>category.id==projekt.categories[0]);
            const categoryCssClass = category.slug
            klon.querySelector("article").classList.add(categoryCssClass)
            klon
              .querySelector("article")
              .addEventListener("click", () => visDetaljer(projekt));
            container.appendChild(klon);
        }
          });
          
	  }
	
		hentData()

		function visDetaljer(projekt) {
         location.href = projekt.link;
        }

            
    </script>


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
