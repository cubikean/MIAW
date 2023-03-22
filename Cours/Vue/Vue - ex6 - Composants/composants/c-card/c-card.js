Vue.component("c-card", {
        props: ['personne', 'cheminimage'],
        template: 
        `<li class="card">
            <section class="front bleu-clair">
                <img class="portrait" :src="cheminimage" :alt="personne.nom">                    <h2>{{personne.prenom}} {{personne.nom}}</h2>
                <h3>{{personne.fonction}}</h3>
                <img class="recompense" src="images/award-icon.png" alt="Remporte un award !">
            </section>
            <section class="back">
                <img :src="cheminimage" :alt="personne.nom">
                <header>
                    <h2>{{personne.prenom}} {{personne.nom}}</h2>
                    <h3>{{personne.fonction}}</h3>
                </header>
                <p>{{personne.bio}}</p>
                <footer>
                    <i class="fas fa-envelope"></i>
                    <a :href="personne.mail" class="adresseMail">{{personne.mail}}</a>
                </footer>
            </section>
        </li>`,
        // emettre l'événement selection lorsque l'evenement click est reçu 
        methods: {
            selectionner: function () {
                console.log("selectionner");
                this.$emit('selection');
            },
            nomcomplet: function (personne) {
                return personne.prenom + " " + personne.nom;
            } //nomComplet 
        }, // methods
        computed: {
            lienMail: function () {
                return "mailto:" + this.mail;
            } // lienMail

            //                     
        }
    } // options du composant "c-card"
) // vue.component
