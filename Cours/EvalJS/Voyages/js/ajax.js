window.addEventListener('load', ()=>{
    console.log("Exécution du programme comportement.js");
    const listVoyages = document.querySelector('.liste-voyages')
    function recupereVoyage() {
        // Tentative de récupération d'une donnée externe 
        const promesseVoyage = axios.get('https://prodrigu.lpmiaw.univ-lr.fr/miaw/js_wdi/api/voyages/');
        // Si la promesse est tenue, exécuter la fonction afficherPersonneAuHazard
        promesseVoyage.then(afficherAll);

        // Si la promesse n'est pas tenue, exécuter la fonction afficherErreurAjax
        promesseVoyage.catch(afficherErreurAjax);
    }

    function afficherAll(reponseAjaxAll) {
        const data = reponseAjaxAll.data.produits;
        data.forEach(element => {
            listVoyages.innerHTML += 
            ` <article class="voyage" data-reference="${element.reference}">
                <div class="voyage__etoile"></div>
                <img src="${element.url_image}" alt="" class="voyage__image">
                <footer class="voyage__cartouche">
                    <h3 class="voyage__destination">${element.destination}</h3>
                    <p class="voyage__slogan">${element.slogan}</p>
                </footer>
            </article>`
        });
    } //afficherALL

    function afficherErreurAjax(erreur) {

    } //afficherErreurAjax

    recupereVoyage()

})