<?php

$this->load->view("bandeau/header");
$this->load->view("bandeau/bandeauApresConnexion");

$html = '<br/> <br/> <br/> <h1> Livre sélectionné </h1> <br/> <center>';
$html .= '<img src="' . $livre->image . '"> <br/>';
$html .= '<a style ="color: #757575;"> Auteur: </a>' . $livre->auteur . '<br/>';
$html .= '<a style ="color: #757575;"> Titre: </a>' . $livre->titre . '<br/>';
$html .= '<a style ="color: #757575;"> Editeur: </a>' . $livre->editeur . '<br/>';
$html .= '<a style ="color: #757575;"> Prix: </a>' . $livre->prix . 'euros <br/> <br/> <br/>';
$html .= '<form method= "POST" action= "' . base_url() . 'index.php/ControleurPanier/stocker/">';
$html .= '<a style ="color: #757575;"> Quantité demandée: </a>';
$html .= '<input style ="display: none;" name ="isbn" value = "' . $livre->isbn . '"/>';
$html .= '<input type ="number" name ="nombre_exemplaire" step ="1" min ="1" value ="1"/> <br/>';
$html .= '<input type ="submit" value ="ajouter au panier"/> </form> </center>';

echo $html;

$this->load->view("bandeau/pied");
