<?php include 'header.php' ?>
<body>
    
<!-- Nav -->
<?php include('nav.php')?>

<!-- Test -->
<div class="videNav"></div>

<form action="" method="post">      
    <div class="formulaire-contact">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
        <label for="mail">E-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail">
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="envoyer">
        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
    </div>   
</form>

<div class="contact">
    <h3 class="animer">Contact</h3>
    <div class="rs"><!-- réseaux sociaux -->
      <div class="fb animer">
        <a href="https://www.facebook.com/ross248r" target = "_blank"><ion-icon name="logo-facebook"></ion-icon></a>
        <p>Infinite measures</p>
      </div>

      <div class="email animer">
        <a href="mailto:ross248@gmail.com" target = "_blank"><ion-icon name="mail"></ion-icon></a>
        <p>Infinite-measures@gmail.com</p>
      </div>

      <div class="insta animer">
        <a href="https://www.instagram.com/ross248/" target = "_blank"><ion-icon name="logo-instagram"></ion-icon></a>
        <p>Infinite measures</p>
      </div>

    </div>
  </div>

<!-- Footer -->
<?php include('footer.php') ?>

<!--<script src="js/script.js"></script>-->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>