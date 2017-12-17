<?php

$this->load->view("bandeau/header");
$this->load->view("bandeau/bandeauPendantConnexion");
$html = '<h1> Connecter vous !!! </h1> <br/>';
$html .= '<table> <form class="login-form" method="POST" action="' . base_url() . 'index.php/ControleurConnexion/connecte/">';
$html .= '<tr> <td> Entrer votre nom d\'utilisateur </td>';
$html .= '<td> <input type="text" placeholder="Nom d\'utilisateur" name="username"/> </td> </tr>';
$html .= '<tr> <td> Entrer votre mot de passe </td>';
$html .= '<td> <input type="password" placeholder="Mot de passe" name="password"/> </td> </tr>';
$html .= '<tr> <td> <input type="submit" name="authentification" value="Envoyer"> </td> </tr> </table> </form>';
echo $html;
$this->load->view("bandeau/pied");
