<?php
if (!isset($_SESSION['login']) || (!isset($_SESSION['pwd']))) {
    header('location: index.php');
    exit();
}

$title = "David Olivier - Administration";
ob_start();
?>
<div class="container">
    <h1 class="mt-5 d-flex justify-content-center">Administration des prestations et services</h1>
    <table class="mt-5 tableau_marque">
        <tr>
            <th> ID Prestation </th>
            <th> Intituler de la prestation </th>
            <th> Prix </th>
            <th> Durée </th>
            <th> Details de la prestation </th>
            <th> Titre </th>
            <th> Offre </th>
            <th> Categories </th>
        </tr>
        <?php
        foreach ($prestations as $prestation) {
        ?>
            <tr>
                <td class="colid"><?= $prestation["id"] ?></td>
                <td><a href="index.php?action=modif_prestation&id=<?= $prestation["id"] ?>"><?= $prestation["nom_prestation"] ?></a></td>
                <td><?= $prestation["prix"] ?></td>
                <td><?= $prestation["duree"] ?></td>
                <td><?= $prestation["details"] ?></td>
                <td><?= $prestation["titre"] ?></td>
                <td><?= $prestation["offre"] ?></td>
                <td><?= $prestation["category"] ?></td>
                <td class="colsuppr"><a href="#modal_suppr_prest&id=<?= $prestation["id"] ?>">Supprimer</a></td>




                <div id="modal_suppr_prest&id=<?= $prestation["id"] ?>" class="modal">
                    <div class="modal_content">
                        <h1>Attention</h1>
                        <p>Vérifier bien que les données que vous allez effacer sont celles voulu</p>
                        <p>ID : <?= $prestation["id"] ?></p>
                        <p>Label : <?= $prestation["nom_prestation"] ?></p>
                        <p>Prix : <?= $prestation["prix"] ?></p>
                        <p>Durée : <?= $prestation["duree"] ?></p>
                        <p>Détails : <?= $prestation["details"] ?></p>
                        <p>Description : <?= $prestation["duree"] ?></p>
                        <p>Offre : <?= $prestation["offre"] ?></p>
                        <p>Categorie : <?= $prestation["category"] ?></p>
                        <div class="d-flex flex-column">
                            <a href="index.php?action=suppr_prestation&id=<?= $prestation["id"] ?>" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Supprimer</a>
                            <a href="#" class="mt-2 btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Annuler</a>
                        </div>
                    </div>
                </div>
            </tr>
        <?php
        }
        ?>

        <tr>
            <td id='montd' colspan='9'><a href="index.php?action=add_prest">Ajouter une Prestation ou un Service</a></td>
        </tr>
    </table>
</div>

<?php
$content = ob_get_clean();
include "baselayout_admin.php";
?>