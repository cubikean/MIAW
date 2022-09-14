<?php
// Dans ce fichier, on définit les fonctions permettant d'accéder à une base de données 

/* Première fonction à utiliser une seule fois pour connecter le programme à une base de données */

function connexionBD($nomDeLaBD, $nomUtilisateur,$motDePasse)
{

try 
    {  // Tentative de connexion
            $db = new PDO('mysql:host=localhost;dbname='.$nomDeLaBD, $nomUtilisateur,$motDePasse);
             $db->exec('set names utf8') ;
                // Exécution d'une requête indiquant à la BD qu'elle devra envoyer les résultats des requêtes au format UTF-8
   
    } // Fin du try
    catch(PDOException $e)      // Si la connexion ne fonctionne pas ...
    {
        $db = null;
        echo 'La connexion a échoué :-( : ' . $e->getMessage();
    } // Fin du catch
    return $db ;
}


/* Récupération d'un résultat simple à l'aide d'une requête SQL 
    Il faut fournir à cette fonction, la connexion à la base de données et le texte de la requête SQL à envoyer à la BD
*/

function resultat_requete_simple($laConnexionBD, $texteRequeteSQL){
    if($laConnexionBD) // Test de réussite de la connexion
    { 
        // Créer et exécuter des requêtes
        $requete = $laConnexionBD->prepare($texteRequeteSQL);
        $requete->execute() ;
        
        // Récupération du résultat unique, sous la forme d'un objet
        $resultat = $requete->fetch(PDO::FETCH_OBJ) ;
        return $resultat ;
    }//end du if de connexion à la BD
    else return false ;//PB de connexion
    
}

/* Récupération d'un résultat multiple (par exemple les noms et prénom de toutes les personnes d'une table) à l'aide d'une requête SQL 
Il faut fournir à cette fonction, la connexion à la base de données et le texte de la requête SQL à envoyer à la BD
*/

function resultat_requete_multiple($laConnexionBD, $texteRequeteSQL){
    if($laConnexionBD) // Test de réussite de la connexion
    { 
        // Créer et exécuter des requêtes
        $requete = $laConnexionBD->prepare($texteRequeteSQL);
        $requete->execute() ;
        
        // Récupération du résultat unique, sous la forme d'un objet
        $resultat = $requete->fetchAll(PDO::FETCH_OBJ) ;
        
        return $resultat ;
    }//end du if de connexion à la BD
    else return false ;//PB de connexion 
}

function nombre_de_posts()
{
    global $nbPosts ;
    return $nbPosts ;
}


// the_post
// Place le post en cours dans une variable globale
// déplace le curseur de post afin que have_post puisse passer de true à false
function the_post(){
    global $curseurPost ;
    global $postCourant ;
    global $lesPosts ;
    global $nbPosts ;
    
    if(!isset($curseurPost)) { 
         $curseurPost = 0;
    }
    $postCourant = $lesPosts[$curseurPost] ;
    $curseurPost++ ;
}

function the_title(){
    global $postCourant ;
    echo $postCourant->titre ;
}

function the_content(){
    global $postCourant ;
    echo $postCourant->texte ;
}

function the_icon(){
    global $postCourant ;
    echo $postCourant->icone ;
}
function reset_post_data()
{
    global $curseurPost ;
    $curseurPost = 0;
}

/**************** Employés *******************/

function have_employes(){
    global $curseurEmployes ;
    global $nbEmployes ;
    if (isset($nbEmployes) && $nbEmployes>0 && isset($curseurEmployes) && $curseurEmployes< $nbEmployes){
        return true ;
    }
    $maBD = connexionBD() ; // Connexion à la base de données
    if($maBD) // Test de réussite de la connexion
    { 
        // Créer et exécuter des requêtes
        $requete = $maBD->prepare("select count(nom) as nbEmployes from employes");
    
        $requete->execute() ;
        
        // Récupération du résultat unique, sous la forme d'un objet
        $resultat = $requete->fetch(PDO::FETCH_OBJ) ;
        
        $requete2 = $maBD->prepare("select * from employes");
    
        $requete2->execute() ;
        
        // Récupération du résultat unique, sous la forme d'un objet
        global $lesEmployes ; 
        $lesEmployes = $requete2->fetchAll(PDO::FETCH_OBJ) ;
         
     
       $nbEmployes = $resultat->nbEmployes ;
        return $nbEmployes>0 && $curseurEmployes<$nbEmployes ;
    }//end du if de connexion à la BD
    else return false ;//PB de connexion
}


// the_employe
// Place le post en cours dans une variable globale
// déplace le curseur de post afin que have_post puisse passer de true à false
function the_employe(){
    global $curseurEmployes ;
    global $employeCourant ;
    global $lesEmployes ;
    global $nbEmployes ;
    
    if(!isset($curseurEmployes)) { 
         $curseurEmployes = 0;
    }
    $employeCourant = $lesEmployes[$curseurEmployes] ;
    $curseurEmployes++ ;
}

function the_first_name(){
    global $employeCourant ;
    echo $employeCourant->prenom ;
}

function the_last_name(){
    global $employeCourant ;
    echo $employeCourant->nom ;
}

function the_mail(){
    global $employeCourant ;
    echo $employeCourant->email ;
}


function reset_employe_data()
{
    global $curseurEmployes ;
    $curseurEmployes = 0;
}

?>