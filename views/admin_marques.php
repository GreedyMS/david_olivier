<?php
if (!isset($_SESSION['login']) || (!isset($_SESSION['pwd']))) {
    header('location: index.php');
    exit();
}

$title = "David Olivier - Administration";
ob_start();
?>

<h4 class="my-5 d-flex justify-content-center">Vous pouvez ajouter ou modifier les images et les descriptions des marques</h4>

<table class="tableau_marque">
    <tr>
        <th> ID Marque </th>
        <th> Label Marque </th>
        <th> Image </th>
        <th> Description </th>
        <th> Suppression </th>
    </tr>
    <?php
    foreach ($marques as $marque) {
    ?>
        <tr>
            <td class="colid"><?= $marque["id"] ?></td>
            <td> <a href="index.php?action=modif&id=<?= $marque["id"] ?>"> <?= $marque["name_marque"] ?></a></td>
            <td> <img src="img_upload/<?= $marque["img_marque"] ?>" id="img_marque" alt="" srcset=""> </td>
            <td> <?= $marque["description_marque"] ?></td>
            <td class="colsuppr"><a href="#modal_suppr&id=<?= $marque["id"] ?>">Supprimer</a></td>




            <div id="modal_suppr&id=<?= $marque["id"] ?>" class="modal">
                <div class="modal_content">
                    <h1>Attention</h1>
                    <p>Vérifier bien que les données que vous allez effacer sont celles voulu</p>
                    <p>ID : <?= $marque["id"] ?></p>
                    <p>Label : <?= $marque["name_marque"] ?></p>
                    <p>Image : <?= $marque["img_marque"] ?></p>
                    <p>Description : <?= $marque["description_marque"] ?></p>
                    <div class="d-flex flex-column">
                        <a href="index.php?action=suppr&id=<?= $marque["id"] ?>" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Supprimer</a>
                        <a href="#" class="mt-2 btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Annuler</a>
                    </div>
                </div>
            </div>
        </tr>
    <?php
    }
    ?>

    <tr>
        <td id='montd' colspan='5'><a href="index.php?action=add">Ajouter une Marque</a></td>
    </tr>
</table>



<?php
$content = ob_get_clean();
include "baselayout_admin.php";
?>