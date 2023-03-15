console.log('Exécution du programme carte.js');

/**** Programme principal ***/

// création de la carte
maCarte = L.map('carte').setView([43.599535, 1.43], 11);



// Création de la couche de fond de carte
const fondDeCarte = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>'
});
// Ajout de la couche de fond à la carte
fondDeCarte.addTo(maCarte);

// Voici comment on affiche un marqueur
afficherUnMarqueur(43.58507893338048, 1.435919445061078, "Marqueur d'essai", "Adresse", "Implantation");


/**** Récupération et traitement des défibrillateurs ****/

// Où aller chercher les données
const urlDefibrillateurs = "https://data.toulouse-metropole.fr/api/records/1.0/search?dataset=defibrillateurs&rows=10";

// Effectuer l'appel Ajax

function recupDef() {
    // Tentative de récupération d'une donnée externe 
    const promesseDef = axios.get('https://data.toulouse-metropole.fr/api/records/1.0/search?dataset=defibrillateurs&rows=10');

    // Si la promesse est tenue, exécuter la fonction afficherPersonneAuHazard
    promesseDef.then(getData);

    // Si la promesse n'est pas tenue, exécuter la fonction afficherErreurAjax
    promesseDef.catch(afficherErreurAjax);
}
recupDef()




/******** /Fin du programme principal *****************/


/******** Fonctions utilisées par le prog principal ********/

function getData(res){
    const data = res.data.records;
    data.forEach(element => {
        const latitude = element.fields.geo_point_2d[0];
        const longitude = element.fields.geo_point_2d[1];
        const nom_site = element.fields.nom_site;
        const adresse = element.fields.adresse;
        const implantation = element.fields.emplacement;
    afficherUnMarqueur(latitude, longitude, nom_site, adresse, implantation)

    });
}


/******* DEFIBRILLATEURS ***********************************/
// Fonction dont l'exécution est déclenchée si l'appel Ajax réussit


function afficherUnMarqueur(latitude, longitude, nom_site, adresse, implantation) {
    const iconAED = L.icon({
        iconUrl: 'images/AEDIcon.png',
        iconSize: [38, 38],
        iconAnchor: [20, 38],
        popupAnchor: [-3, -38]
    });

    if (latitude != null && longitude != null) {
        // Création du marqueur associé
        // Préparation
        const lat_lng = L.latLng(latitude, longitude);
        const optionsMarqueur = { "title": nom_site, "opacity": 0.8, icon: iconAED };

        // Création
        const marqueur = L.marker(lat_lng, optionsMarqueur);
        let textePopup = '<h2>' + nom_site + '</h2>';
        textePopup += '<p>' + adresse;
        textePopup += '<p>Implantation du défibrillateur : ' + implantation;
        marqueur.bindPopup(textePopup).openPopup();
        // Ajout sur la carte
        marqueur.addTo(maCarte);
    } // Fin du cas où les coordonnées géographiques sont définies
    else { // Pas de coordonnées géographiques connues
        console.log('Pas de coordonnées géographiques connues pour ' + nom_site);
    }
} // Fin de la function afficherUnMarqueur

function afficherUnDefibrillateur(def) {
    const element = def.fields;
    afficherUnMarqueur(element.geo_point_2d[0], element.geo_point_2d[1], element.nom_site, element.type_structure, element.adresse, element.implantation);
} // Fin de la function afficherunDefibrillateur

function afficherErreurAjax(erreur) {
    console.log('=== erreur carte.js [86] ===', erreur);
} //afficherErreurAjax
