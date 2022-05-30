<?php
require_once "config.php";

if(isset($_POST["sendform"])){

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $msg = htmlspecialchars($_POST["msg"], ENT_QUOTES);

    
    $sql = "INSERT INTO contact (nom, email, message) VALUES ( '$name', '$email', '$msg');"; //requete SQL
    $stmt = mysqli_stmt_init($conn); //prepared statement
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../Contact.php?error=stmtfailed"); //retour à la page de Register avec l'erreur 'stmtfailed'
            exit();
        }
    
} else { //secu pour ne pas pouvoir atteindre le script depuis un lien web
    header("location: ../Contact.php");
    exit();
}

    
?>