<!DOCTYPE html>
<?php 
         $titre = "Exercice 2" ;
        include('elements/head.inc.php') ; 
?>

<html>
<?php
    include('elements/head.inc.php');  
?>
   <body>
    <header><a name="top"></a>
         <h1>Initiation à la programmation</h1>
      <?php       
            include('elements/menu.inc.php') ;
        ?>
    </header>
    <section id="corps"> <!-- Contient la partie variable de la page -->
        <header><h2>Exercice 2</h2></header>
        <main>
            <article>
                 <h3>Traitement d'un formulaire</h3>

                 <?php if(isset($_GET['messageErreur'])) : ?>

                 <p class="alert alert-warning"><?= $_GET['messageErreur']?></p>
                 <?php endif ; ?>
      <form method="get" action="traiter.php" id="commandeTS">
      
          <label for="saisieNbTS">Nombre de t-shirts :</label>
          <input type="number" name="nbTS"  
                 id="saisieNbTS"
                 class="validate"
                 
                  /><!-- Champ de saisie d'un nombre -->
         
       
	       
          <input type="radio" name="modele" value="F" id="femme"  class="with-gap" checked/>
          <label for="femme">Femme</label> 
          <input type="radio" name="modele" value="H"  class="with-gap" id="homme"/>
          <label for="homme">Homme</label>
           
            <input type="submit" class="btn" value="Commander"/>
      	
    </form>            

            </article>    
           <article>
                <h3>Commande rapide</h3>
                 <p><a class="btn rapide" href="traiter.php?nbTS=1">Commander un t-shirt féminin immédiatement !</a></p>
               
           </article>
        </main>
        <aside>

        </aside>
    </section>
    
     <?php include('elements/footer.inc.php') ; ?>
    
    
</body>
</html>
