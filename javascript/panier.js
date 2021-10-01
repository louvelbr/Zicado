/* Fonction pour agrandir l'image sous forme d'une pop-pup */
function PopupImage(img) {
  var largeur = 400;
  var hauteur = 400;
  var largeurEcran = (screen.width - largeur) / 2;
  var hauteurEcran = (screen.height - hauteur) / 2;
	w=open("",'image','weigth=toolbar=no,scrollbars=no,resizable=yes, width='+largeur+', height='+hauteur+',top=' + hauteurEcran + ', left=' + largeurEcran );
	w.document.write("<HTML><BODY onblur=\"window.close();\"><IMG height='100%' width='100%' src='"+img+"'>");
	w.document.write("</BODY></HTML>");
	w.document.close();
}

/* Bouton quantité : ajout */
function ajouter(n){
  var ok = 0;
  var qte = parseInt(document.getElementById("quantite"+n).value);
  if (isNaN(qte)) {
     ok = 1;
     var qte = parseInt(document.getElementById("quantite"+n).innerHTML);
  }
  var td = parseInt(document.getElementsByClassName('stock')[n+1].innerHTML);
  /* Tant que la quantité n'a pas atteint le max du stock */
  if ((qte < td+qte)){
    document.getElementsByClassName('moins')[n].removeAttribute('disabled');
    qte++;
    td--;
    qte = qte.toString();
    td = td.toString();
    if (ok == 0) {
      document.getElementById("quantite"+n).value  = qte;
      document.getElementsByClassName('stock')[n+1].innerHTML = td;
    } else {
      document.getElementById("quantite"+n).innerHTML = qte;
    }
  /* Cas où la quantité atteint le max du stock */
  }else{
    document.getElementsByClassName('plus')[n].setAttribute('disabled','disabled');
  }

  /* Couleur du bouton plus */
  if (td == 0) {
    document.getElementById('plus'+n).style.color = "white";
  } else {
    document.getElementById('plus'+n).style.color = "#676767";
  }
  /* Couleur du bouton moins */
  document.getElementById('moins'+n).style.color = "#676767";
}

/* Bouton quantité : on enlève */
function enlever(n){
  var ok = 0;
  var qte = parseInt(document.getElementById("quantite"+n).value);
  if (isNaN(qte)) {
    ok = 1;
    var qte = parseInt(document.getElementById("quantite"+n).innerHTML);
  }
  var td = parseInt(document.getElementsByClassName('stock')[n+1].innerHTML);
  /* Tant que la quantité est strictement positive */
  if (qte > 0){
    document.getElementsByClassName('plus')[n].removeAttribute('disabled');
    qte--;
    td++;
    qte = qte.toString();
    td = td.toString();

    if (ok == 0) {
      document.getElementById("quantite"+n).value  = qte;
      document.getElementsByClassName('stock')[n+1].innerHTML = td;
    } else {
      document.getElementById("quantite"+n).innerHTML = qte;
    }
  /* Cas où la quantité est nulle */
  }else{
    document.getElementsByClassName('moins')[n].setAttribute('disabled','disabled');
  }
  /* Couleur du bouton moins */
  if (qte == 0) {
    document.getElementById('moins'+n).style.color = "white";
  } else {
    document.getElementById('moins'+n).style.color = "#676767";
  }
  /* Couleur du bouton plus */
  document.getElementById('plus'+n).style.color = "#676767";
}

/* On affiche et on masque la colonne stock */
function afficherMasquer(){
  var x = document.getElementById("tableauAlbums").rows.length;
  for (var i = 0; i < x; i++) {
    var td = document.getElementsByClassName('stock')[i];
    if(td.style.display ==="none"){
      td.style.display="table-cell";
    }else{
      td.style.display="none";
    }
  }
}

/* Fonction qui met en play/pause l'audio (et change le logo play/pause) */
function playPause(idAudio, textPlay) {
  /* On récupère l'audio par son ID */
  var monAudio = document.getElementById(idAudio);
  /*Cas où l'audio est en pause */
  if (monAudio.paused) {
    /* On le met en play */
    monAudio.play();
    /* On met le logo pause */
    document.getElementById(textPlay).innerHTML = "<i class='fa fa-pause'></i>";
  /* Cas où l'audio est en play */
  } else {
    /* on le met en pause */
    monAudio.pause();
    /* On met le logo play */
    document.getElementById(textPlay).innerHTML = "<i class='fa fa-play'></i>";
  }
}
