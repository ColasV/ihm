<?php

class Cours {

    private $nom;
    private $salle;
    private $horaire;
    private $jour;


    function __construct($nom,$salle,$horaire) {
        $this->nom = $nom;
        $this->salle = $salle;
        $this->horaire = $horaire;
    }

    public function setJour($jour) {
        $this->jour = $jour;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getSalle() {
        return $this->salle;
    }

    public function getHoraire() {
        return $this->horaire;
    }

    public function getJour() {
        return $this->jour;
    }


}



?>
