<?php

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$naissance = $_GET['naissance'];
$age = date("Y") - $naissance;
if ($age < 30){
    $messageAge = "Vous êtes jeune";
} else {
    $messageAge = "";
}
?>

<p>Bonjour <?=$nom?> <?=$prenom?>, vous avez <?=$age?> ans :) <?=$messageAge ?></p>