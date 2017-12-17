<?php

$this->load->view("bandeau/header");
$this->load->view("bandeau/bandeauApresConnexion");

$html = '<br/> <br/> <br/> <br/>';
$html .= '<div class="panier">';
$html .= '<h1> <a style ="color: #757575;"> Livre selectionné: </a>' . $livre->titre . '</h1>';
$html .= '<img src="' . $livre->image . '" <br/> <br/>';
$html .= '<h1> <a style ="color: #757575;"> Quantité: </a>' . $nombre . '</h1> <br/> <br/>';
$html .= '<h1> <a style ="color: #757575;"> Votre article à bien été ajouté au panier ! </a> </h1> </div> <br/> <br/>';

echo $html;

$this->load->view("bandeau/pied");
