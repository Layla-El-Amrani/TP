<?php
require_once("Personne.class.php");

// Classe Formateur qui hérite de Personne
class Formateur extends Personne{
    private $salaireFixe; // Salaire fixe du formateur
    private $domaine; // Domaine de spécialisation du formateur

    // Constructeur pour initialiser les attributs de la classe parente et ceux propres à la classe
    public function __construct($numero, $nom, $prenom, $heursup, $salairhoraire, $salaireFixe, $domaine){
       parent::__construct($numero, $nom, $prenom, $heursup, $salairhoraire);
       $this->salaireFixe = $salaireFixe;
       $this->domaine = $domaine;
    }

    // Méthode pour calculer le salaire du formateur
    public function Calculataire(){
        // Calcul du salaire en fonction du salaire fixe et des heures supplémentaires
        return $this->salaireFixe + ($this->heursup * $this->salairhoraire);
    }

    // Méthode magique pour récupérer la valeur d'un attribut
    public function __get($attr){
        if (property_exists($this, $attr)){
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

// Exemple d'utilisation de la classe Formateur avec un formateur spécialisé en informatique
$formateur = new Formateur(1, 'John', 'Doe', 20, 25, 3000, 'Informatique');
echo $formateur->Calculataire(); // Affichage du salaire du formateur
?>