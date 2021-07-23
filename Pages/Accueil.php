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
        <img class="logo" src="Images/logo.png" alt="">
      </div>
      <div class="Titre">
        <h1 class="fdf">Karting</h1>
      </div>

      <input type="search" id="ma recherche" name="q"
      placeholder="Rechercher sur le site…">
       <button> Rechercher </button>

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
      <div class="nav">
        <a href="Accueil.php"><img class="icone" src="Images/home.png" alt=""> </a>
      </div>
      <div class="nav">
        <a class="nav" href="Accueil.php">Accueil</a>
      </div>
      <div class="nav">
        <a class="nav" href="palmarès.php">Palmarès</a>
      </div>
      <div class="dropdown">
        <a class="nav" href="Club.php">Le club</a>
        <div class="dropdown-child">
          <a href="#">Nos partenaires</a>
          <a href="#">Les Organisations</a>
          <a href="#">qui sommes nous?</a>
        </div>
      </div>
      </div>
      <div class="nav">
        <a class="nav" href="pilotes.php">Les pilotes</a>
      </div>
      <div class="nav">
        <a class="nav" href="EFK.php">EFK</a>
      </div>
      <div class="nav">
        <a class="nav" href="Galerie.php">Galerie photo</a>
      </div>
      <div class="nav">
        <a class="nav" href="Calendrier.php">Calendrier</a>
      </div>
    </nav>
  </header>
<div class="image">
    <h1 class="orange">Actualités</h1>
  <div class="Imageuh">
    <figure>
      <img class="img" src="Images/karting.jpg" alt="">
    </figure>
    <div class="textimg">
      <h1 class="titre"> Lorem ipsum </h1>
      <h3> Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat,
        qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator,
        cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent. </h3>
    </div>
  </div>
  <div class="Imageuh">
      <figure>
        <img class="img" src="Images/karting2.jpg" alt="">
      </figure>
      <div class="textimg">
      <h1 class="titre"> Lorem ipsum </h1>
      <h3>Dumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes,
        Herculanus advenit protector domesticus, Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti.
        quo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.</h3>
    </div>
  </div>
  <div class="Imageuh">
    <figure>
      <img class="img" src="Images/karting3.jpg" alt="">
    </figure>
    <div class="textimg">
      <h1 class="titre"> Lorem ipsum </h1>
      <h3>Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes,
        vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi,
        quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales..</h3>
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
