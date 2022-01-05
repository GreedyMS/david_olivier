<?php
if (!isset($_SESSION['login']) || (!isset($_SESSION['pwd']))) {
    header('location: index.php');
    exit();
}

$title = "David Olivier - Administration";
ob_start();
?>
<div class="container">
    <h1 class="my-3 d-flex justify-content-center">Modifier une Prestation</h1>
    <form action="index.php?action=update_prestation&id=<?= $prestation['id'] ?>" method="POST" id="form_modif_presta" class="d-flex justify-content-center flex-column">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nom de la prestation</span>
            <input name="nom_prestation" type="text" class="form-control" value="<?= $prestation['nom_prestation'] ?>" placeholder='Exemple : "Coupe Dame"' aria-label="" aria-describedby="basic-addon1">*
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Prix</span>
            <input name="prix" type="text" class="form-control" value="<?= $prestation['prix'] ?>" placeholder='Exemple : "30"' aria-label="" aria-describedby="basic-addon1">
            <span class="input-group-text">€</span>*
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Durée</span>
            <input name="duree" type="text" class="form-control" value="<?= $prestation['duree'] ?>" placeholder='Exemple : "30 min", "1h30"' aria-label="" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3 input-group">
            <span class="input-group-text">Détails</span>
            <textarea name="detail_prestation" placeholder='Exemple : "Shampoing, coupe"' rows="6" cols="60" class="form-control"><?= $prestation['details'] ?></textarea>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Titre</label>
            <select class="form-select" value="<?= $prestation['titre'] ?>" name="titre" id="inputGroupSelect01">
                <option value="femme" <?php if ($prestation['titre'] == "femme") echo "selected='selected'"; ?>>Femme</option>
                <option value="homme" <?php if ($prestation['titre'] == "homme") echo "selected='selected'"; ?>>Homme</option>
                <option value="homme_femme" <?php if ($prestation['titre'] == "homme_femme") echo "selected='selected'"; ?>>Homme + Femme</option>
                <option value="enfant" <?php if ($prestation['titre'] == "enfant") echo "selected='selected'"; ?>>Enfant</option>
            </select>*
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Offre</label>
            <select class="form-select" name="offre" id="inputGroupSelect01">
                <option value="forfait" <?php if ($prestation['offre'] == "forfait") echo "selected='selected'"; ?>>Forfait</option>
                <option value="service" <?php if ($prestation['offre'] == "service") echo "selected='selected'"; ?>>Service</option>
            </select>*
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
            <select class="form-select" name="category" id="inputGroupSelect01">
                <option value="coiffure" <?php if ($prestation['category'] == "coiffure") echo "selected='selected'"; ?>>Coiffure</option>
                <option value="esthetique" <?php if ($prestation['category'] == "esthetique") echo "selected='selected'"; ?>>Esthétique</option>
                <option value="esthetique_coiffure" <?php if ($prestation['category'] == "esthetique_coiffure") echo "selected='selected'"; ?>>Esthétique + Coiffure</option>
                <option value="barber" <?php if ($prestation['category'] == "barber") echo "selected='selected'"; ?>>Barber</option>
                <option value="modelage" <?php if ($prestation['category'] == "modelage") echo "selected='selected'"; ?>>Modelage</option>
                <option value="maquillage" <?php if ($prestation['category'] == "maquillage") echo "selected='selected'"; ?>>Maquillage</option>
                <option value="manucure" <?php if ($prestation['category'] == "manucure") echo "selected='selected'"; ?>>Manucure</option>
                <option value="soin_corps" <?php if ($prestation['category'] == "soin_corps") echo "selected='selected'"; ?>>Soin Corps</option>
                <option value="soin_visage" <?php if ($prestation['category'] == "soin_visage") echo "selected='selected'"; ?>>Soin Visage</option>
                <option value="epilation" <?php if ($prestation['category'] == "epilation") echo "selected='selected'"; ?>>Epilations</option>
                <option value="microblading" <?php if ($prestation['category'] == "microblading") echo "selected='selected'"; ?>>Microblading</option>
                <option value="minceur_bio_active" <?php if ($prestation['category'] == "minceur_bio_active") echo "selected='selected'"; ?>>Minceur Bio Active</option>
                <option value="starvac" <?php if ($prestation['category'] == "starvac") echo "selected='selected'"; ?>>Starvac</option>
                <option value="wishpro" <?php if ($prestation['category'] == "wishpro") echo "selected='selected'"; ?>>WishPro</option>
                <option value="mariage" <?php if ($prestation['category'] == "mariage") echo "selected='selected'"; ?>>Mariage</option>
            </select>*
        </div>
        <input type="hidden" name="cache" value="<?= $prestation["id"] ?>">
        <div id="buttons" class="mb-5 d-flex justify-content-around">
            <button type="submit" class="py-1 btn btn-primary">Valider</button>
            <a href="index.php?action=admin_tarifs" class="mt-2 btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Annuler</a>
        </div>
    </form>
</div>

<?php
$content = ob_get_clean();
include "baselayout_admin.php";
?>