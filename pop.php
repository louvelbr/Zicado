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
      <?php require 'php/banniere.inc.php';
      for ($i=0; $i < 5 ; $i++) {
         if (!isset($_SESSION['quantite'.$i])) {
          $_SESSION['quantite'.$i]=0;
          $_SESSION['stock'.$i]=10;
        }
      }
    //var_dump($_SESSION); //ou printr // permet d'afficher le tableau de sessions
      ?>

      <nav class="liste-navigation">
        <a class="navElement" href="index.php">Accueil</a>
        <a class="navElement" href="reggae.php">Reggae</a>
        <a class="navElement" href="rock.php">Rock</a>
        <a class="navElement" href="RnB.php">R&B</a>
        <a class="navElement actif" href="pop.php">Pop</a>
        <a class="navElement" href="rap.php">Rap</a>
        <a class="navElement" href="contact.php">Contact</a>
      </nav>
    </header>

    <div id="milieu">
      <!-- Inclusion du menu de gauche -->
      <?php require 'php/menuGauche.inc.php';?>

      <div class="partiePrincipale">
        <h1>POP</h1>
          <form method="POST" action="php/varSession.inc.php">
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
            <td><img src="img/pop/aya_pop.jpg" alt="Aya Nakamura-Aya" class="album" onclick="PopupImage('img/pop/aya_pop.jpg');"/></td>
            <td class="titre">Aya Nakamura - Plus jamais</td>
            <td>
              <button type="button" id="popPlay0" class="boutonPlayPause" onclick="playPause('aya', 'popPlay0')"><i class="fa fa-play"></i></button>
              <audio id="aya">
                <source src="media/pop/aya.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td class="colonneLarge">20€</td>
            <td id="stock" class="stock colonneLarge"><?php echo $_SESSION['stock0'];?></td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins0" class="moins design" value="-" onclick="enlever(0)">
                  <input name="quantite0" type="text" id="quantite0" class="quantite inputQte" value="<?php echo $_SESSION['quantite0'];?>">
                  <!-- <div id="quantite0" class="quantite">0</div> -->
                  <input type="button" id="plus0" class="plus design" value="+" onclick="ajouter(0)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(0)"><i class="fa fa-shopping-cart"></i></button>
              </div>

            </td>
          </tr>
          <!-- Dexuième album -->
          <tr>
            <td><img src="img/pop/mileyCyrus.jpg" alt="Miley Cyrus-Plastic Hearts" onclick="PopupImage('img/pop/mileyCyrus.jpg');"/></td>
            <td class="titre">Miley Cirus - Plastic Hearts</td>
            <td>
              <button type="button" id="popPlay1" class="boutonPlayPause" onclick="playPause('miley', 'popPlay1')"><i class="fa fa-play"></i></button>
              <audio id="miley">
                <source src="media//pop/mileyCirus.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td id="stock" class="stock"><?php echo $_SESSION['stock1'];?></td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins1" class="moins" value="-" onclick="enlever(1)">
                  <input name='quantite1' type='text' size=1 id='quantite1' class='quantite inputQte' value="<?php echo $_SESSION['quantite1'];?>">
                  <input type="button" id="plus1" class="plus" value="+" onclick="ajouter(1)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(1)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="img/pop/stevenWilson.jpg" alt="Steven Wilson-The Future Bites" onclick="PopupImage('img/pop/stevenWilson.jpg');"/></td>
            <td class="titre">Steven Wilson - The Future Bites</td>
            <td>
              <button type="button" id="popPlay2" class="boutonPlayPause" onclick="playPause('unself', 'popPlay2')"><i class="fa fa-play"></i></button>
              <audio id="unself">
                <source src="media//pop/unself.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td id="stock" class="stock"><?php echo $_SESSION['stock2'];?></td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins2" class="moins" value="-" onclick="enlever(2)">
                  <input name='quantite2' type='text' size=1 id='quantite2' class='quantite inputQte' value="<?php echo $_SESSION['quantite2'];?>">
                  <input type="button" id="plus2" class="plus" value="+" onclick="ajouter(2)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(2)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="img/pop/duaLipa.jpg" alt="Dua lipa-Future Nostalgia" onclick="PopupImage('img/pop/duaLipa.jpg');"/></td>
            <td class="titre">Dua lipa - Future Nostalgia</td>
            <td>
              <button type="button" id="popPlay3" class="boutonPlayPause" onclick="playPause('duaLipa', 'popPlay3')"><i class="fa fa-play"></i></button>
              <audio id="duaLipa">
                <source src="media//pop/duaLipa.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td id="stock" class="stock"><?php echo $_SESSION['stock3'];?></td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins3" class="moins" value="-" onclick="enlever(3)">
                  <input name='quantite3' type='text' size=1 id='quantite3' class='quantite inputQte' value="<?php echo $_SESSION['quantite3'];?>">
                  <input type="button" id="plus3" class="plus" value="+" onclick="ajouter(3)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(3)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="img/pop/kimberose.jpg" alt="Kimberose-Out" onclick="PopupImage('img/pop/kimberose.jpg');"/></td>
            <td class="titre">Kimberose - Out</td>
            <td>
              <button type="button" id="popPlay4" class="boutonPlayPause" onclick="playPause('secret', 'popPlay4')"><i class="fa fa-play"></i></button>
              <audio id="secret">
                <source src="media//pop/the-secret.mp3">
                Your browser does not support the
              </audio>
            </td>
            <td>20€</td>
            <td id="stock" class="stock"><?php echo $_SESSION['stock4'];?></td>
            <td class="commande">
              <div class="commandePan">
                <div class="panier">
                  <input type="button" id="moins4" class="moins" value="-" onclick="enlever(4)">
                  <input name='quantite4' type='text' size=1 id='quantite4' class='quantite inputQte' value="<?php echo $_SESSION['quantite4'];?>">
                  <input type="button" id="plus4" class="plus" value="+" onclick="ajouter(4)">
                </div>
                <button type="submit" class="ajoutPanier"  onclick="panier(4)"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </td>
          </tr>
        </table>
        </form>
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
