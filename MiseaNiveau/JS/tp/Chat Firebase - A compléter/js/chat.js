/* chat.js */


// Initialisation de Firebase
// infos de configuration pour l'accès à la BD du chat   
const config = {
    apiKey: "AIzaSyADU89ardUsGLoMDG8n-1V2wIh9GegCbVI",
    authDomain: "chat-58d1a.firebaseapp.com",
    databaseURL: "https://chat-58d1a.firebaseio.com/",
    projectId: "chat-58d1a",
    storageBucket: "chat-58d1a.appspot.com",
    messagingSenderId: "526648232449",
    appId: "1:526648232449:web:c011afb7d75d894d27ce00",
    measurementId: "G-2FBR9W3D1H"}

//Initialisation
firebase.initializeApp(config);

// Récupération des noeuds de la BD
// A compléter


/****** Mise en place des écouteurs d'événements ********/

// Lorsque ce prog se connecte à la BD Firebase
// Il reçoit un événement child_added pour chaque enregistrement de la BD 
BDMessages.on('child_added', insererDansLaPage);

// Quand on valide le formulaire, ajouter le nouveau message dans la BD 
// A compléter

// Quand un message est supprimé de la BD, l'enlever de la page
// A compléter

// La mise en place de l'écouteur d'événement pour pour la suppression d'un message par l'internaute et fait dans la fonction d'affichage du message dans la page

/****** Fin des écouteurs d'événements ***********/

/****** Gestionnaires d'événements **************/