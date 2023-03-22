
Vue.component("c-equipier",
             {
                props : ['personne'],
                template :'<li @mouseover="selectionner" class="c-equipier">                                <span class=c-equipier__prenom>{{personne.prenom}}</span>          <span class=c-equipier__nom>{{personne.nom}}</span>                <span class=c-equipier__age>{{age(personne.anneeNaiss)}} ans</span> </li>' ,
    // emettre l'événement selection lorsque l'evenement click est reçu 
                methods :{
                    age : function(anneeDeNaissance){
                        return (2020-anneeDeNaissance) ;
                    },
                    selectionner : function(){
                        console.log("selectionner") ;
                        this.$emit('selection') ;
                    }
                }
            } // options du composant "equipier
             )// vue.component