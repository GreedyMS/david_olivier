<?php

include_once 'controller/controller_horaire_contact.php';
include_once 'controller/controller_tarifs.php';
include_once 'controller/controller_marques.php';
include_once 'controller/controller_accueil.php';
include_once 'controller/controller_login.php';

try {
    session_start();

    if (!isset($_GET["action"])) {

        accueil();
    } else if (isset($_GET["action"])) {

        if ($_GET["action"] === "login") {

            connection();

            // Vérification de la connexion ..
        } else if ($_GET["action"] === "marques") {
            marques();
        } else if ($_GET["action"] === "tarifs") {
            tarifs();
        } else if ($_GET["action"] === "coordonnees") {
            coordonnees();
        } else if ($_GET["action"] === "mentions_legales") {
            mentions_legales();
        } else if ($_GET["action"] === "admin") {

            if (isset($_SESSION['login']) || (isset($_SESSION['pwd']))) {
                admin();
            } else if (!empty($_POST["user"]) && (!empty($_POST["pwd"]))) {

                $pwd = $_POST["pwd"];
                $user = $_POST["user"];
                $resultat = verifie_utilisateur($user);

                if (password_verify($pwd, $resultat["pwd_user"])) {
                    $_SESSION["id"] = $resultat["id_user"];
                    $_SESSION["login"] = $resultat["login_user"];
                    $_SESSION["pwd"] = $resultat["pwd_user"];
                    admin();
                } else {
                    throw new Exception("Mauvais identifiants ou mot de passe");
                }
            } else {
                throw new Exception("La session n'est pas valide, veuillez vous reconnecter");
            }
            // Accueil de l'administration du site web

            // Interface de modification des images et textes de l'accueil
        } else if ($_GET["action"] === "deconnexion") {
            deconnexion();
            // Interface de modification des images et textes de l'accueil
        } else if ($_GET["action"] === "insert_accueil") {


            if (!empty($_POST["text_coiffure"])  && (!empty($_POST["text_esth"])) && (!empty($_POST["text_esth"]))) {

                $array = getAccueil();

                // S'il n'y as aucune image à mettre à jour, alors récupère l'image dans la base de donnée afin de ne pas l'effacer
                // et la réinsère  
                if (empty($_FILES["img_coiffure"]['name'])) {
                    foreach ($array as $index => $arrays) {
                        $img_coiffure = $arrays['picture_coiffure'];
                    }
                    // Sinon insère l'image sélectionné
                } else if (!empty($_FILES['img_coiffure'])) {
                    $tmpName = $_FILES['img_coiffure']['tmp_name'];
                    $name = $_FILES['img_coiffure']['name'];
                    $size = $_FILES['img_coiffure']['size'];
                    $error = $_FILES['img_coiffure']['error'];

                    $tabExtension = explode('.', $name);
                    $extension = strtolower(end($tabExtension));
                    // Tableau des extensions que l'on accepte
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                    // Taille max accepté
                    $maxSize = 40000000;
                    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                        move_uploaded_file($tmpName, './img_upload/' . $name);
                    }
                    $img_coiffure = $_FILES["img_coiffure"]['name'];
                }

                // S'il n'y as aucune image à mettre à jour, alors récupère l'image dans la base de donnée afin de ne pas l'effacer
                // et la réinsère  
                if (empty($_FILES["img_esth"]['name'])) {
                    foreach ($array as $index => $arrays) {
                        $img_esth = $arrays['picture_esth'];
                    }

                    // Sinon insère l'image sélectionné
                } else if (!empty($_FILES['img_esth'])) {
                    $tmpName = $_FILES['img_esth']['tmp_name'];
                    $name = $_FILES['img_esth']['name'];
                    $size = $_FILES['img_esth']['size'];
                    $error = $_FILES['img_esth']['error'];


                    $tabExtension = explode('.', $name);
                    $extension = strtolower(end($tabExtension));
                    // Tableau des extensions que l'on accepte
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                    // Taille max accepté
                    $maxSize = 40000000;
                    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                        move_uploaded_file($tmpName, './img_upload/' . $name);
                    }
                    $img_esth = $_FILES["img_esth"]['name'];
                }

                // S'il n'y as aucune image à mettre à jour, alors récupère l'image dans la base de donnée afin de ne pas l'effacer
                // et la réinsère  
                if (empty($_FILES["img_barber"]['name'])) {
                    foreach ($array as $index => $arrays) {
                        $img_barber = $arrays['picture_barber'];
                    }

                    // Sinon insère l'image sélectionné
                } else if (!empty($_FILES['img_barber'])) {
                    $tmpName = $_FILES['img_barber']['tmp_name'];
                    $name = $_FILES['img_barber']['name'];
                    $size = $_FILES['img_barber']['size'];
                    $error = $_FILES['img_barber']['error'];


                    $tabExtension = explode('.', $name);
                    $extension = strtolower(end($tabExtension));
                    // Tableau des extensions que l'on accepte
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                    // Taille max accepté
                    $maxSize = 40000000;
                    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                        move_uploaded_file($tmpName, './img_upload/' . $name);
                    }
                    $img_barber = $_FILES["img_barber"]['name'];
                }

                $text_barber = $_POST["text_barber"];
                $text_coiffure = $_POST["text_coiffure"];
                $text_esth = $_POST["text_esth"];

                insertAccueil($text_coiffure, $img_coiffure, $text_esth, $img_esth, $text_barber, $img_barber);
                admin();
            }
        } else if ($_GET["action"] === "admin_marques") {
            liste_marques();
        } else if ($_GET["action"] == "suppr") {

            if (isset($_GET["id"])) {
                supprimer_marque($_GET["id"]);
            } else {
                throw new Exception("Aucun identifiant de marque envoyé");
            }
        } else if ($_GET["action"] === "add") {
            require "views/ajouter_marque.php";
        } else if ($_GET["action"] == "insert_marque") {
            if (!empty($_POST["nom_marque"]) && (!empty($_FILES['img_marque'])) && (!empty($_POST['description_marque']))) {

                // Insère l'image sélectionné

                $tmpName = $_FILES['img_marque']['tmp_name'];
                $name = $_FILES['img_marque']['name'];
                $size = $_FILES['img_marque']['size'];
                $error = $_FILES['img_marque']['error'];


                $tabExtension = explode('.', $name);
                $extension = strtolower(end($tabExtension));
                // Tableau des extensions que l'on accepte
                $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                // Taille max accepté
                $maxSize = 40000000;
                if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                    move_uploaded_file($tmpName, './img_upload/' . $name);
                }

                // $img_marque = 'hyezya fezb qufebzyb';
                $img_marque = $_FILES["img_marque"]['name'];
                $name_marque = $_POST["nom_marque"];
                $description_marque = $_POST['description_marque'];

                // Contrôle des données ici avant insertion dans la BDD

                ajout_marque($name_marque, $img_marque, $description_marque);
            } else {
                throw new Exception("Des informations sont manquantes, veuillez vérifier vos entrées.");
            }
        } else if ($_GET["action"] == "modif") {
            $marques = obtenir_marque($_GET["id"]);
            require "views/modifier_marque.php";
        } else if ($_GET["action"] == "update_marque") {

            if (isset($_GET["id"])) {

                if (!empty($_POST["name_marque"])  && (!empty($_POST["description_marque"]))) {

                    $array = obtenir_marque($_GET["id"]);

                    // Récupère le nom de la marque pour la réinsérer dans la BDD
                    // Permet de garder l'image da manière automatique quand on veut modifier seulement le titre ou la description
                    if (empty($_FILES["img_marque"]['name'])) {

                        $img_marque = $array['img_marque'];

                        // Sinon insère l'image sélectionné dans la BDD
                    } else if (!empty($_FILES['img_marque'])) {
                        $tmpName = $_FILES['img_marque']['tmp_name'];
                        $name = $_FILES['img_marque']['name'];
                        $size = $_FILES['img_marque']['size'];
                        $error = $_FILES['img_marque']['error'];


                        $tabExtension = explode('.', $name);
                        $extension = strtolower(end($tabExtension));
                        // Tableau des extensions que l'on accepte
                        $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                        // Taille max accepté
                        $maxSize = 40000000;
                        if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                            move_uploaded_file($tmpName, './img_upload/' . $name);
                        }
                        $img_marque = $_FILES["img_marque"]["name"];
                    }

                    $name_marque = $_POST["name_marque"];
                    $description_marque = $_POST["description_marque"];
                    $id = $_POST["cache"];


                    // Contrôle des données ici avant modification dans la BDD

                    modifie_marque($name_marque, $img_marque, $description_marque, $id);
                    require "views/redirection.php";
                }
            }
        } else if ($_GET["action"] == "admin_tarifs") {
            views_tarifs_admin();
        } else if ($_GET["action"] === "add_prest") {
            require "views/ajouter_prestation.php";
        } else if ($_GET["action"] === "insert_prestation") {
            if (!empty($_POST["nom_prestation"]) && (!empty($_POST["titre"])) && (!empty($_POST["offre"])) && (!empty($_POST["category"]))) {

                $nom_prestation = $_POST["nom_prestation"];
                $prix = $_POST["prix"];
                $duree = $_POST["duree"];
                $details = $_POST["detail_prestation"];
                $titre = $_POST["titre"];
                $offre = $_POST["offre"];
                $category = $_POST["category"];

                ajout_presta($nom_prestation, $prix, $duree, $details, $titre, $offre, $category);
            } else {
                throw new Exception("Des informations sont manquantes, veuillez vérifier vos entrées.");
            }
        } else if ($_GET["action"] == "suppr_prestation") {

            if (isset($_GET["id"])) {
                supprimer_prestation($_GET["id"]);
            } else {
                throw new Exception("Aucun identifiant de marque envoyé");
            }
        } else if ($_GET["action"] == "modif_prestation") {
            $prestation = obtenir_prestation($_GET["id"]);
            require "views/modifier_prestation.php";
        } else if ($_GET["action"] == "update_prestation") {

            if (isset($_GET["id"])) {

                if (!empty($_POST["nom_prestation"]) && (!empty($_POST["titre"])) && (!empty($_POST["offre"])) && (!empty($_POST["category"]))) {

                    $nom_prestation = $_POST["nom_prestation"];
                    $prix = $_POST["prix"];
                    $duree = $_POST["duree"];
                    $details = $_POST["detail_prestation"];
                    $titre = $_POST["titre"];
                    $offre = $_POST["offre"];
                    $category = $_POST["category"];
                    $id = $_POST["cache"];

                    modifier_prestation($nom_prestation, $prix, $duree, $details, $titre, $offre, $category, $id);
                    require "views/redirection_presta.php";
                }
            }
        }
    }
} catch (Exception $e) {

    $msgErreur = $e->getMessage();
    echo erreur($msgErreur);
}
