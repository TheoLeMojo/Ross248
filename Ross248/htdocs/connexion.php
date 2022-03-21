<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="private" />
  <meta name="description" content="Notre solution a pour but de garantir la fiabilité des pilotes, au travers de divers tests psychotechniques.">
  <meta name="robots" content="index, follow" />
  <title>Connexion</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/connexion.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
    
<nav>
  <div class="logoNav">
    <a href="http://infinitemeasures.fr/vues/fr">
      <img src="https://i.imgur.com/t4D6X7R.png"></img>
    </a>
  </div>
  <div class="contenuNav">
    <a href="index.php">Accueil</a>
    <a href="connexion.php">Connexion</a>
    <a href="faq.php">FAQ</a>
    <a href="decouvrir.php">L'équipe</a>
    <a href="quiz.php">Quizz</a>
    <a href="index.php#contact">Contact</a>
    <a id="boutonLangues">
      <img class="flag" src="../img/fr.png"><ion-icon name="arrow-dropdown"></ion-icon>
    </a>
  </div>
  <div id="listeLangues" class="cacherListeLangues">
        <div class="langue">
      <a href="../en/index.php">
        <img class="flag" src="../img/en.png">
      </a>
    </div>
        <div class="langue">
      <a href="../es/index.php">
        <img class="flag" src="../img/es.png">
      </a>
    </div>
      </div>

  <!-- Bouton version mobile -->
  <div class="contenuNavMobile">
    <button id="bouton">
      <ion-icon name="menu"></ion-icon>
    </button>
  </div>

  <!-- Menu version mobile -->
  <div id="menuDeroulant" class="cacherMenuDeroulant">
    <p>
      <a href="index.php">Accueil</a>
      <a href="connexion.php">Connexion</a>
      <a href="faq.php">FAQ</a>
      <a href="index.php#contact">Contact</a>
      <div id="listeLanguesMobile">
                  <a href="../en/index.php">
            <img class="flag" src="../img/en.png">
          </a>
                  <a href="../es/index.php">
            <img class="flag" src="../img/es.png">
          </a>
              </div>
    </p>
  </div>
</nav>
    <div class="videNav"></div>

    <div id="milieu">
      <div class="txtMilieu">
        <h1>Bienvenue</h1>
        <ion-icon name="contact"></ion-icon>
      </div>
      <div class="message">
                      </div>
      <form action="../../controleurs/connexion.php" method="post">
        <div class="formulaire">
          <ion-icon name="person"></ion-icon>
          <input type="text" name="mail" placeholder="Adresse mail"><br>
        </div>
        <div class="formulaire">
          <ion-icon name="lock"></ion-icon>
          <input type="password" name="mdp" placeholder="Mot de passe"><br><br><br>
        </div>
        <div class="envoyer">
          <input type="submit" name="env" value="Se connecter">
        </div>
      </form>
    </div>

    <footer id="footer">
  <div id="contenuFooter">
    <div class="social">
      <a href="https://www.facebook.com/ross248" target = "_blank"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="https://www.instagram.com/ross248/" target = "_blank"><ion-icon name="logo-instagram"></ion-icon></a>
      <a href="https://mailto.ross248@gmail.com" target = "_blank"><ion-icon name="mail"></ion-icon></a>
    </div>
    <div class="txtFooter">
      <p>
        © Ross248, 2021 <br> <br>
        <a href="cgu.php">CGU</a> -
        <a href="mentions.php">Mentions légales</a>
      </p>
    </div>
  </div>
</footer>

  <script src="../js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>