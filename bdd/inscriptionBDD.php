<?php
require 'identifiantsBDD.php';
if (isset($_POST['submit'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $dateNaissance = $_POST['dateNaissance'];
  $sexe = $_POST['sexe'];
  $pays = $_POST['pays'];
  $metier = $_POST['metier'];
  $pseudo = $_POST['login'];
  $pass = $_POST['mdp'];


  //création d'un objet
  $db = new PDO('mysql:host=localhost;dbname=ZICADO',$pseudoBDD,$mdpBDD);

    $pass = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO Personne (identifiant, motDePasse, nom, prenom, dateNaissance, sexe, pays, metier) VALUES ('$pseudo','$pass','$nom','$prenom','$dateNaissance','$sexe','$pays','$metier')";

    $req = $db->prepare($sql);

    $req->execute();

    echo "Enregistrement effectué";
  }

  header('Location: ../login.php');
  exit();
?>
