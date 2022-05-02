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
  <?php include('link.php')?> 
</head>
<body>
    
<!-- Nav -->
<?php include('nav.php')?>

<!-- Test -->
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
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexionbdd.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="formulaire">
                    <ion-icon name="person"></ion-icon>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="formulaire">
                    <ion-icon name="lock"></ion-icon>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="envoyer">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>
  </div>

<!-- ancien code 
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
        <ion-icon name="lock"></ion-icon>
        <input type="password" name="mdp" placeholder="mot de passe"/><br />
      </div>
      <div class="envoyer">
        <input type="submit" name="connexion" value="Connexion" />
      </div>
      <div class="inscription-co">
        <a href="inscription.php">inscription</a>
      </div>
    </form>
  </div>
              -->
<!--
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
-->

<!-- Footer -->
<?php include('footer.php') ?>

  <script src="../js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>