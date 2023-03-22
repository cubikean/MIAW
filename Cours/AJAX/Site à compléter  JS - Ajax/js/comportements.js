
console.log("Exécution du programme comportement.js");

document.querySelector("#recupObjet .bouton").addEventListener('click', recupererUnObjet);
document.querySelector("#recupTableau .bouton").addEventListener('click', recupererAll);
const resultat = document.querySelector('.resultat span')

const tab = document.querySelector('.resUl')

function recupererUnObjet() {
    // Tentative de récupération d'une donnée externe 
    const promesseRecupUnePersonne = axios.get('https://prodrigu.lpmiaw.univ-lr.fr/miaw/js_wdi/api_personnes/recupererUnePersAuHasard/');
    // Si la promesse est tenue, exécuter la fonction afficherPersonneAuHazard
    promesseRecupUnePersonne.then(afficherPersonneAuHasard);

    // Si la promesse n'est pas tenue, exécuter la fonction afficherErreurAjax
    promesseRecupUnePersonne.catch(afficherErreurAjax);
}

function recupererAll() {
    const promRecupAll = axios.get('https://prodrigu.lpmiaw.univ-lr.fr/miaw/js_wdi/api_personnes/recupererLesPers/');
    promRecupAll.then(afficherAll);
    promRecupAll.catch(afficherErreurAjax);
}

function afficherPersonneAuHasard(reponseAjax) {
    const data = reponseAjax.data;
    console.log(data.prenom);
    resultat.textContent = `${data.prenom}`
} //afficherPersonneAuHasard

function afficherAll(reponseAjaxAll) {
    const data = reponseAjaxAll.data.donnees;
    console.log('=== data comportements.js [35] ===', data);
    data.forEach(element => {
        tab.innerHTML += `<li> <span>prenom : ${element.prenom} </span><br> <span>nom : ${element.nom} </span>  </li>`
    });
    resultat.textContent = `${data.prenom}`
} //afficherALL

function afficherErreurAjax(erreur) {

} //afficherErreurAjax
