<?php


class Dao extends CI_Model{


 // méthode qui permet de récupérer toutes les informations relatives aux livres dans la table livre
 // post-condition: un tableau contenant des objets de type Livre est retourné
 // un exception de type AccesTableException est levée si un problème apparait lors de l'exécution de la requête
  public function getListeLivre()
  {

      try{
	$stmt = $this->db->query("select * from livres;");
        $tableauLivre = $stmt->custom_result_object('Livre');
	return $tableauLivre;
       }
    catch(PDOException $e){
      $exception=new AccesTableException("probleme d'acces a  la table: ".$table);
      throw $exception;
    }
  }



 // méthode qui permet de récupérer un objet de type Livre dont l'isbn est $isbn
 //pré-condition: $isbn correspond à une valeur stockée dans la base de donnée
 // post-condition: retourne un objet de type Livre
 // un exception de type AccesTableException est levée si un problème apparait lors de l'exécution de la requête
  public function getLivre($isbn)  {
try{
$sql="select * from livres where isbn=?;";
$stmt = $this->db->query($sql,array($isbn));
$livre = $stmt->custom_result_object('Livre');
return ($livre[0]);
}
catch(PDOException $e){
      $exception=new AccesTableException("probleme d'acces a  la table: livre");
      throw $exception;
    }

  }

// Cette méthode permet de vérifier que $login et $password correspondent à un coupe (login, mot de passe) stockés dans la table identification
// post-condition retourne vrai si ($login,$password) sont dans la table sinon faux
  public function verifieMotDePasse($login, $password)  {

    $sql="select password from identification where login=?;";
    try{
 	$result=$this->db->query($sql,array($login))->row_array();

	if ($result!=null){
	if (crypt($password, $result['password'])==$result['password']) {
	return true;
	}
	else {return false;}
	}
	else {return false;}


	}
      catch(PDOException $e){

      $exception=new AccesTableException("probleme d'acces à la table identification");
      throw $exception;
    }


  }


  //Methode permettant la deconnexion du sgbd
  public function deconnexion()
  {
    $this->db=null;
  }






}

?>
