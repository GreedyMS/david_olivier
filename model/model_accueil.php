<?php

include_once "_classes/database.class.php";

function updateTextPicturesHome($text_coiffure, $img_coiffure, $text_esth, $img_esth, $text_barber, $img_barber)
{
    $pdo = Database::connect();
    $requete = "UPDATE home SET text_coiffure = :text_coiffure, picture_coiffure = :picture_coiffure, text_esth = :text_esth, picture_esth = :picture_esth, text_barber = :text_barber, picture_barber = :picture_barber WHERE id = 1";
    $stmt = $pdo->prepare($requete);
    $stmt->bindParam(':text_coiffure', $text_coiffure);
    $stmt->bindParam(':picture_coiffure', $img_coiffure);
    $stmt->bindParam(':text_esth', $text_esth);
    $stmt->bindParam(':picture_esth', $img_esth);
    $stmt->bindParam(':text_barber', $text_barber);
    $stmt->bindParam(':picture_barber', $img_barber);
    $stmt->execute();

    Database::disconnect();
}

function getAccueil()
{
    $pdo = Database::connect();
    $accueil = array();
    $sql = "SELECT * from home";

    foreach ($pdo->query($sql) as $row) {
        $accueil[] = $row;
    }
    Database::disconnect();
    return $accueil;
}
