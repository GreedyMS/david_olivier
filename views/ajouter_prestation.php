<?php
if (!isset($_SESSION['login']) || (!isset($_SESSION['pwd']))) {
    header('location: index.php');
    exit();
}

$title = "David Olivier - Administration";
ob_start();
?>

<h1 class="my-3 d-flex justify-content-center">Ajout d'une prestation ou d'un service</h1>
<div id="warning" class="my-5 d-flex justify-content-center flex-column">
    <h3>! Attention !</h3>
    <h4 class="d-flex justify-content-center">Les champs avec un * sont obligatoires. Pensez à vérifier les informations saisies car une erreur ou un oubli pourrait impacter la page des tarifs.</h4>
</div>
<form action="index.php?action=insert_prestation" method="POST" id="form_marque" class="d-flex justify-content-center flex-column">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nom de la prestation</span>
        <input name="nom_prestation" type="text" class="form-control" placeholder='Exemple : "Coupe Dame"' aria-label="" aria-describedby="basic-addon1">*
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Prix</span>
        <input name="prix" type="text" class="form-control" placeholder='Exemple : "30"' aria-label="" aria-describedby="basic-addon1">
        <span class="input-group-text">€</span>*
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Durée</span>
        <input name="duree" type="text" class="form-control" placeholder='Exemple : "30 min", "1h30"' aria-label="" aria-describedby="basic-addon1">
    </div>
    <div class="mb-3 input-group">
        <span class="input-group-text">Détails</span>
        <textarea name="detail_prestation" placeholder='Exemple : "Shampoing, coupe"' rows="6" cols="60" class="form-control"></textarea>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Titre</label>
        <select class="form-select" name="titre" id="inputGroupSelect01">
            <option value="femme">Femme</option>
            <option value="homme">Homme</option>
            <option value="homme_femme">Homme + Femme</option>
            <option value="enfant">Enfant</option>
        </select>*
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Offre</label>
        <select class="form-select" name="offre" id="inputGroupSelect01">
            <option value="forfait">Forfait</option>
            <option value="service">Service</option>
        </select>*
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
        <select class="form-select" name="category" id="inputGroupSelect01">
            <option value="coiffure">Coiffure</option>
            <option value="esthetique">Esthétique</option>
            <option value="esthetique_coiffure">Esthétique + Coiffure</option>
            <option value="barber">Barber</option>
            <option value="modelage">Modelage</option>
            <option value="maquillage">Maquillage</option>
            <option value="manucure">Manucure</option>
            <option value="soin_corps">Soin Corps</option>
            <option value="soin_visage">Soin Visage</option>
            <option value="epilation">Epilations</option>
            <option value="microblading">Microblading</option>
            <option value="minceur_bio_active">Minceur Bio Active</option>
            <option value="starvac">Starvac</option>
            <option value="wishpro">WishPro</option>
            <option value="mariage">Mariage</option>
        </select>*
    </div>
    <div id="buttons" class="mb-5 d-flex justify-content-around">
        <button type="submit" class="py-1 btn btn-primary">Valider</button>
        <a href="index.php?action=admin_tarifs" class="mt-2 btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Annuler</a>
    </div>
</form>

<?php
$content = ob_get_clean();
include "baselayout_admin.php";
?>