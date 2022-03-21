<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="private" />
  <title>Ross248</title>
  <meta name="description" content="Notre solution a pour but de garantir la fiabilité des pilotes, au travers de divers tests psychotechniques.">
  <meta name="robots" content="index, follow" />
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/index2.css">
  <link rel="stylesheet" href="../css/backtotop.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
  
<nav>
  <div class="logoNav">
    <a href="http://localhost:8888/Ross248/htdocs/index.php">
      <img src="https://i.imgur.com/t4D6X7R.png">
    </a>
  </div>
  <div class="contenuNav">
    <a href="index.php">Accueil</a>
    <a href="connexion.php">Connexion</a>
    <a href="faq.php">FAQ</a>
    <a href="index.php#contact">Contact</a>
    <a href="decouvrir.php">L'équipe</a>
    <a href="quiz.php">Quizz</a>
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
      <a href="decouvrir.php">L'équipe</a>
      <a href="quiz.php">Quizz</a>
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

  <div id="haut">
    <div class=videNav></div>
    <div class="imgtop">
      <!--<img src="https://i.imgur.com/wxYQfml.jpg"></img>-->
      <div class="imgTexte">
        <h1>Quizz</h1>
        <div class="boutonBas">
          <a href="#milieuImg">
            <ion-icon name="arrow-dropdown-circle"></ion-icon>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="milieuImg">
    <img class="imgSlideLeft" src="../img/avion.png">
    <div class="texteDroite">
      <p>Parce que les pilotes ont des vies entre les mains, il est primordial de s’assurer de leur fiabilité.
        Plus de <b>200 passagers</b> (vol long courrier) à transporter sur 15 000 km de distance.</p>
      <p>Les conducteurs doivent être toujours <b>alertes, concentrés</b>, et savoir faire face à un problème.
        Les enjeux de nos tests : attester du <b>temps de réaction</b> et de la <b>gestion du stress</b> des futurs pilotes.</p>
    </div>
  </div>
  <div class="container">
    <div id="quiz">
      <h1><span>Q</span>uiz <i class="far fa-question-circle"></i></h1>

      <h2 id="question"></h2>
        
      <h3 id="score"></h3>

      <div class="choices">
        <button id="guess0" class="btn">        
          <p id="choice0"></p>
        </button>

        <button id="guess1" class="btn">
          <p id="choice1"></p>
        </button>
          
        <button id="guess2" class="btn">
          <p id="choice2"></p>
        </button>
          
        <button id="guess3" class="btn">
          <p id="choice3"></p>
        </button>
      </div>

      <p id="progress"></p>

    </div>
  </div>
   
  <script src="../js/Question.js" type="text/javascript" ></script>
  <footer id="footer">
  <div id="contenuFooter">
    <div class="social">
      <a href="https://www.facebook.com/ross248" target = "_blank"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="https://www.instagram.com/ross248/" target = "_blank"><ion-icon name="logo-instagram"></ion-icon></a>
      <a href="https://mailto.ross248@gmail.com" target = "_blank"><ion-icon name="mail"></ion-icon></a>
    </div>
    <div class="txtFooter">
      <p>
      © Ross248, 2021 <br><br>
        <a href="cgu.php">CGU</a> -
        <a href="mentions.php">Mentions légales</a>
      </p>
    </div>
  </div>
</footer>

  <!--<script src="js/script.js"></script>-->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
  <script src="../js/base.js"></script>
</body>
</html>