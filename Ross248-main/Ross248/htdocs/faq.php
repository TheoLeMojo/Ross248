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
          <a href="#milieuImg">
            <ion-icon name="arrow-dropdown-circle"></ion-icon>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="faq">
    <h1>Consultez la Foire aux questions !</h1>
    <div class="container-faq">

      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Quels sont les moyens de paiement accepté?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Vous pouvez régler par cartes bancaires,PayPal.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">Je n'ai pas reçu d'e-mail avec mes résultats de test.Que devrais-je faire?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Tout d'abord, veuillez vérifier votre dossier Spam - il est possible que votre fournisseur de messagerie ait mis notre message là-bas
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Comment s'inscrire sur le site? </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">Comment supprimer mon compte?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>

            </p>
          </div>
        </div>
        
      </div>
    </div>



  <a id="backtotop" class = "btntop" role="button" href="#" accesskey="t">
  <i>
    <img src = "../img/arrowtop.png" width="40" height="40">
  </i>
</a>

<!-- Footer -->
<?php include('footer.php') ?>

  <!--<script src="js/script.js"></script>-->
  <script src="../js/faq.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
  <script src="../js/base.js"></script>
</body>
</html>