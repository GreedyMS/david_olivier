<?php
$title = "David Olivier - Accueil";
ob_start();
?>
<div class="container">
    <div id="text-accueil" class="d-flex flex-column justify-content-center">

        <?php
        foreach ($accueil as $index => $accueils) { ?>
            <div id="accueil_1" class="d-flex justify-content-evenly">
                <div id="text_1" class="m-3">
                    <h2 id="titre_accueil">Notre Salon</h2>
                    <p name="text_coiffure"><?= $accueils['text_coiffure'] ?></p>
                </div>

                <div id="img_1" class="m-3">
                    <img name="image_coiffure" src="img_upload/<?= $accueils['picture_coiffure'] ?>" alt="">
                </div>
            </div>

            <div id="accueil_2" class="my-4 d-flex justify-content-evenly">

                <div id="text_2" class="m-3">
                    <h2 id="titre_accueil">Notre Institut</h2>
                    <p name="text_esthetique"><?= $accueils['text_esth'] ?></p>
                </div>

                <div id="img_2" class="m-3">
                    <img name="image_esthetique" src="img_upload/<?= $accueils['picture_esth'] ?>" alt="">
                </div>

            </div>

            <div id="accueil_3" class="my-4 d-flex justify-content-evenly">

                <div id="text_3" class="m-3">
                    <h2 id="titre_accueil">Le Barber Shop</h2>
                    <p name="text_barber"><?= $accueils['text_barber'] ?></p>
                </div>

                <div id="img_3" class="m-3">
                    <img name="image_barber" src="img_upload/<?= $accueils['picture_barber'] ?>" alt="">
                </div>

            </div>
        <?php } ?>
    </div>
</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>