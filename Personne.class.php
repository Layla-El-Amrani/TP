<?php

// Classe abstraite définissant une personne
abstract class Personne {
    protected $numero; 
    protected $nom; 
    protected $prenom; 
    protected $heursup; 
    protected $salairhoraire; 

    // Constructeur pour initialiser les attributs
    public function __construct($numero, $nom, $prenom, $heursup, $salairhoraire){
        $this->numero = $numero;
        $this->nom = $nom;   
        $this->prenom = $prenom;
        $this->heursup = $heursup;
        $this->salairhoraire = $salairhoraire;
    }

    // Méthode abstraite pour calculer le salaire
    abstract public function Calculataire();

    // Méthode magique pour afficher les informations de la personne
    public function __toString(){
        return $this->numero . ' ' . strtoupper($this->nom);
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

?>