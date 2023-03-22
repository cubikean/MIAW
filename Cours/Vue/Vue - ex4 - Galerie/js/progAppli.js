// Création de l'application et de ses données
const application = Vue.createApp({
    // Données de l'application
    data() {
        return {
            titreSite: "Titre du site ! ",

            user:[
                { prenom: 'john', nom: "doe"},
            ],
            // Liste de données
            images: [
                { author: 'Alejandro Escamilla', download_url: "./images/im1.jpg", jaime: false },
                { author: 'Paul Jarvis', download_url: "./images/im2.jpg", jaime: true },
                { author: 'Paul Jarvis', download_url: "./images/im2.jpg", jaime: true },
                { author: 'Paul Jarvis', download_url: "./images/im2.jpg", jaime: true },
                { author: 'Paul Jarvis', download_url: "./images/im2.jpg", jaime: true },
                { author: 'Paul Jarvis', download_url: "./images/im2.jpg", jaime: true },
            ],

            resume : function(imageAResumer){
                let resultat ;
                resultat = "Photo prise par "+imageAResumer.author ;
                return resultat ;
            },

            
            

        } // Fin des données
    }, // Fin de la rubrique data
    methods: {
        like(image) {
            image.jaime = true;
        },
        unlike(image) {
            image.jaime = false;
        }

    } // Methods
    
}); // Fin de create app

// Monter l'application dans la page, à l'id monAppli

application.mount('#appli');


/*

votre nom et votre prénom, stockés dans une
seule variable à deux champs

• une liste d’images. Chaque image contiendra
les informations author (le nom du
photographe), download_url (l’url de l’image) et un champ jaime qui pourra contenir true ou
false

*/