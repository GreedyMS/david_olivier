<?php

require_once 'model/model_login.php';

function connection()
{
    require "views/login.php";
}

function controle_doublon($user)
{
    return controler_doublon($user);
}

function verifie_utilisateur($user)
{
    return verifier_utilisateur($user);
}

function ajoute_utilisateur($user, $pwd)
{
    ajouter_utilisateur($user, $pwd);
}

// Affiche une erreur dans une vue qui centralise toutes les levées d'Exceptions 
// function erreur($msgErreur)
// {
//     require 'views/erreur.php';
// }
