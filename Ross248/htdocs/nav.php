<nav>
<div class="logoNav">
  <a href="http://localhost:8888/Ross248/htdocs/index.php">
    <img src="../img/Infinite_measures.png">
  </a>
</div>
<div class="contenuNav">
  <a href="index.php">Accueil</a>
  <a href="connexion.php">Connexion</a>
  <a href="faq.php">FAQ</a>
  <a href="contact.php">Contact</a>
  <a href="decouvrir.php">Decouvrir</a>
  <?php

  if (isset($_SESSION['email'] )) {
    echo"<a href='quiz.php'>Quizz</a>";

    require_once "config.php";
    $recupUser = $bdd->prepare('SELECT rank FROM utilisateurs WHERE email = ?');
    $recupUser->execute(array($_SESSION['email']));
    $datarank = $recupUser->fetch()['rank'];
    if($datarank = 'user'){
      echo"<a href='landing.php'>Espace membre</a>";
    }elseif($datarank = 'admin') { 
      echo"<a href='admin/adminlanding.php'>Espace administration</a>";
    } else {}
  }else{}
  
  ?>
  <a id="boutonLangues">
    <i class='fa fa-flag'></i><ion-icon name="arrow-dropdown"></ion-icon>
  </a>
</div>
<div id="listeLangues" class="cacherListeLangues">
      <div class="langue">
    <a href="../htdocs/index.php">
      <img class="flag" src="../img/fr.png">
    </a>
  </div>
      <div class="langue">
    <a href="../htdocs/en/index.php">
      <img class="flag" src="../img/en.png">
    </a>
  </div>
      <div class="langue">
    <a href="../htdocs/ar/index.php">
      <img class="flag" src="../img/ar.png">
    </a>
  </div>
      <div class="langue">
    <a href="../htdocs/cn/index.php">
      <img class="flag" src="../img/cn.png">
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
    <div id="connexionderoulant">
      <ul class="listposition">
        <li class="connexionlist"><a href="connexion.php">Connexion</a></li>
        <li class="inscriptionlist"><a href="inscription.php">Inscription</a></li>
        <li class="faqList"><a href="faq.php">FAQ</a></li>
        <li class="contactList"><a href="index.php#contact">Contact</a></li>
        <li class="decouvrirList"><a href="decouvrir.php">L'équipe</a></li>
        <li class="quizzList"><a href="quiz.php">Quizz</a></li>
      </ul>
    </div>
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