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
                <h2>Le pipotron</h2>
            </header>
           
            <form action="./afficher_excuse.php" method="GET">
                <section class="champsSaisieExcuse">
                <fieldset>
                    <label for="sujet">Sujet</label>
                    <select name="sujet" id="">
                        <option value="mon grand-père">Mon grand-père</option>
                        <option value="Pikachu">Pikachu</option>
                        <option value="Zlatan">Zlatan</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="verbe">Verbe</label>
                    <select name="verbe" id="">
                        <option value="a mangé">a mangé</option>
                        <option value="a épousé">a épousé</option>
                        <option value="a défoncé">a défoncé</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="complement">Complément</label>
                    <select name="complement" id="">
                        <option value="son oreiller">son oreiller</option>
                        <option value="l'arbitre">l'arbitre</option>
                        <option value="ma grand-mère">ma grand-mère</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="futur">Futur</label>
                    <input type="checkbox" name="futur" value="oui">
                </fieldset>
                </section>
               
                <input type="submit">
            </form>




        </article>

    </main>

    <footer>
        <p>Année Universitaire 2022 | 2023</p>
    </footer>


</body>

</html>