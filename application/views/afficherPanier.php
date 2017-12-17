<?php

$this->load->view("bandeau/header");
$this->load->view("bandeau/bandeauApresConnexion");

echo "<br/> <br/> <br/> <br/>";
echo "<div class='panier'> <center>";
echo "<h1> Votre panier </h1> <br/>";
$html = '';
$bank = '0';
//$nbArticles = sizeof($_SESSION['panier']);
var_dump($_SESSION['panier']);

foreach ($_SESSION['panier'] as $row) {
    $html .= '<h2> Titre : ' . $row['livre']->titre . '</h2>';
    // $html .= '<h2> Auteur : ' . $row['livre']->auteur . '</h2>';
    $html .= '<h2> Nombre demandé : ' . $row['nombre'] . '</h2>';
    $html .= '<h2> Montant : ' . $row['montant'] . '</h2> <br/> <br/>';
    $bank = $bank + $row['montant'];
}

$html .= '<br/> <h1> Le montant total est de ' . $bank . ' €. </h1> <br/> </center> </div>';

echo $html;

$this->load->view("bandeau/pied");
