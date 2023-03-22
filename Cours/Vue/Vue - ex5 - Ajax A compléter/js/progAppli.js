// Quand le navigateur a fini d'afficher la page web, exécuter la fonction principale
document.addEventListener('DOMContentLoaded', principale);

// clé api valable jusqu'au 25 avril 2023 
const api_id = "fcc6811b004c9410f9c662f2dae507f7";

function principale() {
    console.log("Exécution de la fonction principale");

    // Création de l'application et de ses données
    var application = new Vue({
        el: '#musicharvest', // Indiquer le sélecteur de la balise html dans laquelle l'appli s'exécutera

        // Données de l'application
        data: {
            concerts: null,
            artiste: null,
            date: null,
            nom_artiste_recherche: "angele"
        }, // Fin des données
        mounted() {
            // fonction appelée au début du cycle de vie de l'objet Vue
            console.log("Je suis la fonction mounted, exécutée au début du cycle de vie de l'objet Vue");
            this.lancerRecherche();
            this.concert();
        }, // fin mounted
        computed: {
            dateConvertie: function() {
                this.date = "date ";
                return this.date;
            }

        }, // computed
        methods: {
            lancerRecherche: function(e) {
                console.log("lancerRecherche");
                axios
                    .get("https://rest.bandsintown.com/artists/" + this.nom_artiste_recherche + "?app_id=fcc6811b004c9410f9c662f2dae507f7")
                    .then(donneeRecue => {
                        console.log(donneeRecue.data); // Pour voir le contenu de la donnée reçue
                        this.artiste = donneeRecue.data;
                    }); // fin then
            }, // Fin de lancerRecherche,

            recherche: function(e) {
                e.preventDefault();
                console.log("lancerRecherche");
                this.nom_artiste_recherche = document.querySelector('.recherche').value
                axios
                    .get("https://rest.bandsintown.com/artists/" + this.nom_artiste_recherche + "?app_id=fcc6811b004c9410f9c662f2dae507f7")
                    .then(donneeRecue => {
                        console.log(donneeRecue.data); // Pour voir le contenu de la donnée reçue
                        this.artiste = donneeRecue.data;
                    }); // fin then
                    this.concert()
            }, // Fin de lancerRecherche,

            concert: function(){
                console.log("concert");
                axios
                    .get("https://rest.bandsintown.com/artists/"+ this.nom_artiste_recherche+"/events?app_id=fcc6811b004c9410f9c662f2dae507f7")
                    .then(donneeRecue => {
                        console.log(donneeRecue.data); // Pour voir le contenu de la donnée reçue
                        this.concerts = donneeRecue.data;
                    }); // fin then
            },        


            conversionDate: function(dateAConvertir) {
                // Extraction
                var extraction = {};
                extraction.annee = parseInt(dateAConvertir.substring(0, 4));
                extraction.mois = parseInt(dateAConvertir.substring(5, 7));
                extraction.jour = parseInt(dateAConvertir.substring(8, 10));

                // Création d'un objet date
                var d = new Date(extraction.annee, extraction.mois - 1, extraction.jour);
                var optionsDate = { year: 'numeric', month: 'numeric', day: 'numeric' };

                var resultat = {};
                resultat.date = d.toLocaleString('fr-FR', optionsDate);

                return resultat;
            },
            conversionDateLongue: function(dateAConvertir) {
                // Extraction
                var extraction = {};
                extraction.annee = parseInt(dateAConvertir.substring(0, 4));
                extraction.mois = parseInt(dateAConvertir.substring(5, 7));
                extraction.jour = parseInt(dateAConvertir.substring(8, 10));
                extraction.heure = parseInt(dateAConvertir.substring(11, 13));
                extraction.minute = parseInt(dateAConvertir.substring(14, 16));

                // Création d'un objet date
                var d = new Date(extraction.annee, extraction.mois - 1, extraction.jour, extraction.heure, extraction.minute);
                var optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                var optionsHeure = { hour: 'numeric' };
                var optionsMinute = { minute: 'numeric' };
                var resultat = {};
                resultat.date = d.toLocaleString('fr-FR', optionsDate);
                var heure = d.toLocaleString('fr-FR', optionsHeure);
                var minute = d.toLocaleString('fr-FR', optionsMinute);
                resultat.horaire = this.formatageHoraire(heure, minute);
                return resultat;
            },

            formatageHoraire: function(h, m) {
                var resultat = parseInt(h) + 'h';
                if (parseInt(m) > 0) { resultat += m; }
                return resultat;
            },

            formatageNombre: function(n) {

                let nbMillions = Math.floor(n / 1000000);
                let texteMillions = (nbMillions == 0) ? "" : nbMillions + " ";

                let reste = n % 1000000;

                let nbMilliers = Math.floor(reste / 1000);
                let texteMilliers = (nbMilliers == 0) ? "" : nbMilliers + " ";

                NbUnites = reste % 1000;

                let texteUnites = NbUnites;

                return texteMillions + texteMilliers + texteUnites;
            }


        } // Methods

    }); // Fin de new Vue

    // Modification d'une donnée de l'appli



} // Fin de la fonction principale

