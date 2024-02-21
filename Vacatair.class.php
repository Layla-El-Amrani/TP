<?php
require_once("Personne.class.php");

// Classe Vacataire qui hérite de Personne
class Vacataire extends Personne{
    private $diplome; // Diplôme du vacataire

    // Constructeur pour initialiser les attributs de la classe parente et ceux propres à la classe
    public function __construct($numero, $nom, $prenom, $heursup, $salairhoraire, $diplome){
       parent::__construct($numero, $nom, $prenom, $heursup, $salairhoraire);
       $this->diplome = $diplome;
    }

    // Méthode pour calculer le salaire du vacataire
    public function Calculataire(){
        // Calcul du salaire en fonction du nombre d'heures travaillées et du salaire horaire
        return $this->heursup * $this->salairhoraire;
    }


     // Méthode magique pour récupérer la valeur d'un attribut
     public function __get($attr){
        if(property_exists($this, $attr)){
            return $this->$attr;
        }
    }

      // Méthode magique pour définir la valeur d'un attribut
      public function __set($attr, $value){
        if (property_exists($this, $attr)){
            $this->$attr = $value;
        }
    }
}

// Exemple d'utilisation de la classe Vacataire
$vacataire = new Vacataire(2, 'Alice', 'Smith', 10, 20, 'Bac+3');
echo $vacataire->Calculataire(); // Affichage du salaire du vacataire
?>