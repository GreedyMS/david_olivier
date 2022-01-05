<?php
if (!isset($_SESSION['login']) || (!isset($_SESSION['pwd']))) {
    header('location: index.php');
    exit();
}

$title = "David Olivier - Administration";
ob_start();
?>

<h1 class="my-3 d-flex justify-content-center">Modifier une Marque</h1>
<form action="index.php?action=update_marque&id=<?= $marques['id'] ?>" enctype="multipart/form-data" method="POST" id="form_modif_marque" class="d-flex justify-content-center flex-column">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nom de la marque</span>
        <input name="name_marque" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" value="<?= $marques["name_marque"] ?>">
    </div>
    <div class="mb-3">
        <label for="formFileLg" class="form-label">Image de la marque</label>
        <input class="form-control form-control-lg" id="formFileLg" name="img_marque" type="file">
    </div>
    <div class="mb-3 input-group">
        <span class="input-group-text">Description de la marque</span>
        <textarea name="description_marque" rows="6" cols="60" class="form-control" aria-label=""><?= $marques["description_marque"] ?></textarea>
    </div>
    <input type="hidden" name="cache" value="<?= $marques["id"] ?>">
    <div id="buttons" class="d-flex justify-content-around">
        <button type="submit" class="py-1 btn btn-primary">Valider</button>
        <a href="index.php?action=admin_marques" class="mt-2 btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Annuler</a>
    </div>
</form>

<?php
$content = ob_get_clean();
include "baselayout_admin.php";
?>