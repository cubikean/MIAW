<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="traiter.php" method="get">

        <label for="saisieNbTS">Nom</label>
        <input type="text" name="nom" id="saisieNom" class="validate"/>

        <label for="saisieNbTS">Prénom</label>
        <input type="text" name="prenom" id="saisiePrenom" class="validate"/>

        <label for="saisieNbTS">Votre année de naissance</label>
        <input type="number" name="naissance" id="saisieNaissance" class="validate"/>

        <input type="submit" class="btn" value="Commander"/>


    </form>

</body>

</html>