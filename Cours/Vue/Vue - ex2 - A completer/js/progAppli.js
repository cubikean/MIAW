// Quand le navigateur a fini d'afficher la page web, exécuter la fonction principale
document.addEventListener('DOMContentLoaded', principale);

function principale() {
    console.log("Exécution de la fonction principale");

    // Création de l'application et de ses données
    const application = Vue.createApp({


        // Données de l'application
        data() {
            return {
                titre: "Le mini coin",
                effectifDuPanier: 0,
                panier: [],

                // Liste de données
                lesArticles: [
                    { libelle: 'Mouton à colorier', etat: "Comme neuf", prix: 20, commentaire: "Pour que vos plus jeunes enfants débutent le coloriage, et vous laissent regarder le match.", vendeur: "Heckel", numeroArticle: 1, cheminImage: "images/produits/1.jpg", estDansLePanier: false },
                    { libelle: 'Bacon inhaler', etat: "Peu servi", prix: 30, commentaire: "Idéal pour faire croire à votre femme que vous revenez d'un barbecue avec vos amis, alors que vous venez de passer la journée au bureau ...", vendeur: "Lili", numeroArticle: 5, cheminImage: "images/produits/5.jpg",  estDansLePanier: false },
                    { libelle: 'Baby bling bling', etat: "Dans son emballage d'origine", prix: 200, commentaire: "Un grand publicitaire a dit : \"A six mois, si on n'a pas sa béhemme, on a raté sa life\". Sauvez vos enfant de l'infamie avec cet accessoire tendance. Existe aussi en Lada. Nan, je déconne.", vendeur: "Lili", numeroArticle: 3, cheminImage: "images/produits/3.jpg",  estDansLePanier: false },
                ],
            }
        },
        methods: {
            placerDansPanier(article) {
                console.log("Exécution de la fonction placerDansPanier")
                    // Ajouter 1 à la donnée effectifDuPanier de cette application
                this.effectifDuPanier++;
                article.estDansLePanier = true;
                console.log("Effectif du panier : " + this.effectifDuPanier);
                this.panier.push(article) + ', ';

            },
            retirerDuPanier(article) {
                this.effectifDuPanier--;
                article.estDansLePanier = false;
                this.panier.splice(this.panier.indexOf(article),1)

            }

        } // Methods

    }).mount('#appliVente'); // Fin de new Vue
    
    // Modification d'une donnée de l'appli

} // Fin de la fonction principale
