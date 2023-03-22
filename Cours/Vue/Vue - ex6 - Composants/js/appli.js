document.addEventListener('DOMContentLoaded', function() {

        //Vue.component("equipier",
        //             {
        //                props : ['personne'],
        //                template :'<li class="equipier">                                <span class=equipier__prenom>{{personne.prenom}}</span>          <span class=equipier__nom>{{personne.nom}}</span>                </li>' 
        //            } // options du composant "equipier
        //             )// vue.component

        let monApp = new Vue({
                el: '#app',
                data: {
                    ageDuCapitaine: 75,
                    equipage: [
                        { 'nom': "Déramais", 'prenom': "Bob", anneeNaiss: 1998, 'bio': "Après un master en Systèmes d'Information, il intègre notre équipe en tant que dev junior", 'num': 1, fonction: "Directeur technique", mail: "bob@chezwam.com" },
                        { 'nom': "Barbarossa", 'prenom': "Paul", anneeNaiss: 2004, 'bio': "Paul a été formé par notre équipe après son stage de L3 Informatique", 'num': 3, fonction: "Intégrateur Wordpress", mail: "paul@chezwam.com" },
                        { 'nom': "Martin", 'prenom': "Alice", anneeNaiss: 1979, 'bio': "La bio d'Alice", 'num': 2, 'bio': "Formée aux Gobelins, elle a rapidement accédé aux fonctions d'encadrement", 'fonction': 'Cheffe de projet', 'mail': 'Alice@chezwam.com' }
                    ], // enfants
                    personneFocus: null
                }, // data
                methods: {
                    mettreLeFocusSur: function(personne) {
                        this.personneFocus = personne;
                    },

                    srcImagePersonne: function(personne) {
                        return "images/" + personne.num + ".png";
                    }

                } // methods

            } // options Vue
        ); // new Vue

    } //fonction anonyme principale
); // addEventListener