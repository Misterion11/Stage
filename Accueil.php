<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styyle.css">
  <title>Page</title>
</head>
<body>
  <header class="accueil">
    <div class="header">
      <div class="logo">
        <img class="logo" src="Images/logo rouge.jpg" alt="">
      </div>
      <div class="Titre">
        <h1 class="fdf">Le club de karting quadruple Champion du Monde</h1>
      </div>
      <form class="oui" action="index.html" method="post">
        <input type="text" name="" value="" placeholder="Saisissez votre recherche">
        <input type="button" name="ok" value="ok" class="oui">
      </form>
      <div class="Connect">
      <!-- commentaire <?php
        if(isset($_SESSION['username'])){
          echo '<h2 class="test">Mon profil : <a class="connecté" href="profil.php">', $_SESSION["username"]. '</a><br /><a class="connexion" href="../include/deconnexion.php">Se déconnecter</a></h2>';
        }
        else {
          echo '<h2><a class="connexion" href="inscrixion.php">Se connecter</a></h2>';
        }
        ?>-->
      </div>
    </div>
    <nav>
          <ul>
            <!-- <a href="Accueil.php"><img class="icone" src="Images/home.png" alt=""> </a> -->
            <li><a href="#">Accueil</a></li>
          </div>
            <li> <a class="nav" href="Club.php">Le club</a>
            <ul>
               <li> <a href="#">Nos partenaires</a> </li>
            <li>  <a href="#">Les Organisations</a> </li>
            <li>  <a href="#">Qui sommes nous?</a> </li>
          </ul>
        </li>
          <li> <a class="nav" href="Pages/pilotes.php">Les pilotes</a> </li>
          <li> <a class="nav" href="Pages/champFr.php">Championnat de France</a> </li>
          <li> <a class="nav" href="Club.php">EFK</a>
          <ul>
             <li> <a href="#">Calendrier</a> </li>
        </ul>
          <li><a class="nav" href="Pages/asso.php">Les Actions socio-éducatives</a></li>
          <li><a class="nav" href="Pages/karting.php">Karting 93</a></li>
          <li><a class="nav" href="Pages/Galerie.php">Galerie photo</a></li>
        </ul>
    </nav>
  </header>
<div class="image">
    <h1 class="orange">Actualités</h1>
  <div class="Imageuh">
    <figure>
      <img class="img" src="Images/Carte de voeux.jpg" alt="">
    </figure>
    <div class="textimg">
      <h1 class="titre"> Carte de voeux </h1>
      <h3> Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat,
        qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator,
        cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent. </h3>
    </div>
  </div>
  <div class="Imageuh">
      <figure>
        <img class="imge" src="Images/efk masque.jpg" alt="">
      </figure>
      <div class="textimg2">
      <h1 class="titre"> EFK Masque </h1>
      <h3>Dumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes,
        Herculanus advenit protector domesticus, Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti.
        quo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.</h3>
    </div>
  </div>
  <div class="Imageuh">
    <figure>
      <img class="img" src="Images/Evan.jpg" alt="">
    </figure>
    <div class="textimg">
      <h1 class="titre"> Evan Giltaire </h1>
      <h3>Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes,
        vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi,
        quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales..</h3>
      </div>
    </div>
    <div class="Imageuh">
      <figure>
        <img class="img" src="Images/Kevin.jpg" alt="">
      </figure>
      <div class="textimg">
        <h1 class="titre"> Kévin Estre tire les leçons de 2020, regarde vers 2021… et rêve de 2023 ! </h1>
        <h3>Une victoire en LM GTE Pro aux 24 heures du Mans en 2018, un titre de champion du Monde en 2019 et… un petit Tommy en 2020 !
           Alors que son programme de pilote officiel Porsche Motorsport vient d’être révélé,
           Kévin Estre se retourne sur l’année qui s’achève et regarde 2021 avec confiance et détermination, sans pouvoir s’empêcher de penser également à 2023 !</h3>
        </div>
      </div>
  </div>
    <footer>
        <img class='phot f'src="Images/facebook.png" alt="">
        <img class='phot'src="Images/twitter.png" alt="">
        <img class='phot'src="Images/youtube.png" alt="">
        <img class='photp'src="Images/instaa.png" alt="">
        <img class='phot'src="Images/snap.png" alt="">
      </footer>
</body>
</html>
