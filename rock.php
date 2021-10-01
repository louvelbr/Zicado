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
        <a class="navElement actif" href="rock.php">Rock</a>
        <a class="navElement" href="RnB.php">R&B</a>
        <a class="navElement" href="pop.php">Pop</a>
        <a class="navElement" href="rap.php">Rap</a>
        <a class="navElement" href="contact.php">Contact</a>
      </nav>
    </header>

    <div id="milieu">
      <!-- Inclusion du menu de gauche -->
      <?php require 'php/menuGauche.inc.php';?>

      <div class="partiePrincipale">
        <h1>ROCK</h1>
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
            <td><img src="img/rock/teencreeps.png" alt="Teen Creeps-Forever" class="album" onclick="PopupImage('img/rock/teencreeps.png');"/></td>
            <td class="titre">Teen Creeps - Forever</td>
            <td>
              <button id="rockPlay0" class="boutonPlayPause" onclick="playPause('creeps', 'rockPlay0')"><i class="fa fa-play"></i></button>
              <audio id="creeps">
                <source src="media//rock/forever.mp3">
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
          <!-- Deuxième album -->
          <tr>
            <td><img src="img/rock/blackpistolfire.png" alt="Black Pistol Fire-Look Alive" onclick="PopupImage('img/rock/blackpistolfire.png');"/></td>
            <td class="titre">Black Pistol Fire - Look Alive</td>
            <td>
              <button id="rockPlay1" class="boutonPlayPause" onclick="playPause('pistol', 'rockPlay1')"><i class="fa fa-play"></i></button>
              <audio id="pistol">
                <source src="media//rock/look-alive.mp3">
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
            <td><img src="img/rock/typhoonalbum.png" alt="Typhoon-Sympathetic magic" onclick="PopupImage('img/rock/typhoonalbum.png');"/></td>
            <td class="titre">Typhoon - Sympathetic magic</td>
            <td>
              <button id="rockPlay2" class="boutonPlayPause" onclick="playPause('typhoon', 'rockPlay2')"><i class="fa fa-play"></i></button>
              <audio id="typhoon">
                <source src="media//rock/were-in-it.mp3">
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
            <td><img src="img/rock/suckapunch.jpg" alt="Suckapunch-You Me At Six" onclick="PopupImage('img/rock/suckapunch.jpg');"/></td>
            <td class="titre">Suckapunch - You Me At Six</td>
            <td>
              <button id="rockPlay3" class="boutonPlayPause" onclick="playPause('suckapunch', 'rockPlay3')"><i class="fa fa-play"></i></button>
              <audio id="suckapunch">
                <source src="media//rock/you-me-at-six.mp3">
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
            <td><img src="img/rock/benKweller.png" alt="Ben Kweller-Circuit Boredom" onclick="PopupImage('img/rock/benKweller.png');"/></td>
            <td class="titre">Ben Kweller - Circuit Boredom"</td>
            <td>
              <button id="rockPlay4" class="boutonPlayPause" onclick="playPause('kweller', 'rockPlay4')"><i class="fa fa-play"></i></button>
              <audio id="kweller">
                <source src="media//rock/hold-me-down.mp3">
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
          <!-- Sixième album -->
          <tr>
            <td><img src="img/rock/therapieTaxi.jpg" alt="Thérapie Taxi-Rupture 2 merde" class="album" onclick="PopupImage('img/rock/therapieTaxi.jpg');"/></td>
            <td class="titre">Thérapie Taxi - Rupture 2 merde</td>
            <td>
              <button id="rockPlay5" class="boutonPlayPause" onclick="playPause('taxi', 'rockPlay5')"><i class="fa fa-play"></i></button>
              <audio id="taxi">
                <source src="media//rock/rupture-2-merde.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td class="colonneLarge">20€</td>
            <td class="stock colonneLarge">10</td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins5" class="moins" value="-" onclick="enlever(5)">
                  <div id="quantite5" class="quantite">0</div>
                  <input type="button" id="plus5" class="plus" value="+" onclick="ajouter(5)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(5)"><i class="fa fa-shopping-cart"></i></button>
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
