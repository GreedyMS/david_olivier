<?php
if (!isset($_SESSION['login']) || (!isset($_SESSION['pwd']))) {
    header('location: index.php');
    exit();
}

$title = "David Olivier - Administration";
ob_start();
?>

<h4 class="my-5 d-flex justify-content-center">Vous pouvez modifier les images et les textes de la page d'acceuil</h4>

<div class="container">
    <?php
    foreach ($accueil as $index => $accueils) { ?>
        <form action="index.php?action=insert_accueil" method="POST" enctype="multipart/form-data" id="monform" class="d-flex justify-content-center flex-column">
            <table class="d-flex justify-content-center">
                <tr class="mb-3 mx-5 input-group">
                    <span class="input-group-text">Texte Coiffure</span>
                    <textarea name="text_coiffure" rows="6" cols="60" class="form-control"><?= $accueils['text_coiffure'] ?></textarea>
                </tr>
                <tr class="mb-3">
                    <label for="formFileLg" class="form-label">Image Coiffure</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="img_coiffure" type="file">
                </tr>
                <tr class="mb-3 mx-5 input-group">
                    <span class="input-group-text">Texte Esthétique</span>
                    <textarea name="text_esth" rows="6" cols="60" class="form-control"><?= $accueils['text_esth'] ?></textarea>
                </tr>
                <tr class="mb-3">
                    <label for="formFileLg" class="form-label">Image Esthétique</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="img_esth" type="file">
                </tr>
                <tr class="mb-3 mx-5 input-group">
                    <span class="input-group-text">Texte Barber Shop</span>
                    <textarea name="text_barber" rows="6" cols="60" class="form-control"><?= $accueils['text_barber'] ?></textarea>
                </tr>
                <tr class="mb-3">
                    <label for="formFileLg" class="form-label">Image BarberShop</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="img_barber" type="file">
                </tr>
            </table>
            <div id="button_admin" class="my-5 d-flex justify-content-around">
                <button type="button" class="btn btn-secondary">Prévisualiser</button>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
include "baselayout_admin.php";
?>