<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Zicado</title>
    <link rel="stylesheet" type="text/css" href="css/planDuSite.css" />
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
        <a class="navElement" href="index.php">Accueil</a>
        <!-- <a class="navElement" href="classique.php">Classique</a> -->
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
      <div class="blocGauche">
        <div class="menu">
          <h3 class="magasin">ZICADO</h3>
          <li><a href="index.php">Accueil</a></li>
          <br><br><hr>
          <h3 class="magasin">GENRES</h3>
          <ul class="genre">
            <!-- <li><a href="classique.php">Classique</a></li> -->
            <li><a href="reggae.php">Reggae</a></li>
            <li><a href="rock.php">Rock</a></li>
            <li><a href="R&B.php">R&B</a></li>
            <li><a href="pop.php">Pop</a></li>
            <li><a href="rap.php">Rap</a></li>
          </ul>
          <br><br>
          <div class="contact">
            <li><a href="contact.php">Contact</a></li>
          </div>
          </div>
      </div>
      <!-- Partie principale  -->
      <div class="partiePrincipale">
        <h1>PLAN DU SITE</h1>
        <ol class="genre">
          <li><a href="index.php">Accueil</a></li>
          <li><h2>GENRES</h2></li>
          <li><a href="reggae.php">Reggae</a></li>
          <li><a href="rock.php">Rock</a></li>
          <li><a href="RnB.php">R&B</a></li>
          <li><a href="pop.php">Pop</a></li>
          <li><a href="rap.php">Rap</a></li>
        </ol>
      </div>
    </div>

    <!-- Inclusion du footer -->
    <?php require 'php/piedPage.inc.php';?>

    </div>
  </body>
</html>
