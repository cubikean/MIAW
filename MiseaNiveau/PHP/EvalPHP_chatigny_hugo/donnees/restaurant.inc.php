<?php
// Permet de définir ce qu'est une Personne : un enregistrement (ou objet) permettant de stocker plusieurs informations 
class Restaurant
{
  private $id ;
  public $nom ;
  public $anneeCreation ;
  public $note ;
  public $genre ;
 
 public function __construct($leNom, $leGenre, $lAnnee, $laNote)
  {
    $this->nom = $leNom ;
    $this->genre = $leGenre ;
    $this->note = $laNote ;
    $this->anneeCreation = $lAnnee ;
  } 
 
     public function __toString()
     {
         return $this->nom. ' ('.$this->genre.') créé en '.$this->anneeCreation.', noté actuellement '.$this->note ; 
     }
     
     public function get_anneeCreation(){ return $this->anneeCreation ;}
     public function get_genre(){ return $this->genre ;}
     
     public function afficherPresentation()
     {
         echo $this ; 
     }
    
    
    public function getNom(){ return $this->nom ;} 
  

}
?>  