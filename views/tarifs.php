<?php
$title = "David Olivier - Prestations et tarifs";
ob_start()
?>

<div class="container">

    <!-- NAVIGATION DANS LA PAGE TARIFS ET PRESTATIONS -->

    <nav id="navMenu" class="d-flex justify-content-between">
        <a href="#coiffure">COIFFURE</a>
        <a href="#soin">SOIN</a>
        <a href="#epilation">EPILATION</a>
        <a href="#modelage">MODELAGE / MICROBLADING</a>
        <a href="#manucure">MANUCURE / MINCEUR BIO / STARVAC / WISHPRO</a>
        <a href="#maquillage">MAQUILLAGE / ESTHETIQUE + COIFFURE</a>
        <a href="#mariage">MARIAGE</a>
    </nav>

    <!-- VUE COIFFURE -->

    <h1 class="my-4 ml-2">Salon de Coiffure</h1>
    <div class="d-flex flex-row">
        <div id="prestations_coiffure" class="mx-1">

            <!-- COIFFURE DAME -->

            <h4 id="coiffure">COIFFURE DAME / Les forfaits</h4>
            <?php
            foreach ($forfaits_coiff_femme as $index => $forfaits_coiffure) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation_coiffure" class="d-flex flex-grow-1">
                            <?= $forfaits_coiffure['nom_prestation'] ?>
                        </p>
                        <p id="prix" class="d-flex justify-content-end"><?= $forfaits_coiffure['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $forfaits_coiffure['details'] ?></p>
                </div>
            <?php } ?>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-row">
                    <p class="d-flex flex-grow-1">
                        * Suppléments : Cheveux mi-longs + 2 €, Cheveux longs + 4 €
                    </p>
                </div>
            </div>
        </div>

        <div id="prestations_coiffure" class="mx-1">
            <h4>COIFFURE DAME / Les services</h4>
            <?php
            foreach ($services_coiff_femme as $index => $service_coiffure) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $service_coiffure['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $service_coiffure['prix'] ?></p>
                    </div>
                </div>
            <?php } ?>

            <!-- BARBER SHOP -->

            <h4>BARBER SHOP</h4>
            <?php
            foreach ($barbers_shop as $index => $barber_shop) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $barber_shop['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $barber_shop['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $barber_shop['details'] ?></p>
                </div>
            <?php } ?>
        </div>

        <!-- COIFFURE HOMME -->

        <div id="prestations_coiffure" class="mx-1">
            <h4>COIFFURE HOMME / Les forfaits</h4>
            <?php
            foreach ($forfaits_coiff_homme as $index => $forfaits_coiffure_h) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $forfaits_coiffure_h['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $forfaits_coiffure_h['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $forfaits_coiffure_h['details'] ?></p>
                </div>
            <?php } ?>
            <h4>JUNIOR - 12 ans / Les forfaits</h4>
            <?php
            foreach ($forfaits_coiff_kids as $index => $forfait_coiffure_kids) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $forfait_coiffure_kids['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $forfait_coiffure_kids['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $forfait_coiffure_kids['details'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- VUE ESTHETIQUE -->

    <h1 class="my-4 ml-2">Institut de beauté</h1>
    <div class="d-flex flex-row">
        <div id="prestations_esthetique" class="mx-1">

            <!-- SOIN DU VISAGE -->

            <h4 id="soin">SOIN DU VISAGE Hommes / Femmes</h4>
            <?php
            foreach ($soins_visage as $index => $forfait_soins_visage) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $forfait_soins_visage['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $forfait_soins_visage['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $forfait_soins_visage['details'] ?></p>
                </div>
            <?php } ?>
        </div>

        <div id="prestations_esthetique" class="mx-1">

            <!-- SOIN DU CORPS -->

            <h4>SOIN DU CORPS Hommes / Femmes</h4>
            <?php
            foreach ($soins_corps as $index => $forfait_soins_corps) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $forfait_soins_corps['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $forfait_soins_corps['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $forfait_soins_corps['details'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="d-flex flex-row">
        <div id="prestations_esthetique" class="mx-1">

            <!-- EPILATIONS -->

            <h4 id="epilation">EPILATIONS FEMMES / Les services</h4>
            <?php
            foreach ($epilations_service_f as $index => $epilations_service_femme) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $epilations_service_femme['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $epilations_service_femme['prix'] ?></p>
                    </div>
                </div>
            <?php } ?>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-column">
                    <p id="prestation" class="d-flex flex-grow-1">Maillot</p>
                    <?php
                    foreach ($maillot_service_f as $index => $maillot_service_femme) {
                    ?>
                        <div class="d-flex">
                            <p class="d-flex justify-content-start flex-grow-1"><?= $maillot_service_femme['style'] ?></p>
                            <p id="prix" class="d-flex justify-content-end"><?= $maillot_service_femme['prix'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-row">
                    <p id="prestation" class="d-flex flex-grow-1">Suppléments épilation au fil du visage</p>
                    <p id="prix" class="d-flex justify-content-end">5</p>
                </div>
            </div>
            <h4>EPILATIONS FEMMES / Les forfaits</h4>
            <?php
            foreach ($epilation_forfait_f as $index => $epilation_forfait_femme) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $epilation_forfait_femme['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $epilation_forfait_femme['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $epilation_forfait_femme['details'] ?></p>
                </div>
            <?php } ?>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-column">
                    <p id="prestation" class="d-flex flex-grow-1">Maillot</p>
                    <?php
                    foreach ($maillot_forfait_f as $index => $maillot_forfait_femme) {
                    ?>
                        <div class="d-flex">
                            <p class="d-flex justify-content-start flex-grow-1"><?= $maillot_forfait_femme['style'] ?></p>
                            <p id="prix" class="d-flex justify-content-end"><?= $maillot_forfait_femme['prix'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div id="prestations_esthetique" class="mx-1">
            <h4>EPILATIONS HOMMES / Les services</h4>
            <?php
            foreach ($epilations_service_h as $index => $epilations_service_homme) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $epilations_service_homme['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $epilations_service_homme['prix'] ?></p>
                    </div>
                </div>
            <?php } ?>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-column">
                    <p id="prestation" class="d-flex flex-grow-1">Maillot</p>
                    <?php
                    foreach ($maillot_service_h as $index => $maillot_service_homme) {
                    ?>
                        <div class="d-flex">
                            <p class="d-flex justify-content-start flex-grow-1"><?= $maillot_service_homme['style'] ?></p>
                            <p id="prix" class="d-flex justify-content-end"><?= $maillot_service_homme['prix'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-row">
                    <p id="prestation" class="d-flex flex-grow-1">Suppléments épilation au fil du visage</p>
                    <p id="prix" class="d-flex justify-content-end">5</p>
                </div>
            </div>
            <h4>EPILATIONS HOMMES / Les forfaits</h4>
            <?php
            foreach ($epilation_forfait_h as $index => $epilation_forfait_homme) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $epilation_forfait_homme['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $epilation_forfait_homme['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $epilation_forfait_homme['details'] ?></p>
                </div>
            <?php } ?>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-column">
                    <p id="prestation" class="d-flex flex-grow-1">Maillot</p>
                    <?php
                    foreach ($maillot_forfait_h as $index => $maillot_forfait_homme) {
                    ?>
                        <div class="d-flex">
                            <p class="d-flex justify-content-start flex-grow-1"><?= $maillot_forfait_homme['style'] ?></p>
                            <p id="prix" class="d-flex justify-content-end"><?= $maillot_forfait_homme['prix'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- MODELAGE -->

    <div class="d-flex flex-row">
        <div id="prestations_esthetique" class="mx-1">
            <h4 id="modelage">MODELAGES Hommes / Femmes</h4>
            <?php
            foreach ($modelages as $index => $modelage) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $modelage['nom_prestation'] ?></p>
                    </div>
                    <p id="detail"><?= $modelage['details'] ?></p>
                </div>
            <?php } ?>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <div class="d-flex flex-row">
                    <p id="prestation" class="d-flex flex-grow-1">1€ / min / personne</p>
                    <p id="detail">Durée minimum conseillée : 50 min</p>
                </div>
            </div>
        </div>
        <div id="prestations_esthetique" class="mx-1">

            <!-- MICROBLADING -->

            <h4>MICROBLADING</h4>

            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <p>Le Microblading est le terme anglais utilisé pour parler du
                    maquillage semi permanent des sourcils à la lame.</p>
                <p>Pour des sourcils densifiés, restructurés, redessinés pour
                    longtemps</p>
                <div class="d-flex flex-row">
                    <?php
                    foreach ($microblading as $index => $microblading1) {
                    ?>
                        <p id="prestation" class="d-flex flex-grow-1"><?= $microblading1['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $microblading1['prix'] ?></p>
                </div>
                <p id="detail"><?= $microblading1['details'] ?></p>
            </div>
        <?php } ?>
        <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
            <div class="d-flex flex-column">
                <p id="prestation" class="d-flex flex-grow-1">Retouches</p>
                <?php
                foreach ($retouches_microblading as $index => $retouches_microblading) {
                ?>
                    <div class="d-flex">
                        <p class="d-flex justify-content-start flex-grow-1"><?= $retouches_microblading['style'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $retouches_microblading['prix'] ?></p>
                    </div>
                <?php } ?>
                <p>Au-delà, le microblading doit être retravaillé dans son
                    intégralité.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="d-flex flex-row">
        <div id="prestations_esthetique" class="mx-1">

            <!-- MANUCURE -->

            <h4 id="manucure">MANUCURE</h4>
            <?php
            foreach ($manucures as $index => $manucure) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $manucure['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $manucure['prix'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div id="prestations_esthetique" class="mx-1">

            <!-- MINCEUR BIO ACTIVE -->

            <h4>MINCEUR BIO ACTIVE</h4>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <p>Redonne élasticité et fermeté à la peau</p>
                <?php
                foreach ($minceur_bio_active as $index => $minceur_bio) {
                ?>
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $minceur_bio['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $minceur_bio['prix'] ?></p>
                    </div>
                <?php } ?>
            </div>

            <!-- STARVAC -->

            <h4>STARVAC / Visage et Corps</h4>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <p>Technologie 100% naturelle qui agit sur le déstockage des
                    graisses et le relâchement cutané. Raffermit, remodèle et
                    lisse l’aspect peau d’orange</p>
                <?php
                foreach ($starvac as $index => $starvac1) {
                ?>
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $starvac1['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $starvac1['prix'] ?></p>
                    </div>
                <?php } ?>
            </div>

            <!-- WISHPRO -->

            <h4>WISHPRO / Visage</h4>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <p>Technique révolutionnaire qui permet de lutter contre les
                    signes de l’âge et de retrouver l’éclat du teint. Effet immédiat</p>
                <?php
                foreach ($wishpro as $index => $wishpro1) {
                ?>
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $wishpro1['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $wishpro1['prix'] ?></p>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row">
        <div id="prestations_esthetique" class="mx-1">

            <!-- MAQUILLAGE -->

            <h4 id="maquillage">MAQUILLAGE</h4>
            <?php
            foreach ($maquillages as $index => $maquillage) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $maquillage['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $maquillage['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $maquillage['details'] ?></p>
                </div>
            <?php } ?>
        </div>
        <div id="prestations_esthetique" class="mx-1">

            <!-- ESTHETIQUE + COIFFURE -->

            <h4>ESTHETIQUE + COIFFURE / Les forfaits</h4>
            <?php
            foreach ($esthetique_coiffure as $index => $esthetique_coiffure1) {
            ?>
                <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $esthetique_coiffure1['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $esthetique_coiffure1['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $esthetique_coiffure1['details'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="d-flex flex-row">
        <div id="prestations_esthetique" class="mx-1">

            <!-- MARIAGE -->

            <h4 id="mariage">MARIAGE</h4>
            <div id="forfait" class="my-1 px-1 d-flex flex-column flex-wrap">
                <?php
                foreach ($mariages as $index => $mariage) {
                ?>
                    <div class="d-flex flex-row">
                        <p id="prestation" class="d-flex flex-grow-1"><?= $mariage['nom_prestation'] ?></p>
                        <p id="prix" class="d-flex justify-content-end"><?= $mariage['prix'] ?></p>
                    </div>
                    <p id="detail"><?= $mariage['details'] ?></p>
                    <?php if ($mariage['titre'] == "homme") {
                        foreach ($mariage_barbes as $index => $mariage_barbe) {
                            echo "OU";
                            echo "<div class='d-flex flex-row'>";
                            echo "<p class='d-flex flex-grow-1'>Un soin du visage adapté + tracé de barbe personnalisé + coiffure le jour J</p>";
                            echo "<p id='prix' class='d-flex justify-content-end'>$mariage_barbe[prix]</p>";
                            echo "</div>";
                        }
                    } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>