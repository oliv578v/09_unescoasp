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


@media (min-width:800px){
  .liste {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 15px;
  }
}

  article {
  margin-bottom: 5px;
  padding: 10px;
  border: solid;
  text-align: left;
  margin:2rem;
}

#filtrering {
  display: flex;
  margin-left: 17rem;
}
#filtrering button {
  background: none;
  color: inherit;
  cursor: pointer;
  border: 2px solid;
  margin-right: 30px;
  font-size: 1rem;
  margin-bottom: 30px;
  padding-left: 0.8rem;
  padding-right: 0.8rem;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}
.subject_level{
    border:solid;
}



</style>

<nav id="filtrering"><button data-projekt="all">All</button></nav>
<main id="site-content">
<section class="liste"></section>
</main>
<template>
          <article>
            <img src="" alt="" class="picture" />
            <p class="subject_level"></p>
            <h2 class="name"></h2>
            <p class="kort_beskriv"></p>
          </article>
        </template>
    <script>
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
function opretknapper(){
  categories.forEach(cat =>{
    document.querySelector("#filtrering").innerHTML += `<button class="filter" data-projekt="${cat.id}">${cat.name}</button>`;
  })

  addEventListenersToButtons();
}
function addEventListenersToButtons(){
  document.querySelectorAll("#filtrering button").forEach(elm =>{
    elm.addEventListener("click", filtrering);
  })
};
function filtrering (){
  filterProjekt = this.dataset.projekt
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
            klon.querySelector(".subject_level").textContent = projekt.fagomrade + " - " + projekt.niveau;
            klon.querySelector("h2").textContent = projekt.title.rendered;
            klon.querySelector(".kort_beskriv").textContent = projekt.kort_beskrivelse;

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
