<?php

require_once 'model/model_accueil.php';

function accueil()
{
    $accueil = getAccueil();
    require "views/accueil.php";
}

// Affiche une erreur dans une vue qui centralise toutes les levées d'Exceptions 
function erreur($msgErreur)
{
    require 'views/erreur.php';
}

function admin()
{
    $accueil = getAccueil();
    require "views/admin_accueil.php";
}

function insertAccueil($text_coiffure, $img_coiffure, $text_esth, $img_esth, $text_barber, $img_barber)
{
    updateTextPicturesHome($text_coiffure, $img_coiffure, $text_esth, $img_esth, $text_barber, $img_barber);
}

function deconnexion()
{
    require "views/redirection_deco.php";
}

function mentions_legales()
{
    require "views/mentions_legales.php";
}
