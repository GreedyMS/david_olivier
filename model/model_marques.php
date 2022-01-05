<?php

include_once "_classes/database.class.php";

// Création de la liste des Marques
function get_all_marques()
{

    $pdo = Database::connect();
    $marques = array();
    $sql = "SELECT * from marques";

    foreach ($pdo->query($sql) as $row) {
        $marques[] = $row;
    }
    return $marques;
}

// Suppression d'une marque par id
function delete_marque_by_id($id)
{

    $pdo = Database::connect();
    $sql = " DELETE FROM marques WHERE id = :id ";
    $reponse = $pdo->prepare($sql);
    $reponse->bindValue(":id", intval($_GET["id"]), PDO::PARAM_INT);
    $reponse->execute();
}

function ajouter_marque($name_marque, $img_marque, $description_marque)
{

    $pdo = Database::connect();
    $sql = "INSERT INTO marques(name_marque, img_marque, description_marque) VALUES (:name, :img, :description)";
    $reponse = $pdo->prepare($sql);
    $reponse->bindParam(':name', $name_marque);
    $reponse->bindParam(':img', $img_marque);
    $reponse->bindParam(':description', $description_marque);
    $reponse->execute();
}

function modifier_marque($name, $img, $description, $id)
{

    $pdo = Database::connect();
    $sql = "UPDATE marques SET name_marque = :name , img_marque = :img, description_marque = :description WHERE id = :id";
    $reponse = $pdo->prepare($sql);
    $reponse->bindParam(':name', $name);
    $reponse->bindParam(':img', $img);
    $reponse->bindParam(':description', $description);
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
}

function get_marque_by_id($id)
{

    $pdo = Database::connect();
    $sql = "SELECT * from marques WHERE id = :id";
    $reponse = $pdo->prepare($sql);
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
    return $reponse->fetch();
}
