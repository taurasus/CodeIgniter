<?php

$this->load->view("bandeau/header");
$this->load->view("bandeau/bandeauApresConnexion");

echo "<br/> <h1> Liste des livres ! </h1> <br/>";
echo "<center> <table>";
$html = '';
foreach($listeLivres as $livre) {
$html .= '<tr> <td> <center> <a href="' . base_url() . 'index.php/ControleurLivre/selec/' . $livre->isbn . '">';
$html .= '<img src="' . $livre->image . '"/>  </a>';
$html .= '<tr> <td> Titre : ' . $livre->titre . '</td> </tr>';
$html .= '<tr> <td> Auteur : ' . $livre->auteur . '</td> </tr>';
$html .= '</center> </td> </tr> ';
}
echo $html;
echo "</table> </center>";

$this->load->view("bandeau/pied");
