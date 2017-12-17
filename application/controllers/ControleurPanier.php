<?php

class ControleurPanier extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('dao/Dao');
        $this->load->library('Panier');
        $this->load->library('Livre');
    }

    function voir() {
        $this->load->view('afficherPanier', $_SESSION['panier']);
    }

    function stocker() {
        $livre = $this->Dao->getLivre($_POST['isbn']);
        $choix = array('livre' => $livre, 'nombre' => $_POST['nombre_exemplaire'], 'montant' => $livre->prix * $_POST['nombre_exemplaire']);
        /* if ($_SESSION['panier']['livre'] == $choix['livre'])  {*/
        // A continuer pour juste ajouter le nombre d'exemplaire et changer le montant :)
            if (!empty($_SESSION['panier'])) {
                array_push($_SESSION['panier'], $choix);
            } else {
                $_SESSION['panier'][0] = $choix;
            }
       // }

        $this->load->view('afficherSelection', $choix);
    }

}
