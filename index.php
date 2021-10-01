<?php
session_start();
if (isset($_SESSION['pseudo'])) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Zicado</title>
    <link rel="stylesheet" type="text/css" href="css/musique.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <!-- Icones -->
    <link rel="shortcut icon" href="img/ZICADO/ZICADO.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <meta http-equiv="content-language" content="FR"/>
  </head>
  <body>
    <div id="main">
    <header>
      <!-- Inclusion de la bannière Zicado -->
      <?php require 'php/banniere.inc.php';
      ?>
      <!-- Barre de navigation en haut -->
      <nav class="liste-navigation">
        <a class="navElement actif" href="index.php">Accueil</a>
        <a class="navElement" href="reggae.php">Reggae</a>
        <a class="navElement" href="rock.php">Rock</a>
        <a class="navElement" href="RnB.php">R&B</a>
        <a class="navElement" href="pop.php">Pop</a>
        <a class="navElement" href="rap.php">Rap</a>
        <a class="navElement" href="contact.php">Contact</a>
      </nav>
    </header>

    <div id="milieu">
    <!-- Menu gauche -->
    <?php require 'php/menuGauche.inc.php';?>
    
      <!-- Partie principale  -->
      <div class="partiePrincipale">
        <h2>Bienvenue sur Zicado</h2>
        <img src="img/ZICADO/2.png" alt="logo"/>
        <p>Écoutez les derniers albums de vos artistes et chanteurs préférés en CD.</p>
        <p>N'hésitez pas à nous contacter pour recevoir un bon de commande !</p>
      </div>
    </div>

    <!-- Inclusion du footer -->
    <?php require 'php/piedPage.inc.php';?>
    <?php
  }else{
    header ('Location: login.php');
  }
     ?>
    </div>
  </body>
</html>
