<?php

class ControleurLivre extends CI_Controller{

  function __construct() {
    parent::__construct();
    $this->load->library('Livre');
    $this->load->model('dao/Dao');
  }

  function voir() {
    $listeLivre['listeLivres'] = $this->Dao->getListeLivre();
    $this->load->view('afficherLivres', $listeLivre);
  }
  
  function selec($isbn) {
      $livreIsbn['livre'] = $this->Dao->getLivre($isbn);
      $this->load->view('afficherLivreSelec', $livreIsbn);      
  }
}
