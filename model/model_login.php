<?php

include_once "_classes/database.class.php";

function controler_doublon($user)
{
    $connexion = Database::connect();
    $requete = "SELECT * FROM utilisateurs WHERE login_user= :user";
    $stmt = $connexion->prepare($requete);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    if ($result == 0) return false;
    else return true;
}

function ajouter_utilisateur($user, $pwd)
{
    $connexion = Database::connect();
    $requete = "INSERT INTO utilisateurs(login_user, pwd_user) VALUES (:login_user, :pwd_user)";
    $stmt = $connexion->prepare($requete);
    $stmt->bindParam(':login_user', $user);
    $stmt->bindParam(':pwd_user', $pwd);

    $stmt->execute();
}

function verifier_utilisateur($user)
{
    $connexion = Database::connect();
    $requete = "SELECT * FROM utilisateurs WHERE login_user= :user";
    $stmt = $connexion->prepare($requete);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
}
