<?php
if(!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['objet']) || !isset($_POST['email']) || !isset($_POST['message'])){
    header('Location: javascript:history.go(-1)');
    return;
}

$lastname = strip_tags($_POST['nom']);
$firstname = strip_tags($_POST['prenom']);
$subject = strip_tags($_POST['objet']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

mail("digitelior.agence@gmail.com", $subject, "From : ". $firstname ." ". $lastname ." (". $email .")\r\n \r\n". $message);
echo '<h1>Merci, nous avons bien reçu votre message !</h1>';
header( "refresh:5;url=index.html" );