<?php

require_once 'model/model_marques.php';

function marques()
{
    $marques = get_all_marques();
    require "views/marques.php";
}

function liste_marques()
{

    $marques = get_all_marques();
    require 'views/admin_marques.php';
}

function supprimer_marque($id)
{

    delete_marque_by_id($id);
    $marques = get_all_marques();
    require 'views/admin_marques.php';
}

function ajout_marque($name_marque, $img_marque, $description_marque)
{

    ajouter_marque($name_marque, $img_marque, $description_marque);
    require 'views/redirection.php';
}

function modifie_marque($name_marque, $img_marque, $description_marque, $id)
{

    modifier_marque($name_marque, $img_marque, $description_marque, $id);
    $marques = get_all_marques();
    require 'views/redirection.php';
}

function obtenir_marque($id)
{

    return get_marque_by_id($id);
}
