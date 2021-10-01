<?php
session_start();
require '../bdd/identifiantsBDD.php';
for ($i=0; $i < 5 ; $i++) {
  $_SESSION['prix'.$i]=20;
  $_SESSION['stock'.$i]= 10 - $_POST['quantite'.$i];

  //on récupère la quantité de produit demandée
  $_SESSION['quantite'.$i]=$_POST['quantite'.$i];
}
$_SESSION['source0']="../img/pop/aya_pop.jpg";
$_SESSION['titre0']="Aya Nakamura - Plus jamais";

$_SESSION['source1']="../img/pop/mileyCyrus.jpg";
$_SESSION['titre1']="Miley Cirus - Plastic Hearts";

$_SESSION['source2']="../img/pop/stevenWilson.jpg";
$_SESSION['titre2']="Steven Wilson - The Future Bites";

$_SESSION['source3']="../img/pop/duaLipa.jpg";
$_SESSION['titre3']="Dua lipa - Future Nostalgia";

$_SESSION['source4']="../img/pop/kimberose.jpg";
$_SESSION['titre4']="Kimberose - Out";

//création d'un objet
$db = new PDO('mysql:localhost=host;dbname=ZICADO',$pseudoBDD,$mdpBDD);

$pseudo = $_SESSION['pseudo'];
for ($i=0; $i < 5 ; $i++) {
  $titre = $_SESSION['titre'.$i];
  $source = $_SESSION['source'.$i];
  $stock = $_SESSION['stock'.$i];
  $quantite = $_SESSION['quantite'.$i];
  $sql = "INSERT INTO Album(idAlbum, titre, img, stock, quantite, idGenre, identifiant) VALUES (null,'$titre','$source','$stock','$quantite','pop','$pseudo')";
  $req = $db->prepare($sql);
  $req->execute();
  echo "Enregistrement effectué";
}
?>

<a href="../pop.php"><input class="retour" type="button" value="Retour à la page d'accueil" /></a>

<?php
header('Location: ../panier.php');
?>

<!--
if (!isset($_SESSION['quantite1'])) { echo '0';}else{ echo $_SESSION['quantite1']; }
-->
