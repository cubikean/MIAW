<?php
if(!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['sujet']) || !isset($_POST['email']) || !isset($_POST['message'])){
    echo 'Erreur : La syntaxe de la requête est erronée';
    return;
}

$lastname = strip_tags($_POST['nom']);
$firstname = strip_tags($_POST['prenom']);
$subject = strip_tags($_POST['sujet']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

mail("digitelior.agence@gmail.com", $subject, "From : ". $firstname ." ". $lastname ." (". $email .")\r\n \r\n". $message);
echo 'Votre message a bien été envoyé !';