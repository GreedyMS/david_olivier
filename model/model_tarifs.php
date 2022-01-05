<?php

include_once "_classes/database.class.php";

// Création de la liste des Prestations
function get_all_prestations()
{

    $pdo = Database::connect();
    $prestations = array();
    $sql = "SELECT * from prestations_tarifs";

    foreach ($pdo->query($sql) as $row) {
        $prestations[] = $row;
    }
    return $prestations;
}

function ajouter_prestations($nom_prestation, $prix, $duree, $details, $titre, $offre, $category)
{

    $pdo = Database::connect();
    $sql = "INSERT INTO prestations_tarifs(nom_prestation, prix, duree, details, titre, offre, category) VALUES (:nom, :prix, :duree, :details, :titre, :offre, :category)";
    $reponse = $pdo->prepare($sql);
    $reponse->bindParam(':nom', $nom_prestation);
    $reponse->bindParam(':prix', $prix);
    $reponse->bindParam(':duree', $duree);
    $reponse->bindParam(':details', $details);
    $reponse->bindParam(':titre', $titre);
    $reponse->bindParam(':offre', $offre);
    $reponse->bindParam(':category', $category);
    $reponse->execute();
}

// Suppression d'une marque par id
function delete_prestation_by_id($id)
{

    $pdo = Database::connect();
    $sql = " DELETE FROM prestations_tarifs WHERE id = :id ";
    $reponse = $pdo->prepare($sql);
    $reponse->bindValue(":id", intval($_GET["id"]), PDO::PARAM_INT);
    $reponse->execute();
}

function modifier_prestation($nom_prestation, $prix, $duree, $details, $titre, $offre, $category, $id)
{

    $pdo = Database::connect();
    $sql = "UPDATE prestations_tarifs SET nom_prestation = :nom , prix = :prix, duree = :duree, details = :details, titre = :titre, offre = :offre, category = :category WHERE id = :id";
    $reponse = $pdo->prepare($sql);
    $reponse->bindParam(':nom', $nom_prestation);
    $reponse->bindParam(':prix', $prix);
    $reponse->bindParam(':duree', $duree);
    $reponse->bindParam(':details', $details);
    $reponse->bindParam(':titre', $titre);
    $reponse->bindParam(':offre', $offre);
    $reponse->bindParam(':category', $category);
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
}

function get_prestation_by_id($id)
{

    $pdo = Database::connect();
    $sql = "SELECT * from prestations_tarifs WHERE id = :id";
    $reponse = $pdo->prepare($sql);
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
    return $reponse->fetch();
}

function get_forfait_coiffure_femme()
{
    $pdo = Database::connect();
    $forfaits_coiffure = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'femme' AND offre = 'forfait' AND category = 'coiffure'";

    foreach ($pdo->query($sql) as $row) {
        $forfaits_coiffure[] = $row;
    }
    return $forfaits_coiffure;
}

function get_service_coiffure_femme()
{
    $pdo = Database::connect();
    $services_coiffure = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'femme' AND offre = 'service' AND category = 'coiffure'";

    foreach ($pdo->query($sql) as $row) {
        $services_coiffure[] = $row;
    }
    return $services_coiffure;
}

function get_forfait_coiffure_homme()
{
    $pdo = Database::connect();
    $forfaits_coiffure_h = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'homme' AND offre = 'forfait' AND category = 'coiffure'";

    foreach ($pdo->query($sql) as $row) {
        $forfaits_coiffure_h[] = $row;
    }
    return $forfaits_coiffure_h;
}

function get_forfaits_enfants()
{
    $pdo = Database::connect();
    $forfaits_enfants = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'enfant' AND offre = 'forfait' AND category = 'coiffure'";

    foreach ($pdo->query($sql) as $row) {
        $forfaits_enfants[] = $row;
    }
    return $forfaits_enfants;
}

function get_soins_visage()
{
    $pdo = Database::connect();
    $soins_visage = array();
    $sql = "SELECT * from prestations_tarifs WHERE offre = 'forfait' AND category = 'soin_visage'";

    foreach ($pdo->query($sql) as $row) {
        $soins_visage[] = $row;
    }
    return $soins_visage;
}

function get_soins_corps()
{
    $pdo = Database::connect();
    $soins_corps = array();
    $sql = "SELECT * from prestations_tarifs WHERE offre = 'forfait' AND category = 'soin_corps'";

    foreach ($pdo->query($sql) as $row) {
        $soins_corps[] = $row;
    }
    return $soins_corps;
}

function get_epilations_service_f()
{
    $pdo = Database::connect();
    $epilations_service_f = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'femme' AND offre = 'service' AND category = 'epilation'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_service_f[] = $row;
    }
    return $epilations_service_f;
}

function get_epilations_service_h()
{
    $pdo = Database::connect();
    $epilations_service_h = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'homme' AND offre = 'service' AND category = 'epilation'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_service_h[] = $row;
    }
    return $epilations_service_h;
}

function get_epilations_forfait_f()
{
    $pdo = Database::connect();
    $epilations_forfait_f = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'femme' AND offre = 'forfait' AND category = 'epilation'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_forfait_f[] = $row;
    }
    return $epilations_forfait_f;
}

function get_epilations_forfait_h()
{
    $pdo = Database::connect();
    $epilations_forfait_h = array();
    $sql = "SELECT * from prestations_tarifs WHERE titre = 'femme' AND offre = 'forfait' AND category = 'epilation'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_forfait_h[] = $row;
    }
    return $epilations_forfait_h;
}

function get_epilations_maillot_service_f()
{
    $pdo = Database::connect();
    $epilations_maillot_service_f = array();
    $sql = "SELECT * from prestations_autres WHERE prestation = 'epilation_maillot' AND titre = 'femme' AND category = 'service'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_maillot_service_f[] = $row;
    }
    return $epilations_maillot_service_f;
}

function get_epilations_maillot_service_h()
{
    $pdo = Database::connect();
    $epilations_maillot_service_h = array();
    $sql = "SELECT * from prestations_autres WHERE prestation = 'epilation_maillot' AND titre = 'homme' AND category = 'service'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_maillot_service_h[] = $row;
    }
    return $epilations_maillot_service_h;
}

function get_epilations_maillot_forfait_f()
{
    $pdo = Database::connect();
    $epilations_maillot_forfait_f = array();
    $sql = "SELECT * from prestations_autres WHERE prestation = 'epilation_maillot' AND titre = 'femme' AND category = 'forfait'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_maillot_forfait_f[] = $row;
    }
    return $epilations_maillot_forfait_f;
}

function get_epilations_maillot_forfait_h()
{
    $pdo = Database::connect();
    $epilations_maillot_forfait_h = array();
    $sql = "SELECT * from prestations_autres WHERE prestation = 'epilation_maillot' AND titre = 'homme' AND category = 'forfait'";

    foreach ($pdo->query($sql) as $row) {
        $epilations_maillot_forfait_h[] = $row;
    }
    return $epilations_maillot_forfait_h;
}

function get_modelage()
{
    $pdo = Database::connect();
    $modelages = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'modelage'";

    foreach ($pdo->query($sql) as $row) {
        $modelages[] = $row;
    }
    return $modelages;
}

function get_microblading()
{
    $pdo = Database::connect();
    $microblading = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'microblading'";

    foreach ($pdo->query($sql) as $row) {
        $microblading[] = $row;
    }
    return $microblading;
}

function get_retouches_microblading()
{
    $pdo = Database::connect();
    $retouches_microblading = array();
    $sql = "SELECT * from prestations_autres WHERE prestation = 'retouche_microblading'";

    foreach ($pdo->query($sql) as $row) {
        $retouches_microblading[] = $row;
    }
    return $retouches_microblading;
}

function get_manucure()
{
    $pdo = Database::connect();
    $manucures = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'manucure'";

    foreach ($pdo->query($sql) as $row) {
        $manucures[] = $row;
    }
    return $manucures;
}

function get_minceur_bio()
{
    $pdo = Database::connect();
    $minceur_bio = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'minceur_bio_active'";

    foreach ($pdo->query($sql) as $row) {
        $minceur_bio[] = $row;
    }
    return $minceur_bio;
}

function get_starvac()
{
    $pdo = Database::connect();
    $starvac = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'starvac'";

    foreach ($pdo->query($sql) as $row) {
        $starvac[] = $row;
    }
    return $starvac;
}

function get_wishpro()
{
    $pdo = Database::connect();
    $wishpro = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'wishpro'";

    foreach ($pdo->query($sql) as $row) {
        $wishpro[] = $row;
    }
    return $wishpro;
}

function get_maquillage()
{
    $pdo = Database::connect();
    $maquillage = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'maquillage'";

    foreach ($pdo->query($sql) as $row) {
        $maquillage[] = $row;
    }
    return $maquillage;
}

function get_esthetique_coiffure()
{
    $pdo = Database::connect();
    $esthetique_coiffure = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'esthetique_coiffure'";

    foreach ($pdo->query($sql) as $row) {
        $esthetique_coiffure[] = $row;
    }
    return $esthetique_coiffure;
}

function get_mariage()
{
    $pdo = Database::connect();
    $mariage = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'mariage'";

    foreach ($pdo->query($sql) as $row) {
        $mariage[] = $row;
    }
    return $mariage;
}

function get_mariage_barbe()
{
    $pdo = Database::connect();
    $mariage_barbe = array();
    $sql = "SELECT * from prestations_autres WHERE prestation = 'mariage_barbe'";

    foreach ($pdo->query($sql) as $row) {
        $mariage_barbe[] = $row;
    }
    return $mariage_barbe;
}

function get_barber()
{
    $pdo = Database::connect();
    $barber = array();
    $sql = "SELECT * from prestations_tarifs WHERE category = 'barber'";

    foreach ($pdo->query($sql) as $row) {
        $barber[] = $row;
    }
    return $barber;
}
