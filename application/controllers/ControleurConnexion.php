<?php

class ControleurConnexion extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('dao/Dao');
    }

    function voir() {
        $this->load->view('connexion');
    }

    function connecte() {
        $login = $_POST['username'];
        $password = $_POST['password'];
        if (isset($login) && isset($password)) {
            if ($this->Dao->verifieMotDePasse($login, $password)) {
                $this->load->view('connecte');
            } else {
                $this->load->view('accueil');
            }
        }
    }
    
    function deconnecte() {
        unset($_SESSION['panier']);
        $this->load->view('accueil');
    }

}
