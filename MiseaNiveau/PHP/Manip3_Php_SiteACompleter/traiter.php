<?php
// Un endroit pour placer des instructions php pour le traitement des données saisies gace au formulaire



$nombreTS = $_GET['nbTS'];
if ($nombreTS == null){
    header("Location: http://127.0.0.1/dev/miaw/PHP/Manip3_Php_SiteACompleter/index.php?messageErreur=entrez un nombre");
    exit;

}
$prixTS = $nombreTS * 15;
$seuilCount = 50;
$fraiDePort = 0;
if ($nombreTS <= 0) {
    $error = true;
}
if ($prixTS >= $seuilCount) {
    $fraiDePort = 4;
} else {
    $fraiDePort = 8;
}
$totalCount = $fraiDePort + $prixTS;
$messageErreur = "Quantité erronée"

?>

<!DOCTYPE html>
<html>

<?php
include('elements/head.inc.php');
?>

<body>
    <header>
        <h1>Initiation à la programmation</h1>
        <?php
        include('elements/menu.inc.php');
        ?>
    </header>
    <section id="corps">
        <!-- Contient la partie variable de la page -->
        <header>
            <h2>Exercice 2</h2>
        </header>
        <main>
            <article>
                <h3>Coût de votre commande</h3>
                <?php if (isset($error) && $error == true) : ?>
                    <p><?= $messageErreur ?></p>
                <?php else : ?>
                    <p>Le montant de votre commande est de <?= $totalCount ?> €</p>

                <?php endif; ?>
                <p>
                    <a class="btn" href="index.php?modifier=ok">Modifier la commande</a>
                </p>
            </article>

        </main>
        <aside>

        </aside>
    </section>

    <?php include('elements/footer.inc.php'); ?>


</body>

</html>