<?php session_start();?>
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
  <script type="text/javascript" src="javascript/verifContact.js"></script>
  <body>
    <?php
    /* Définition des variables */
    $nom = $prenom = $mail = $sujet = $texte = $genre = "";
    
    /* Définition des variables d'erreur */
    $nomErr = $prenomErr = $mailErr = $sujetErr = $texteErr = $genreErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      /* VÉRIFICATION DU NOM */
      if (empty($_POST["nom"])) {
        $nomErr = "Le nom est requis";
      } else {
        $nom = test_input($_POST["nom"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nom)) {
          $nomErr = "Problème de caractère";
        }
      }

      /* VÉRIFICATION DU PRÉNOM */
      if (empty($_POST["prenom"])) {
        $prenomErr = "Le prenom est requis";
      } else {
        $prenom = test_input($_POST["prenom"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $prenom)) {
          $prenomErr = "Problème de caractère";
        }
      }

      /* VÉRIFICATION DU MAIL */
      if (empty($_POST["email"])) {
        $mailErr = "Le mail est requis";
      } else {
        $mail = test_input($_POST["email"]);
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $mailErr = "Format de mail invalide";
        }
      }

      /* VÉRIFICATION DU GENRE */
      if (empty($_POST["sexe"])) {
        $genreErr = "Le genre est requis";
      } else {
        $genre = test_input($_POST["sexe"]);
      }

      /* VÉRIFICATION DU SUJET */
      if (empty($_POST["sujet"])) {
        $sujetErr = "Le sujet est requis";
      } else {
        $sujet = test_input($_POST["sujet"]);
      }

      /* VÉRIFICATION DU CONTENU */
      if (empty($_POST["contenu"])) {
        $texteErr = "Le contenu est requis";
      } else {
        $texte = test_input($_POST["contenu"]);
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

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
        <a class="navElement" href="rap.php">Rap</a>
        <a class="navElement actif" href="contact.php">Contact</a>
      </nav>
    </header>
    <div id="milieu">
      <div class="blocGauche">
        <div class="menu">
          <h3 class="magasin">ZICADO</h3>
          <li><a href="index.php">Accueil</a></li>
          <br><br><hr>
          <h3 class="magasin">GENRES</h3>
          <ul class="genre">
            <li><a href="reggae.php">Reggae</a></li>
            <li><a href="rock.php">Rock</a></li>
            <li><a href="RnB.php">R&B</a></li>
            <li><a href="pop.php">Pop</a></li>
            <li><a href="rap.php">Rap</a></li>
          </ul>
          <br><br>
          <div class="contact">
            <li><a href="contact.php">Contact</a></li>
          </div>
        </div>
      </div>
      <div class="partiePrincipale demandeContact">
        <br>
          <h1>DEMANDE DE CONTACT</h1>
          <br>
          <!--Crétion du formulaire d'inscription pour les élèves-->
          <!-- <form id="monform" name="myForm" action="index.php" method="POST" onsubmit="return valider()"> -->
          <form id="monform" name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label>Date du contact : <SCRIPT LANGUAGE="JavaScript">
            var maintenant=new Date();
            var jour=maintenant.getDate();
            var mois=maintenant.getMonth()+1;
            var an=maintenant.getFullYear();
            document.write(jour,"/",mois,"/",an);
            </SCRIPT></label>
            <br/><br/>
            <label><input id="nom" name="nom" size="40" type="text" placeholder= "Nom"/><span class="error">* <?php echo $nomErr;?></span><!--<span class="error" id="erreurNom"></span>--></label>&emsp;
            <br/><br/>
            <label><input id="prenom" name="prenom" size="40" type="text" placeholder= "Prénom"/><span class="error">* <?php echo $prenomErr;?></span><!--<span class="error" id="erreurPrenom"></span>--></label>
            <br/><br/>
            <label><input id="email" name="email" size="40" type="email" placeholder= "exemple@gmail.com"/><span class="error">* <?php echo $mailErr;?></span><!--<span class="error" id="erreurEmail"></span>--></label>
            <br/><br/>
            <label><input type="radio" name="sexe" value="Femme">Femme</label>
            <label><input type="radio" name="sexe" value="Homme">Homme</label>
            <label><input type="radio" name="sexe" value="Autre">Autre</label>
            <span class="error">* <?php echo $genreErr;?></span><br><br>
            <!-- <label>Sexe</label>
            <label><input checked="checked" name="sexe" type="radio" id="Homme" value="Homme" /> Homme </label>
            <label><input name="sexe" type="radio" value="Femme" id="Femme" /> Femme </label>
            <label><input name="sexe" type="radio" value="Autre" id="Autre" /> Autre </label><br><br> -->
            <label>Date de Naissance : <input id="dateNaissance" name="dateNaissance" type="date" min="1875-12-31" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" max= "2022-12-31"/><span class="error" id="erreurDateNaissance"></span></label>
            <br/><br/>
            <label>Fonction :
              <select id="fonction" name="fonction">
                <option value="enseignant" selected="selected">Enseignant</option>
                <option value="ingenieur">Ingénieur</option>
                <option value="architecte">Architecte</option>
                <option value="autre">Autre</option>
              </select>
            </label>
            <br/><br/>
            <label><input id="sujet" size="40" name="sujet" type="text" placeholder= "Sujet"/><span class="error">* <?php echo $sujetErr;?></span><!--<span class="error" id="erreurSujet"></span>--></label>
            <br/><br/>
            <textarea id="contenu"rows = "2" cols = "50" name = "contenu" placeholder="Entrez le contenu ..."></textarea><span class="error">* <?php echo $texteErr;?></span><!--<span class="error" id="erreurContenu"></span>-->
            <br><br>
            <!--Création d'un bouton entrer et d'un bouton annuler-->
            <div class="envoyerAnnuler">
              <input id="OK_submit" class="bouton boutonContact bc1" type="submit" value="Envoyer"/>
              <input id="reset" class="bouton boutonContact" type="reset" value="Annuler"/>
            </div>
            <br><br>
          </form>
      </div>
    </div>

    <!-- Inclusion du footer -->
    <?php require 'php/piedPage.inc.php';?>

  </div>
  </body>
</html>
