function valider() {
  /* Les variables */
  var name = document.forms["myForm"]["nom"];
  var prenom = document.forms["myForm"]["prenom"];
  var email = document.forms["myForm"]["email"];
  var dateNaissance = document.forms["myForm"]["dateNaissance"];
  var sujet = document.forms["myForm"]["sujet"];
  var contenu = document.forms["myForm"]["contenu"];

  /* Vérification de la saisie du nom */
  /* Cas où l'utilisateur n'a rien saisi */
  if (name.value == "") {
    document.getElementById('erreurNom').innerHTML="Veuillez entrer un nom";
    document.getElementById("nom").style.border = "2px solid rgba(183,9,76,1)";
    name.focus();
    return false;
  /* Cas où la saisie est correcte */
  } else {
      document.getElementById("nom").style.border = "1px solid black";
      document.getElementById('erreurNom').innerHTML="";
  }

  /* Vérification de la saisie du prénom */
  /* Cas où l'utilisateur n'a rien saisi */
  if (prenom.value == "") {
    document.getElementById('erreurPrenom').innerHTML="Veuillez entrer un prenom";
    document.getElementById("prenom").style.border = "2px solid rgba(183,9,76,1);";
    prenom.focus();
    return false;
  /* Cas où la saisie est correcte */
  } else {
    document.getElementById("prenom").style.border = "1px solid black";
    document.getElementById('erreurPrenom').innerHTML="";
  }

  /* Vérification de la saisie de l'e-mail */
  /* Cas où l'utilisateur n'a rien saisi ou qu'il n'a pas saisi un email */
  if ((email.value == "") ||(!(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i).test(email.value))) {
    document.getElementById('erreurEmail').innerHTML="Veuillez entrer un email valide";
    document.getElementById("email").style.border = "2px solid rgba(183,9,76,1);";
    email.focus();
    return false;
  /* Cas où la saisie est correcte */
  } else {
    document.getElementById("email").style.border = "1px solid black";
    document.getElementById('erreurEmail').innerHTML="";
  }

  /* Vérification de la date de naissance */
  /* Cas où l'utilisateur n'a rien saisi */
  if (dateNaissance.value == "") {
    document.getElementById('erreurDateNaissance').innerHTML="Veuillez entrer une date de naissance valide";
    document.getElementById("dateNaissance").style.border = "2px solid rgba(183,9,76,1);";
    dateNaissance.focus();
    return false;
  /* Cas où la saisie est correcte */
  } else {
    document.getElementById("dateNaissance").style.border = "1px solid black";
    document.getElementById('erreurDateNaissance').innerHTML="";
  }

  /* Vérification de la saisie du sujet */
  /* Cas où l'utilisateur n'a rien saisi */
  if (sujet.value == "") {
    document.getElementById('erreurSujet').innerHTML="Veuillez entrer un sujet";
    document.getElementById("sujet").style.border = "2px solid rgba(183,9,76,1);";
    sujet.focus();
    return false;
  /* Cas où la saisie est correcte */
  } else {
    document.getElementById("sujet").style.border = "1px solid black";
    document.getElementById('erreurSujet').innerHTML="";
  }

  /* Vérification de la saisie du contenu du message */
  /* Cas où l'utilisateur n'a rien saisi */
  if (contenu.value == "") {
    document.getElementById('erreurContenu').innerHTML="Veuillez entrer du contenu";
    document.getElementById("contenu").style.border = "2px solid rgba(183,9,76,1);";
    contenu.focus();
    return false;
  /* Cas où la saisie est correcte */
  } else {
    document.getElementById("contenu").style.border = "1px solid black";
    document.getElementById('erreurContenu').innerHTML="";
  }
}
