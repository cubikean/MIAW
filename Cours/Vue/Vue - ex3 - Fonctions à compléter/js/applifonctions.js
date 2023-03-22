/* applicfonctions.js */
document.addEventListener('DOMContentLoaded', principale);

function principale() {


    // Création de l'application
    let app = new Vue({
        el: "#appli",
        data: {
            // Les données de l'application

            // Données simples
            ageCapitaine: 65,
            ageSecond: 57,
            ageMaitreEquipage: 45,
            ageCanonnier: 50,
            ageMousse1: 23,
            ageMousse2: 19,

            // Données structurées
            lot1: {
                contenu: "fraises",
                poidsKg: 2,
                prix: 16,
                quantiteStock: 15
            }, // lot1
            lot2: {
                contenu: "poireaux",
                poidsKg: 5,
                prix: 10,
                quantiteStock: 0
            }, // lot2
            lot3: {
                contenu: "fraises",
                poidsKg: 4,
                prix: 30,
                quantiteStock: 0
            }, // lot3

            lot4: {
                contenu: "Pommes de terre",
                poidsKg: 10,
                prix: 7.5,
                quantiteStock: 20
            }, // lot4


            // Tableau de données
            commande1: [
                // Première ligne de commande
                {
                    plat: "pizza 4 fromages",
                    quantite: 2,
                    prixUnitaire: 15
                },
                // Deuxième ligne de commande
                {
                    plat: "calzone",
                    quantite: 1,
                    prixUnitaire: 13
                },
                // ...
                {
                    plat: "tiramisu",
                    quantite: 1,
                    prixUnitaire: 6.5
                },
                {
                    plat: "café gourmand",
                    quantite: 1,
                    prixUnitaire: 6
                },
                {
                    plat: "café",
                    quantite: 1,
                    prixUnitaire: 1.7
                }
            ], // commande 1
            commande2: [{
                    plat: "Salade 4 saisons",
                    quantite: 1,
                    prixUnitaire: 15
                },
                {
                    plat: "penes de la mer",
                    quantite: 1,
                    prixUnitaire: 15
                },
                {
                    plat: "tiramisu",
                    quantite: 1,
                    prixUnitaire: 6.5
                },
                {
                    plat: "café gourmand",
                    quantite: 2,
                    prixUnitaire: 6
                }
            ], // commande2
             // commande2
            inventaire1: [
                // Un inventairecontient un ensemble de produits

                { // Premier produit
                    libelle: "Saucisses Cocktail",
                    reference: "AAFP3342",
                    stock: 17,
                    categorie: 1,
                    prixVenteUnitaire: 2.45
                },
                { // Deuxième produit
                    libelle: "Boudin aux pommes",
                    reference: "ADR32435",
                    stock: 12,
                    categorie: 5,
                    prixVenteUnitaire: 3.5
                },
                {
                    libelle: "Chips goût vinaigre",
                    reference: "ABBFP3342",
                    stock: 7,
                    categorie: 1,
                    prixVenteUnitaire: 1.5
                },
                {
                    libelle: "Filets de poulet",
                    reference: "S2233RT",
                    stock: 25,
                    categorie: 5,
                    prixVenteUnitaire: 4.25
                },
                {
                    libelle: "Filets de dinde",
                    reference: "FRT77T",
                    stock: 18,
                    categorie: 5,
                    prixVenteUnitaire: 4.05
                },
                {
                    libelle: "Magret de canard",
                    reference: "ERR233RT",
                    stock: 12,
                    categorie: 5,
                    prixVenteUnitaire: 8.25
                },
                {
                    libelle: "Noix de cajoux",
                    reference: "SRF3322",
                    stock: 13,
                    categorie: 1,
                    prixVenteUnitaire: 3.25
                }
            ], // catalogue1
            categories: [{ // première catégorie
                        code: 1,
                        libelle: "Apéritifs Salés"
                    },
                    {
                        code: 5,
                        libelle: "Viandes sous vide"
                    }
                ] // categories
        },


        methods: {
            commentaireAge: function(age) {
                let resultat; // Déclarons la variable destinée à contenir le résultat
                if (age > 60) {
                    resultat = "Vous êtes vieux !"
                } else {
                    resultat = "Ok, ça va encore"
                }
                return resultat;
            },

            moyenne: function(nombre1, nombre2) {
                let resultat = (nombre1 + nombre2) / 2;
                return resultat;
            }




        } // methods 

    }); // new Vue

} // /fonction principale