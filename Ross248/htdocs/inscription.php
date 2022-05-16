<?php include 'header.php' ?>
<body>

<!-- Nav -->
<?php include('nav.php')?>

<!-- test -->
<div class="videNav"></div>
<div id="milieu">
  <div class="txtMilieu">
        <h1>Bienvenue</h1>
        <ion-icon name="contact"></ion-icon>
      </div>
      <div class="message">
                      </div>
  <div class="login-form">
              <?php 
                  if(isset($_GET['reg_err']))
                  {
                      $err = htmlspecialchars($_GET['reg_err']);

                      switch($err)
                      {
                          case 'success':
                          ?>
                              <div class="alert alert-success">
                                  <strong>Succès</strong> inscription réussie !
                              </div>
                          <?php
                          break;

                          case 'password':
                          ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> mot de passe différent
                              </div>
                          <?php
                          break;

                          case 'email':
                          ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> email non valide
                              </div>
                          <?php
                          break;

                          case 'email_length':
                          ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> email trop long
                              </div>
                          <?php 
                          break;

                          case 'pseudo_length':
                          ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> pseudo trop long
                              </div>
                          <?php 
                          case 'already':
                          ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> compte deja existant
                              </div>
                          <?php 

                      }
                  }
                  ?>
              
              <form action="inscription_traitement.php" method="post">      
                  <div class="formulaire">
                      <ion-icon name="person"></ion-icon>
                      <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                  </div>
                  <div class="formulaire">
                      <ion-icon name="person"></ion-icon>
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                  </div>
                  <div class="formulaire">
                      <ion-icon name="lock"></ion-icon>
                      <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                  </div>
                  <div class="formulaire">
                      <ion-icon name="lock"></ion-icon>
                      <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                  </div>
                  <div class="envoyer">
                      <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                  </div>
                  <div class="formulaire">
                    <input type="checkbox" id="CGU" name="CGU" required>
                    <label for="CGU">En cochant cette cas vous acceptez les <a href="../pdf/CGU.pdf" target="_blank">Conditions Générales d'Utilisation</a></label>
                  </div>   
              </form>
          </div>
  </div>       
<!-- ancien code -->
<!--
<div class="videNav"></div>

    <div id="milieu">
      <div class="txtMilieu">
        <h1>Bienvenue</h1>
        <ion-icon name="contact"></ion-icon>
      </div>
      <div class="message">
                      </div>
    <form action="connexion-controleurs.php" method="post">
      <div class="formulaire">
        <ion-icon name="person"></ion-icon>
        <input type="text" name="mail" placeholder="adresse mail"><br>
        </div>
      <div class="formulaire">
        <ion-icon name="person"></ion-icon>
        <input type="text" name="nom" placeholder="nom"/><br />
      </div>
      <div class="formulaire">
        <ion-icon name="person"></ion-icon>
        <input type="text" name="prenom" placeholder="prenom"/><br />
      </div>
      <div class="formulaire">
        <ion-icon name="lock"></ion-icon>
        <input type="password" name="mdp" placeholder="mot de passe"/><br />
      </div>
      <div class="envoyer">
        <input type="submit" name="inscription" value="Inscription" />
      </div>
      <div class="connexion-ins">
        <a href="connexion.php">connexion</a>
      </div>
    </form>
  </div>

                -->
  <!-- Footer -->
<?php include('footer.php') ?>

  <!--<script src="js/script.js"></script>-->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
  <script src="../js/base.js"></script>
</body>
</html>