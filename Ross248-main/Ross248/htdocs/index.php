<?php include 'header.php' ?>
<body>

<!-- Nav -->
<?php include('nav.php')?>

    <div id="haut">
      <div class=videNav></div>
      <div class="imgtop">
        <!--<img src="https://i.imgur.com/wxYQfml.jpg"></img>-->
        <div class="imgTexte">
          <h1>Infinite measures</h1>
          <h4>Innovation et sécurité</h4>
          <div class="boutonBas">
            <a href="#phase1">
              <ion-icon name="arrow-round-down"></ion-icon>
            </a>
          </div>
        </div>
      </div>
    </div>

    
      <div class="midd">
        <div id="phase1">
          <img class="imgSlideLeft" src="../img/operateurs.png">
          <div class="droitetxtt">
          <p>Pour chaque series de voies ferrées, il doit y avoir un certain nombres d'opérateurs et de techniciens pour assurer le bon foctionnement des équipements et infrastructures.
            <b>Leur environement de travail est cependant stressant et peu poser plusieurs problemes de santé.</b>
            Pour cela, nous avons dévellopé un dispositifs permettant de s'assurer de la santé des opérateurs sur place en nous focalisant sur plusieurs données, liées à de potentiels problemes de santé.</p>
          </div>
          </div>
        </div>
      </div> 

    <div id="allo">  
      <div class="midd"> 
        <h1>Mesures</h1>
        <div id="milieu">
          <div class="icones">
            <div class="partieg">
              <i class='fas fa-heartbeat' style='font-size:24px'></i>
              <p><b>Rythme cardiaque</b></p>
              <p>Les plus gros risques de santé liés au métier sont liés au stress et à une charge trop importante de travail physique.
                Pour mesurer cela, nous procédons à un relevé de la fréquence cardiaque afin de déterminer l'effort fournis par l'opérateur.</p>
            </div>

            <div class="partiem">
              <ion-icon name="thermometer" class="icone"></ion-icon>
              <p><b>Température</b></p>
              <p>Dans le meme objectif, la mesure de la température corporelle permet de determiner un potentiel stress ou effort trop important.</p>
            </div>

            <div class="partied">
              <ion-icon name="stopwatch" class="icone"></ion-icon>
              <p><b>Taux de carbone</b></p>
              <p>Les environements de travails des opérateurs etant majoritèrement souterrain, et du à la présence des voix ferrées, nous utilisons un dispositif pour s'assurer de la qualité de l'air, et assurer un environement de travail suffisement sain. </p>
            </div>
          </div>
        </div>
      </div>
  </div>

    <div id="last">
      <div class="gauchetxtt">
        <p>Les résultats des tests seront consultables en ligne à tout moment via l'espace membre.
          Tout utilisateur pourra ainsi controller en temps réel les données récoltées par le dispositif grace à leur identifiant et leur mot de passe.
          Le tout sera complété par un historique des relevées, ainsi que de plusieurs informations afin d'aider l'utilisateurs à mieux comprendre les relevées.
        </p>
      </div>
      <img class="imgSlideRight1" src="../img/tableau-fr.png">
      <img class="imgSlideRight2" src="../img/courbe-fr.png">
    </div>
  
<!--
  <div id="contact">
    <h3 class="animer">Contact</h3>
    <div class="rs">
      <div class="fb animer">
        <a href="https://www.facebook.com/ross248r" target = "_blank"><ion-icon name="logo-facebook"></ion-icon></a>
        <p>Ross248Fr</p>
      </div>

      <div class="email animer">
        <a href="mailto:ross248@gmail.com" target = "_blank"><ion-icon name="mail"></ion-icon></a>
        <p>Ross248@gmail.com</p>
      </div>

      <div class="insta animer">
        <a href="https://www.instagram.com/ross248/" target = "_blank"><ion-icon name="logo-instagram"></ion-icon></a>
        <p>Ross248</p>
      </div>

    </div>
  </div>
-->

  <a id="backtotop" class = "btntop" role="button" href="#" accesskey="t">
    <ion-icon name="arrow-dropup-circle"></ion-icon>
</a>

<!-- Footer -->
<?php include('footer.php') ?>

  <!--<script src="js/script.js"></script>-->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
  <script src="../js/base.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>