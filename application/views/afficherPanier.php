<?php

$this->load->view("bandeau/header");
$this->load->view("bandeau/bandeauApresConnexion");

$html = '';

//if ($_SESSION['panier'] != NULL) {
    echo "<br/> <br/> <br/> <br/>";
    echo "<div class='panier'> <center>";
    echo "<h1> Votre panier </h1> <br/>";    
    $bank = '0';
    //  $nbArticles = sizeof($_SESSION['panier']);
    foreach ($_SESSION['panier'] as $row) {
        // $html .= '<h2> Titre : ' . $row['livre']->image . '</h2>';
        // $html .= '<h2> Auteur : ' . $row['livre']->auteur . '</h2>';
        $html .= '<h2> Nombre demandé : ' . $row['nombre'] . '</h2>';
        $html .= '<h2> Montant : ' . $row['montant'] . '</h2> <br/> <br/>';
        $bank = $bank + $row['montant'];
    }

    $html .= '<br/> <h1> Le montant total est de ' . $bank . ' €. </h1> <br/> </center> </div>';
/*} else {
    $html .= '<h1> Votre panier est vide ! </h1>';
}*/

echo $html;

$this->load->view("bandeau/pied");
