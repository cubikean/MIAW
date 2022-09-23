<?php
// Inclusion du fichier php qui définit ce qu'est un restaurant
include("donnees/restaurant.inc.php");

$lesRestaurants = []; // Création d'un tableau de restaurants, vide

// Création de restaurants et ajout dans le tableau
$lesRestaurants[] = new Restaurant('Polymorphe', 'Pizzeria', 1984, 4);
$lesRestaurants[] = new Restaurant('La Gadoue', 'Cuisine auvergnate', 1997, 3);
$lesRestaurants[] = new Restaurant('L\'Atelier Gourmand', 'Cuisine française', 2012, 3.5);
$lesRestaurants[] = new Restaurant('Chez Luigi', 'Pizzeria', 2017, 4.5);
var_dump($lesRestaurants)

?>


<!DOCTYPE html>
<html>

<head>
    <title>Mise à Niveau - Evaluation Php</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu.css">
    <style>
        footer {
            position: relative;
        }
        .spacer{
            min-height: 50px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Mise à niveau pour les WDI non MMI</h1>
        <h2>Evaluation PHP</h2>
    </header>
    <?php include("elements/menu.inc.php") ?>


    <main>
        <article>
            <header>
                <h2>Exercice 2</h2>
            </header>
            <p><?= $lesRestaurants[0]->nom ?></p>
            <?php foreach ($lesRestaurants as $key => $value) { ?>
                <p><?= $value->nom ?></p>
            <?php } ?>

            <ul>
                <!-- Tous les restaurants  -->
                <!-- <?php foreach ($lesRestaurants as $key => $value) { ?>
                    <li><?= $value->nom ?> <?= $value->anneeCreation ?> <?= $value->genre ?> <?= $value->note ?></li>
                <?php } ?> -->

                <!-- Restaurants note > 3,4 -->
                <?php foreach ($lesRestaurants as $key => $value) { ?>
                    <?php if ($value->note > 3.5) : ?>
                        <li><?= $value->nom ?> <?= $value->anneeCreation ?> <?= $value->genre ?> <?= $value->note ?></li>
                    <?php endif; ?>
                <?php } ?>

            </ul>


        </article>
        <div class="spacer"></div>
        <table class="restaurants">
            <thead>
                <tr>
                    <th colspan="4">Restaurant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nom</td>
                    <td>Année de Création</td>
                    <td>Genre</td>
                    <td>Note</td>
                </tr>
                <?php foreach ($lesRestaurants as $key => $value) { ?>
                <tr><td><?= $value->nom ?></td> <td> <?= $value->anneeCreation ?></td> <td><?= $value->genre ?></td>  <td><?= $value->note ?></td></tr>
            <?php } ?>

               
            </tbody>
        </table>

            
    </main>

    <footer>
        <p>Année Universitaire 2022 | 2023</p>
    </footer>


</body>

</html>