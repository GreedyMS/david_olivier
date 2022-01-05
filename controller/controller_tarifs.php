<?php

require_once 'model/model_tarifs.php';

function tarifs()
{
    $barbers_shop = get_barber();
    $mariage_barbes = get_mariage_barbe();
    $mariages = get_mariage();
    $esthetique_coiffure = get_esthetique_coiffure();
    $maquillages = get_maquillage();
    $wishpro = get_wishpro();
    $starvac = get_starvac();
    $minceur_bio_active = get_minceur_bio();
    $manucures = get_manucure();
    $retouches_microblading = get_retouches_microblading();
    $microblading = get_microblading();
    $modelages = get_modelage();
    $maillot_forfait_h = get_epilations_maillot_forfait_h();
    $maillot_forfait_f = get_epilations_maillot_forfait_f();
    $maillot_service_h = get_epilations_maillot_service_h();
    $maillot_service_f = get_epilations_maillot_service_f();
    $epilation_forfait_h = get_epilations_forfait_h();
    $epilation_forfait_f = get_epilations_forfait_f();
    $epilations_service_h = get_epilations_service_h();
    $epilations_service_f = get_epilations_service_f();
    $soins_corps = get_soins_corps();
    $soins_visage = get_soins_visage();
    $forfaits_coiff_kids = get_forfaits_enfants();
    $forfaits_coiff_homme = get_forfait_coiffure_homme();
    $services_coiff_femme = get_service_coiffure_femme();
    $forfaits_coiff_femme = get_forfait_coiffure_femme();
    require 'views/tarifs.php';
}

function views_tarifs_admin()
{
    $prestations = get_all_prestations();
    require 'views/admin_tarifs.php';
}

function ajout_presta($nom_prestation, $prix, $duree, $details, $titre, $offre, $category)
{
    ajouter_prestations($nom_prestation, $prix, $duree, $details, $titre, $offre, $category);
    require 'views/redirection_presta.php';
}

function supprimer_prestation($id)
{

    delete_prestation_by_id($id);
    $prestations = get_all_prestations();
    require 'views/admin_tarifs.php';
}

function modifie_prestation($nom_prestation, $prix, $duree, $details, $titre, $offre, $category, $id)
{

    modifier_marque($nom_prestation, $prix, $duree, $details, $titre, $offre, $category, $id);
    $prestations = get_all_prestations();
    require 'views/redirection_presta.php';
}

function obtenir_prestation($id)
{

    return get_prestation_by_id($id);
}
