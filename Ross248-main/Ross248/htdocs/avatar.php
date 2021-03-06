<?php
    session_start(); // Pour récupèrer nos données dans les variables : $_SESSION   
    include('config.php'); // Pour faire la connexion à notre base de données
 
    if(!empty($_POST)){
        extract($_POST); // On extrait toutes les informations
        $valid = true;
 
        if (isset($_POST['avatar'])){   // On se positionne sur le bon formulaire
            if (isset($_FILES['file']) and !empty($_FILES['file']['name'])) { // On vérifie qu'il y a bien un fichier
 
                $filename = $_FILES['file']['tmp_name']; // On récupère le nom du fichier
                list($width_orig, $height_orig) = getimagesize($filename); // On récupère la taille de notre fichier (l'image)
 
                if($width_orig >= 500 && $height_orig >= 500 && $width_orig <= 6000 && $height_orig <= 6000){ // On vérifie que la taille de l'image et correcte
 
                    $ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif');
                    $ListeExtensionIE = array('jpg' => 'image/pjpg', 'jpeg'=>'image/pjpeg');
                    $tailleMax = 5242880; // Taille maximum 5 Mo
                    // 2mo  = 2097152
                    // 3mo  = 3145728
                    // 4mo  = 4194304
                    // 5mo  = 5242880
                    // 7mo  = 7340032
                    // 10mo = 10485760
                    // 12mo = 12582912
                    $extensionsValides = array('jpg','jpeg'); // Format accepté
 
                    if ($_FILES['file']['size'] <= $tailleMax){ // Si le fichier et bien de taille inférieur ou égal à 5 Mo
 
                        $extensionUpload = strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1)); // Prend l'extension après le point, soit "jpg, jpeg ou png"
 
                        if (in_array($extensionUpload, $extensionsValides)){ // Vérifie que l'extension est correct
 
                            $dossier = "public/avatars/" . $_SESSION['id'] . "/"; // On se place dans le dossier de la personne 
 
                            if (!is_dir($dossier)){ // Si le nom de dossier n'existe pas alors on le crée
                                mkdir($dossier);
                            }else{
                                if(file_exists("public/avatars/". $_SESSION['id'] . "/" . $_SESSION['avatar']) && isset($_SESSION['avatar'])){
                                    unlink("public/avatars/". $_SESSION['id'] . "/" . $_SESSION['avatar']);
                                }
                            }
 
                            $nom = md5(uniqid(rand(), true)); // Permet de générer un nom unique à la photo
                            $chemin = "public/avatars/" . $_SESSION['id'] . "/" . $nom . "." . $extensionUpload; // Chemin pour placer la photo
                            $resultat = move_uploaded_file($_FILES['file']['tmp_name'], $chemin); // On fini par mettre la photo dans le dossier
 
                            if ($resultat){ // Si on a le résultat alors on va comprésser l'image
 
                                if (is_readable("public/avatars/" . $_SESSION['id'] . "/" .$nom . "." . $extensionUpload)) {
                                    $verif_ext = getimagesize("public/avatars/" . $_SESSION['id'] . "/" .$nom . "." . $extensionUpload);
 
                                    // Vérification des extensions avec la liste des extensions autorisés
                                    if($verif_ext['mime'] == $ListeExtension[$extensionUpload]  || $verif_ext['mime'] == $ListeExtensionIE[$extensionUpload]){              
                                        // J'enregistre le chemin de l'image dans filename
                                        $filename = "public/avatars/" . $_SESSION['id'] . "/" .$nom . "." . $extensionUpload;
 
                                        // Vérification des extensions que je souhaite prendre
                                        if($extensionUpload == 'jpg' || $extensionUpload == 'jpeg' || $extensionUpload == "pjpg" || $extensionUpload == 'pjpeg'){       
                                            $image2 = imagecreatefromjpeg($filename);
                                        }
 
                                        // Définition de la largeur et de la hauteur maximale
                                        $width2 = 720;
                                        $height2 = 720;
 
                                        list($width_orig, $height_orig) = getimagesize($filename);
 
                                        // Redimensionnement
                                        $image_p2 = imagecreatetruecolor($width2, $height2);
                                        imagealphablending($image_p2, false);
                                        imagesavealpha($image_p2, true);
 
                                        // Cacul des nouvelles dimensions
                                        $point2 = 0;
                                        $ratio = null;
                                        if($width_orig <= $height_orig){
                                            $ratio = $width2 / $width_orig;
                                        }else if($width_orig > $height_orig){
                                            $ratio = $height2 / $height_orig;
                                        }
 
                                        $width2 = ($width_orig * $ratio) + 1;
                                        $height2 = ($height_orig * $ratio) + 1; 
 
                                        imagecopyresampled($image_p2, $image2, 0, 0, $point2, 0, $width2, $height2, $width_orig, $height_orig);
                                        imagedestroy($image2);
 
                                        if($extensionUpload == 'jpg' || $extensionUpload == 'jpeg' || $extensionUpload == "pjpg" || $extensionUpload == 'pjpeg'){
 
                                            // Content type
                                            header('Content-Type: image/jpeg'); // Important !!
 
                                            $exif = exif_read_data($filename);
                                            if(!empty($exif['Orientation'])) {
                                                switch($exif['Orientation']) { 
                                                    case 8:
                                                        $image_p2 = imagerotate($image_p2,90,0);
                                                    break;
                                                    case 3:
                                                        $image_p2 = imagerotate($image_p2,180,0);
 
                                                    break;
                                                    case 6:
                                                        $image_p2 = imagerotate($image_p2,-90,0);
 
                                                    break;
                                                }
                                            }
                                            // Affichage
                                            imagejpeg($image_p2, "public/avatars/" . $_SESSION['id'] . "/" . $nom . "." . $extensionUpload, 75);
                                            imagedestroy($image_p2);
                                        }
 
                                        $DB->insert("UPDATE utilisateur SET avatar = ? WHERE  id = ?", 
                                            array(($nom.".".$extensionUpload), $_SESSION['id']));
 
                                        $_SESSION['avatar'] = ($nom.".".$extensionUpload); // On met à jour l'avatar
 
                                        $_SESSION['flash']['success'] = "Nouvel avatar enregistré !";
                                        header('Location: profil'); // Pour la redirection
                                        exit;
                                    }else{
                                        $_SESSION['flash']['warning'] = "Le type MIME de l'image n'est pas bon";
                                    }
                                } 
                            }else
                                $_SESSION['flash']['error'] = "Erreur lors de l'importation de votre photo.";
 
                        }else
                            $_SESSION['flash']['warning'] = "Votre photo doit être au format jpg.";
 
                    }else
                        $_SESSION['flash']['warning'] = "Votre photo de profil ne doit pas dépasser 5 Mo !";
                }else
                    $_SESSION['flash']['warning'] = "Dimension de l'image minimum 400 x 400 et maximum 6000 x 6000 !";
            }else
                $_SESSION['flash']['warning'] = "Veuillez mettre une image !";       
        }
    }
?>
