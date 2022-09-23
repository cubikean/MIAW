<?php

$sujet = $_GET['sujet'];
$verbe = $_GET['verbe'];
$complement = $_GET['complement'];
if (isset($_GET['futur']) && $_GET['futur']){
    $futur = $_GET['futur'];
}


?>



<!DOCTYPE html>
<html>

<head>
    <title>Mise à Niveau - Evaluation Php</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <header>
        <h1>Mise à niveau pour les WDI non MMI</h1>
        <h2>Evaluation PHP</h2>
    </header>
    <?php include ("elements/menu.inc.php") ?>

   
    <main>
        <article>
            <header>
                <h2>Le pipotron - Résultat</h2>
            </header>
            <p>Sujet : <?= $sujet?></p>
            <?php if (isset($futur) && $futur): ?> 
                <!-- future is true  -->
            <p>Monsieur, je ne pourrai malheureusement pas assister à votre conférence car,<?=$sujet?> <?=$verbe?> <?=$complement?> </p>
            <?php else :?>
                <!-- future is false  -->
            <p>Monsieur, je n'ai malheureusement pas pu assister à votre conférence car,<?=$sujet?> <?=$verbe?> <?=$complement?> </p>
            <?php endif;?>
          
        </article>

    </main>

    <footer>
        <p>Année Universitaire 2021 | 2022</p>
    </footer>


</body>

</html>