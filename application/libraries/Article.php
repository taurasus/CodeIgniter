<?php

class Article {

    public $livre;
    public $nombre;
    public $montant;

    public function __construct($livre, $nombre, $montant) {
        $this->livre = $livre;
        $this->nombre = $nombre;
        $this->montant = $montant;
    }

    public function getLivre() {
        return $this->livre;
    }

    public function getNombreArticle() {
        return $this->nombre;
    }

    public function setNombreArticle($nb) {
        $this->nombre = $nb;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function setMontant($montant) {
        $this->montant = $montant;
    }

}
