<?php
class UserController
{
  private PDO $db;

  public function __construct() //création du controlleur 
  {


    $dbName = "simandré";
    $port = 3306;
    $host = "localhost";
    $userName = "root";
    $password = "root";

    try {
      $this->setDb(new PDO("mysql:host=$host;dbname=$dbName;port=$port;", $userName, $password));
    } catch (PDOException $e) {

      echo $e->getMessage();
    }
  }
  public function setDb($db)
  {
    $this->db = $db;
    return $this;
  }

  public function add(User $newUser) //permet de créer des utilisateurs 
  {
    $req = $this->db->prepare("INSERT INTO `users` (nomUser, mail, password) VALUES (:nomUser, :mail, :password)");

    $req->bindValue(":nomUser", htmlspecialchars(str_replace('<','',$newUser->getNomUser())), PDO::PARAM_STR);
    $req->bindValue(":mail", htmlspecialchars(str_replace('<','',$newUser->getMail())), PDO::PARAM_STR);
    $req->bindValue(":password", password_hash(htmlspecialchars(str_replace('<','',$newUser->getPassword())), PASSWORD_DEFAULT), PDO::PARAM_STR);

    $req->execute();
    return $this->db->lastInsertId();
  }

  public function get(int $id) //permet de récupérer l'utilisateur
  {
    $req = $this->db->prepare("SELECT * FROM `users` WHERE id = :id");
    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $req->execute();
    $data = $req->fetch();
    $user = new User($data);
    return $user;
  }

  public function getByMail(string $mail) //permet de récupérer le mail de l'utilisateur
  {
    $req = $this->db->prepare("SELECT * FROM `users` WHERE mail = :mail");
    $req->bindValue(":mail", $mail, PDO::PARAM_STR);
    $req->execute();
    $data = $req->fetch();
    $user = new User($data);
    return $user;
  }

    public function removeUser(int $id) //permet de supprimer un compte utilisateur
    {
        $req = $this->db->prepare("DELETE FROM `users` WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
    }
}
