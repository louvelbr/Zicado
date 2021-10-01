<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Zicado</title>
  <link rel="stylesheet" type="text/css" href="css/inscription.css" />
  <link rel="shortcut icon" href="img/ZICADO/ZICADO.png"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <meta http-equiv="content-language" content="FR"/>
</head>
<body>
  <div id="main">
    <header>
      <img class="logo" src="img/ZICADO/ZICADO.png" alt="logo"/>
      <h1 class="magasin">ZICADO</h1>
      <!-- Barre de navigation en haut -->
      <div class="barre"></div>
    </header>

    <div id="milieu">
      <div class="partiePrincipale">
        <h1>INSCRIPTION</h1>
        <!--Création du formulaire d'inscription pour les élèves-->
        <form id="monform" name="nomform" action="bdd/inscriptionBDD.php" method="POST">
          <label><input required size="40" id="nom" name="nom" type="text" placeholder= "Nom"/></label>
          <br/><br/>
          <label><input required size="40" id="prenom" name="prenom" type="text" placeholder= "Prénom"/></label>
          <br/><br/>
          <label>Date de naissance : <input required id="dateNaissance" name="dateNaissance" type="date" placeholder= "entrez-le ici"/></label>
          <br/><br/>
          <label>Sexe</label>
          <label><input checked="checked" name="sexe" type="radio" id="Homme" value="Homme" /> Homme </label>
          <label><input name="sexe" type="radio" value="Femme" id="Femme" /> Femme </label>
          <label><input name="sexe" type="radio" value="Autre" id="Autre" /> Autre </label><br><br>
          <label>Pays :
          <select id="pays" name="pays">
            <option value="france" selected="selected">France</option>
            <option value="angleterre">Angleterre</option>
            <option value="allemagne">Allemagne</option>
            <option value="espagne">Espagne</option>
          </select>
          </label>
          <br/><br/>
          <label><input required id="metier" size="40" name="metier" type="text" placeholder= "Métier"/></label>
          <br/><br/>
          <label><input required id="login" size="40" name="login" type="text" placeholder= "Pseudo"/></label>
          <br/><br/>
          <label><input required id="mdp" size="40" name="mdp" type="password" placeholder= "Mot de passe"/></label>
          <br/> <br/>
          <br>
          <!--Création d'un bouton entrer et d'un bouton annuler-->
          <div class="envoyerAnnuler">
            <input id="OK_submit" class="bouton boutonContact bc1" name="submit" type="submit" value="Valider"/>
            <input id="reset" class="bouton boutonContact" type="reset" value="Annuler"/>
          </div>
        </form>
      <br/>
      <br>
      <!--Création d'un bouton de retour à la page d'accueil-->
      <a href="login.php"><input class="retour" type="button" value="Retour à la connexion" /></a>
      <!--insertion du logo-->
      <br><br>
    </div>
  </div>

    <!-- Inclusion du footer -->
    <?php require 'php/piedPage.inc.php';?>

  </div>
  </body>
</html>
