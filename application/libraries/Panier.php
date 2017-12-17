<?php

class Panier{

  private $panier;

  public function __construct()
  {
    $this->panier = array();
  }

  public function ajoutPanier($article){
    $position=$this->panierContient($article);
    if($position == 0){
      array_push($this->panier,$article);
    }else{
      $articlePanier = $this->panier[$position];
      $articlePanier->setMontant($article->getMontant()+$articlePanier->getMontant());
      $articlePanier->setNombreArticle($article->getNombreArticle()+$articlePanier->getNombreArticle());
      $this->panier[$position]=$articlePanier;
    }
  }

  private function panierContient($article){
    $index=0;
    foreach (panier as $key) {
      if($key->getLivre()->getIsbn() == $article->getLivre()->getIsbn()){
        return $index;
      }
      $index= $index+1;
    }
    return $index;
  }

}
