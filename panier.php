<?php
session_start();

//if ((isset($_SESSION["login_Type"])) && (intval($_SESSION["login_Type"]) > 0)) { ?>
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
        <a class="navElement" href="index.php">Accueil</a>
        <a class="navElement" href="reggae.php">Reggae</a>
        <a class="navElement" href="rock.php">Rock</a>
        <a class="navElement" href="RnB.php">R&B</a>
        <a class="navElement" href="pop.php">Pop</a>
        <a class="navElement" href="rap.php">Rap</a>
        <a class="navElement" href="contact.php">Contact</a>
      </nav>
    </header>

    <div id="milPanier">
        <table id="tabPanier" class="tableauAlbums">
        <?php
        $prixTot = 0;
        for ($i=0; $i < 5 ; $i++) {
            echo "<tr>";
            if($_SESSION['quantite'.$i] != 0) {
            echo "<td><img src='".$_SESSION['source'.$i]."' class='panierLogo' alt='src".$i."'/></td>";
            echo "<td><p>".$_SESSION['titre'.$i]."</p></td>";
            echo "<td><p> QUANTITÉ<br>".$_SESSION['quantite'.$i]."</p></td>";
            echo "<td><p> PRIX (unité)<br>".$_SESSION['prix'.$i]."€</p></td>";
            // $prix.$i = ;
            echo "<td><p> PRIX<br>".$_SESSION['quantite'.$i]*$_SESSION['prix'.$i]."€</p></td>";
            }
            $prixTot = $prixTot + $_SESSION['quantite'.$i]*$_SESSION['prix'.$i];
            echo "</tr>";
          }
        ?>
        </table>
        <?php echo "<h2> PRIX TOTAL : ".$prixTot."€</h2>"; ?>
      </div>

    <!-- Inclusion du footer -->
    <?php require 'php/piedPage.inc.php';?>

    </div>
  </body>
</html>
