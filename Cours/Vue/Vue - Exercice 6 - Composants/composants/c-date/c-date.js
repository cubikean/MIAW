Vue.component("c-date", {
            template: '<div class="c-date"><h2>Aujourd\'hui</h2><h3>{{jour()}}/{{mois()}}/{{annee()}}</h3></div>',
            data: function() {
                return {
                    laDate: new Date()
                }
            },

            methods: {
                jour: function() {
                    let resultat = this.laDate.getDay();
                    return resultat;
                },
                mois: function() {
                    return this.laDate.getMonth();
                },
                annee: function() {
                    return this.laDate.getFullYear();
                }
            }
        } // options du composant c-date
    ) // vue.component