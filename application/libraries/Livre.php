<?php

class Livre {

    public $isbn;
    public $titre;
    public $auteur;
    public $editeur;
    public $image;
    public $prix;
    public $quantite;

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getEditeur() {
        return $this->editeur;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getImage() {
        return $this->image;
    }

}

?>
