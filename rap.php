<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Zicado</title>
    <link rel="stylesheet" type="text/css" href="css/genre.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <!-- Icones -->
    <link rel="shortcut icon" href="img/ZICADO/ZICADO.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <meta http-equiv="content-language" content="FR"/>
  </head>
  <script type="text/javascript" src="javascript/panier.js"></script>
  <body>
    <div id="main">
    <header>
      <!-- Inclusion de la bannière Zicado -->
      <?php require 'php/banniere.inc.php';?>

      <nav class="liste-navigation">
        <a class="navElement" href="index.php">Accueil</a>
        <a class="navElement" href="reggae.php">Reggae</a>
        <a class="navElement" href="rock.php">Rock</a>
        <a class="navElement" href="RnB.php">R&B</a>
        <a class="navElement" href="pop.php">Pop</a>
        <a class="navElement actif" href="rap.php">Rap</a>
        <a class="navElement" href="contact.php">Contact</a>
      </nav>
    </header>
    <div id="milieu">
      <!-- Inclusion du menu de gauche -->
      <?php require 'php/menuGauche.inc.php';?>

      <div class="partiePrincipale">
        <h1>RAP</h1>
        <table id="tableauAlbums" class="tableauAlbums">
          <!-- Titre des colonnes -->
          <tr>
            <th>Albums</th>
            <th>Titres</th>
            <th>Ecoutes</th>
            <th>Prix</th>
            <th class="stock">Stock</th>
            <th>Commande</th>
          </tr>
          <!-- 1er album -->
          <tr>
            <td><img src="img/rap/ninho_rap.jpg" alt="Ninho-destin" onclick="PopupImage('img/rap/ninho_rap.jpg');"/></td>
            <td class="titre">Ninho - Destin</td>
            <td>
              <button id="rapPlay0" class="boutonPlayPause" onclick="playPause('ninho', 'rapPlay0')"><i class="fa fa-play"></i></button>
              <audio id="ninho">
                <source src="media//rap/sans-peine.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td class="colonneLarge">20€</td>
            <td class="stock colonneLarge">10</td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins0" class="moins" value="-" onclick="enlever(0)">
                  <div id="quantite0" class="quantite">0</div>
                  <input type="button" id="plus0" class="plus" value="+" onclick="ajouter(0)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(0)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
          <!-- Dexuième album -->
          <tr>
            <td><img src="img/rap/Coelho-Odyssee.jpg" alt="Coelho-Odyssee" onclick="PopupImage('img/rap/Coelho-Odyssee.jpg');"/></td>
            <td class="titre">Coelho - Odyssee</td>
            <td>
              <button id="rapPlay1" class="boutonPlayPause" onclick="playPause('coelho', 'rapPlay1')"><i class="fa fa-play"></i></button>
              <audio id="coelho">
                <source src="media//rap/coelho-odyssee.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td class="stock">10</td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins1" class="moins" value="-" onclick="enlever(1)">
                  <div id="quantite1" class="quantite">0</div>
                  <input type="button" id="plus1" class="plus" value="+" onclick="ajouter(1)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(1)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
          <!-- Troisième album -->
          <tr>
            <td><img src="img/rap/7Jaws-seezy-Rage.png" alt="7 Jaws Seezy-Rage" onclick="PopupImage('img/rap/7Jaws-seezy-Rage.png');"/></td>
            <td class="titre">7 Jaws Seezy - Rage</td>
            <td>
              <button id="rapPlay2" class="boutonPlayPause" onclick="playPause('seezy', 'rapPlay2')"><i class="fa fa-play"></i></button>
              <audio id="seezy">
                <source src="media//pop/unself.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td class="stock">10</td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins2" class="moins" value="-" onclick="enlever(2)">
                  <div id="quantite2" class="quantite">0</div>
                  <input type="button" id="plus2" class="plus" value="+" onclick="ajouter(2)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(2)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
          <!-- Quatrième album -->
          <tr>
            <td><img src="img/rap/Deen-Burbigo-Cercle-vertueux.jpg" alt="Deen Burbigo-Cercle vertueux" onclick="PopupImage('img/rap/Deen-Burbigo-Cercle-vertueux.jpg');"/></td>
            <td class="titre">Deen Burbigo - Cercle vertueux</td>
            <td>
              <button id="rapPlay3" class="boutonPlayPause" onclick="playPause('burbigo', 'rapPlay3')"><i class="fa fa-play"></i></button>
              <audio id="burbigo">
                <source src="media//rap/piege-a-loup.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td class="stock">10</td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins3" class="moins" value="-" onclick="enlever(3)">
                  <div id="quantite3" class="quantite">0</div>
                  <input type="button" id="plus3" class="plus" value="+" onclick="ajouter(3)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(3)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
          <!-- Cinquième album -->
          <tr>
            <td><img src="img/rap/Ichon-Pour-de-vrai.png" alt="Ichon-Pour de vrai" onclick="PopupImage('img/rap/Ichon-Pour-de-vrai.png');"/></td>
            <td class="titre">Ichon - Pour de vrai</td>
            <td>
              <button id="rapPlay4" class="boutonPlayPause" onclick="playPause('ichon', 'rapPlay4')"><i class="fa fa-play"></i></button>
              <audio id="ichon">
                <source src="media//rap/ichon-pour-de-vrai.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td class="stock">10</td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins4" class="moins" value="-" onclick="enlever(4)">
                  <div id="quantite4" class="quantite">0</div>
                  <input type="button" id="plus4" class="plus" value="+" onclick="ajouter(4)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(4)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
        </table>
        <br><br>
        <input type="submit" class="cacherStock haut bis" value="Cacher stock" onclick="afficherMasquer();"/>
        <br>
      </div>
    </div>

    <!-- Inclusion du footer -->
    <?php require 'php/piedPage.inc.php';?>

  </div>
  </body>
</html>
