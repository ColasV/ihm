<?php

class People {

    private $nom;
    private $prenom;

    function __construct($nom,$prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }


}



?>
