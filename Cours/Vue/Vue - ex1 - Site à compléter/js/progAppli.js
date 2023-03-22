// Création de l'application et de ses données
const application = Vue.createApp({
    // Données de l'application
    data() {
        return {
            // Une seule donnée nommée titreEvenement, qui contient le texte "Anniversaire de Bob"
            titreEvenement: "Anniversaire de Bob",

            // Liste de données
            lesInvites: [
                { prenom: 'Paul', nom: "Naref", genre: 1, age: 27, victuailles:['Pommes','Viande','Epinard'] },
                { prenom: 'Jérémy', nom: "Dupin", genre: 1, age: 15, victuailles:[]},
                { prenom: 'Nadia', nom: "Paquerette", genre: 2, age: 38, victuailles:['Vin', 'Patate'] }
            ],

            tenues:[
                {style:'tenue de soirée'},
                {style:'déguisement obligatoire'},
            ],

            
            accessibleAuxMineurs: 1,
        } // Fin des données
    } // Fin de la rubrique data
}); // Fin de create app

// Monter l'application dans la page, à l'id monAppli
application.mount('#monAppli');