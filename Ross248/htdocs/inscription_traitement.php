<?php 
    require_once 'config.php';

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        $password_retype = $_POST['password_retype'];
        $clef = htmlspecialchars($_POST['clef']);
        $rank = "user";

        
        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT pseudo, email FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($pseudo) <= 20){ // On verifie que la longueur du name <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme

                        $number = preg_match('@[0-9]@', $password);
                        $lower_case = preg_match('@[a-z]@', $password);
                        $upper_case = preg_match('@[A-Z]@', $password);
                        $special_chars = preg_match('@[^\w]@', $password);

                        if(strlen($password)>8 || strlen($password)<30){
                            if(!$number || !$lower_case || !$upper_case || !$special_chars){

                                if($password === $password_retype){ // si les deux mdp saisis sont bon

                                    if($clef == '1234'){

                                        // On hash le mot de passe avec Bcrypt, via un coût de 12
                                    $cost = ['cost' => 12];
                                    $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                                    
                                    // On stock l'adresse IP
                                    $ip = $_SERVER['REMOTE_ADDR']; 
                                    
                                    // On insère dans la base de données
                                    $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password, ip, rank) VALUES(?, ?, ?, ?, ?)');
                                    $insert->execute(array(
                                        $pseudo,
                                        $email,
                                        $password,
                                        $ip,
                                        $rank,
                                        )
                                    );
                                    // On redirige avec le message de succès
                                    header('Location:inscription.php?reg_err=success');
                                    die();

                                    }else{header('Location: inscription.php?reg_err=clef'); die();}
                                }else{header('Location: inscription.php?reg_err=password'); die();}                            
                            } else { header('Location: inscription.php?reg_err=password_character'); die();}                                                        
                        }else{ header('Location: inscription.php?reg_err=password_length'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    } 