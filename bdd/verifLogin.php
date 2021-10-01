<?php //bdd
session_start();
require 'identifiantsBDD.php';
if (isset($_POST['submit'])){
  $pseudo = $_POST['pseudo'];
  $pass = $_POST['pass'];

  //création d'un objet
  $db = new PDO('mysql:host=localhost;dbname=ZICADO',$pseudoBDD,$mdpBDD);

  $sql = "SELECT * FROM user where pseudo = '$pseudo'";
  //die($sql);
  $result = $db->prepare($sql);
  $result->execute();
  //die($sql);
  if($result->rowCount() > 0){

    $data = $result->fetchAll();
    if (password_verify($pass,$data[0]["password"])){
      echo "Connexion effectuée";
      $_SESSION['pseudo'] = $pseudo;
      header('Location: ../index.php');
      exit();
    }
  }else{
    $pass = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO user(id, pseudo, password) VALUES (null,'$pseudo','$pass')";
    //die($sql);
    $req = $db->prepare($sql);

    $req->execute();
    echo "Enregistrement effectué";
    $_SESSION['message'] = "Enregistrement effectué";
    header('Location: ../index.php');
  }
}

 ?>
