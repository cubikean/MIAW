<?php
    // Pour avoir accès aux fonctions de manipulation de la base de données
    include('helpers/accesBD.php');

    connexionBD("miaw", "root","");
    $connexion = connexionBD("miaw", "root","");
    
    if ($connexion){
        $affichageConnexion = "Connexion réussie";
    } else {
        $affichageConnexion = "Echec de la connexion à la base de données";
        $error = true;
    }


    
    $resultRequest = resultat_requete_simple($connexion, "select * from users where age = 12"); 

    $resultRequestMulti = resultat_requete_multiple($connexion, "select *from users where age > 10");
    $insertRequestMulti = resultat_requete_multiple($connexion, "insert into users (nom, prenom, age, email) values ('hugo','chatigny','20','hugochatigny@gmail.com')");



?>

<!DOCTYPE html>
<?php include('elements/head.inc.php') ; ?>

<html>
<?php include('elements/head.inc.php');  ?>
   <body>
    <header><a name="top"></a>
         <h1>Initiation à la programmation</h1>
         <h2>Exercice 5 - Manipulation d'une base de données</h2>
      <?php       
         //   include('elements/menu.inc.php') ;
        ?>
    </header>
    <section id="corps"> <!-- Contient la partie variable de la page -->
        <main>
            <article>
               <header>
                <h2>Zone de test</h2>
                </header>
                <?php if (isset($error) && $error == true):?>
                    <p class="alert alert-warning"><?= $affichageConnexion ?></p>
                <?php endif ;?>
                <pre><?= $resultRequest->nom ;?></pre>
                <pre><?= $resultRequest->age ;?> ans</pre>
                <ul>
                <?php foreach ($resultRequestMulti as $row) { ?>
                    <li><?= $row->nom ?> <?= $row->prenom ?> <?= $row->age ?> ans : <?= $row->email ?></li>

                <?php } ?>
                </ul>
                
            </article>
            
        </main>
        <aside>

        </aside>
    </section>
    
     <?php include('elements/footer.inc.php') ; ?>
    
    
</body>
</html>
