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
  measurementId: "G-2FBR9W3D1H",
};

//Initialisation
firebase.initializeApp(config);

// Récupération des noeuds de la BD
const racineBD = firebase.database();

console.log(racineBD);
// A compléter
const BDMessages = racineBD.ref("Messages");
// console.log(BDMessages.key)

const message = { auteur: "Hugo", texte: "message a supp" };
BDMessages.push(message)

/****** Mise en place des écouteurs d'événements ********/

let form = document.querySelector("#formulaire");
form.addEventListener("submit", function (event) {
  event.preventDefault();
  let pseudoInput = document.querySelector('input[name="pseudo"]').value;
  // console.log(pseudoInput);
  let messageInput = document.querySelector('input[name="message"]').value;
  // console.log(messageInput);

  let message = { auteur: pseudoInput, texte: messageInput };
  
  BDMessages.push(message);
  
  let test = document.querySelectorAll('input')
  test.forEach(item => {
    item.value = "";
  });

});

// Lorsque ce prog se connecte à la BD Firebase
// Il reçoit un événement child_added pour chaque enregistrement de la BD
BDMessages.on("child_added", insererDansLaPage);

function insererDansLaPage(e) {
  const newPost = e.val();
  const newKey = e.key;
  let li = document.createElement("li");
  console.log(newPost);
  const ul = document.querySelector("#messages");
  console.log("Un nouveau message a été publié !");
  console.log("Author : " + newPost.auteur + " Text : " + newPost.texte);
  li.setAttribute('id', newKey)
  li.innerHTML +=
    '<i class="fa fa-trash"></i><span class="auteur"> Author : ' +
    newPost.auteur +
    '</span><span class="contenuMessage"> Text : ' +
    newPost.texte +
    "</span>";
  li.children[0].addEventListener('click', removeMessage)
  ul.appendChild(li);

}

// Quand on valide le formulaire, ajouter le nouveau message dans la BD

// A compléter

// Quand un message est supprimé de la BD, l'enlever de la page
// A compléter

// La mise en place de l'écouteur d'événement pour pour la suppression d'un message par l'internaute et fait dans la fonction d'affichage du message dans la page

BDMessages.on('child_removed', removeMessagePage);

function removeMessagePage(message){
    const deletedPost = message.val();
    const messageKey = message.key
    console.log(messageKey)
    console.log('Le message de\'' + deletedPost.auteur + '\' a été supp');
    let li = document.querySelectorAll('li')
    li.forEach(element => {
        console.log(element.id)
        if (element.id === messageKey){
            element.remove()
        }
    });
}

function removeMessage(e){
    let key = e.target.parentElement.id
    console.log(key)
    BDMessages.child(key).remove()
}

/****** Fin des écouteurs d'événements ***********/

/****** Gestionnaires d'événements **************/
