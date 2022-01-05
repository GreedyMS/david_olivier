<?php
$title = "David Olivier - Nos marques";
ob_start()
?>

<div class="container-fluid">

    <h1 id="titre_marque" class="mb-5 d-flex justify-content-center">Nos marques</h1>

    <div id="div_produit" class="d-flex justify-content-around flex-wrap">
        <?php
        foreach ($marques as $marque) { ?>
            <div id="produit" class="m-3 mb-5 d-flex col-3 flex-column">
                <img src="img_upload\<?= $marque["img_marque"] ?>" id="img_marque" alt="" srcset="">
                <h3 id="titre" class="d-flex justify-content-center"><?= $marque["name_marque"] ?></h3>
                <p id="description" class="p-2"><?= $marque["description_marque"] ?></p>
            </div>
        <?php } ?>
    </div>
</div>


<?php
$content = ob_get_clean();
include "baselayout.php";
?>