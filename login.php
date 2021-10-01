<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Zicado</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <!--icon-->
    <link rel="shortcut icon" href="img/ZICADO/ZICADO.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <meta http-equiv="content-language" content="FR"/>
  </head>
  <body>

 <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     /* Entrées de l'utilisateur */
// 	$identifiant = $_POST['pseudo'] ;
// 	$motDePasse = $_POST['mdp'] ;
//
//     /* Ouverture du fichier dans lequel les identifiants sont ajoutés */
//     $myfile = fopen("fic/identifiant.txt", "r+");
//
//     $Trouve = 0 ; //initialisation de "trouvé" à zéro => identification non validée, non trouvée
//
//     /* Recherche ligne par ligne du contenu du fichier. Conditions d'arrêt : l'utilisateur est trouvé et toutes les lignes du fichier ont été parcourues */
//     while((!feof($myfile))&&($Trouve == 0)) {
//
//         /* Chaque ligne correspond à un joueur */
//         $inscrit = fgets($myfile); //personne inscrite
//
//         /* Cas où la ligne n'est pas vide */
//         if (!empty($inscrit)){
//           // Identifiant
//           $idInscrit = strstr($inscrit, ';',true); // chaine avant le premier point-virgule
//
//           // Mot de passe
//           $chaine1 = strstr($inscrit, ';'); // mot de passe et profil
//           $mdpInscrit = substr($chaine1, 1,-1); // mot de passe et profil (sans le point virgule et l'espace avant le mot de passe
//           // $mdpInscrit = strstr($chaine2, ';',true); //chaine avant le premier point virgule : le mot de passe
//         }
//
//         /* Cas où l'identifiant et le mot de passe correspondent à ceux entrés par l'utilisateur */
//         if (($identifiant == $idInscrit) && ($motDePasse == $mdpInscrit)) {
//             $Trouve = 1 ;
//             $_SESSION['pseudo']=$_POST['pseudo'];
//         }
//     }/*fin de la boucle*/
//
//
//     /* Fermeture du fichier */
//     fclose($myfile);
//
//     // Cas ou l'utilisateur n'existe pas
//     if ($Trouve == 0) {
//         $nonTrouv = "Utilisateur non trouvé";
//
//     //Cas ou l'identifiant et le mot de passe sont valides
//     } else {
//         header ('Location: index.php');
//     }
// }

?>
  <div id="main">
    <header>
      <img class="logo" src="img/ZICADO/ZICADO.png" alt="logo"/>
      <h1 class="magasin">ZICADO</h1>
      <!-- Barre de navigation en haut -->
      <div class="barre"></div>
    </header>

    <div id="milieu">
      <div class="partiePrincipale">
        <h1>CONNEXION</h1>
        <!--Création d'un formulaire avec une case pour l'identifiant et une pour le mot de passe-->
      <form id="monform" name="nomform" action="bdd/verifLogin.php" method="POST">
        <?php if(isset($_SESSION['message'])){echo($_SESSION['message']);
          $_SESSION['message'] = "";
          unset($_SESION['message']);}
        ?>
        <br>
        <label><input required id="pseudo" size="40"  name="pseudo" type="text" placeholder= "Identifiant"/></label>
        <br><br><br><br>
        <label><input required id="pass" size="40" name="pass" type="password" placeholder= "Mot de passe"/></label>
        <br>
        <span class="error"></span> <?php //echo $nonTrouv;?>
        <br><br><br>
        <!--Création d'un bouton de connexion et d'un de retour à la page principale-->
        <input id="OK_submit" class="bouton boutonContact" name="submit" type="submit" value="Connexion" class="bouton"/>
        <br><br><br><br>
      </form>
      <a href="inscription.php"><input class="retour" type="button" value="Inscription" /></a>
    </div>
    </div>

    <!-- Inclusion du footer -->
    <?php require 'php/piedPage.inc.php';?>

  </div>
  </body>
</html>
