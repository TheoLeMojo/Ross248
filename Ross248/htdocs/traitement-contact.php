<?php
/* Récupération des informations du formulaire*/
if(isset($_POST['sendform'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    /*Vérifie si l'adresse mail est au bon format */
    $regex_mail = "/^[-+.w]{1,64}@[-.w]{1,64}.[-.w]{2,6}$/i"; 
    /*Verifie qu il n y est pas d en tête dans les données*/
    $regex_head = '/[nr]/';   
    /*Vérifie qu il n y est pas d erreur dans adresse mail*/
    if (!preg_match($regex_mail, $mail))
    {
    $alert = "L'adresse '.$mail.' n'est pas valide";      
    }
    else
    { 
    $courriel = 1;
    }   
    /* On affiche l'erreur s'il y en a une */ 
    if (!empty($alert))
    {
    $courriel = 0;
    }     
    /* On vérifie qu'il n'y a aucun header dans les champs */ 
    if (preg_match($regex_head, $name)
    || preg_match($regex_head, $email)
    || preg_match($regex_head, $message))
    {  
    $alert = 'En-têtes interdites dans les champs du formulaire'; 
    }
    else
    { 
    $header = 1;
    }   
    /* On affiche l'erreur s'il y en a une */ 
    if (!empty($alert))
    {
    $header = 0;
    }
    if (empty($name) 
    || empty($email) 
    || empty($message))
    {  
    $alert = 'Tous les champs doivent être renseignés';
    } 
    else
    {  
    $renseigne = 1;
    }   
    /* On affiche l'erreur s'il y en a une */ 
    if (!empty($alert))
    {
    $renseigne = 0;
    }
    /* Si les variables sont bonne */
    if ($renseigne == 1 AND $header == 1 AND $courriel == 1)
    {

    
    /*Envoi du mail*/

    /*Le destinataire*/
    $to="theo.de.maistre@gmail.com";

    /*Le sujet du message qui apparaitra*/
    $sujet="Message depuis le site Infinite measure";
    $msg = '';
    /*Le message en lui même*/
    /*$msg = 'Mail envoye depuis le site' "rnrn";*/
    $msg .= 'Nom : '.$name."rnrn";
    $msg .= 'Email : '.$email."rnrn";
    $msg .= 'Message : '.$message."rnrn";

    /*Les en-têtes du mail*/
    $headers = 'From: MESSAGE DU SITE INFINITE MEASURE<theo.de.maistre@gmail.com>'."rn";
    $headers .= "rn";
    /*L'envoi du mail - Et page de redirection*/
    mail($to, $sujet, $msg, $headers);
    header('Location:index.php');
    }
    else
    {
    header('Location:index.php');
    }
}

?>