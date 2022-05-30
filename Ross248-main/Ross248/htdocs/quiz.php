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
  <?php include('link.php')?> 
</head>
<body>

<!-- Nav -->
<?php include('nav.php')?>

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
   
<!-- Footer -->
<?php include('footer.php') ?>

  <!--<script src="js/script.js"></script>-->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
  <script src="../js/base.js"></script>
  <script src="../js/Question.js" type="text/javascript" ></script>
</body>
</html>