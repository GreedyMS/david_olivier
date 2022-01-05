<?php
$title = "David Olivier - Contact et Horaires";
ob_start()
?>

<div id="telephone" class="mb-4 d-flex flex-column justify-content-center align-items-center">
    <h2>Téléphone</h2>
    <a id="num_tel" href="tel:+33555841650">05 55 84 16 50</a>
</div>

<!-- SALON COIFFURE TERRASSON ? -->

<h2 class="mb-4 d-flex justify-content-center">Horaires</h2>

<div id="horaire" class="pb-4 d-flex flex-row justify-content-center align-items-center">
    <table>
        <ul>
            <li>Lundi :</li>
            <li>Mardi :</li>
            <li>Mercredi :</li>
            <li>Jeudi :</li>
            <li>Vendredi :</li>
            <li>Samedi :</li>
            <li>Dimanche :</li>
        </ul>
        <ul>
            <li>Fermé</li>
            <li>9h00 à 19h00</li>
            <li>9h00 à 19h00</li>
            <li>9h00 à 19h00</li>
            <li>9h00 à 19h00</li>
            <li>9h00 à 19h00</li>
            <li>Fermé</li>
        </ul>
    </table>
</div>

<div id="adresse" class="pb-5 d-flex flex-column justify-content-center align-items-center">
    <h2>Adresse</h2>
    <p>5 Av. Raymond Poincaré, 19130 Objat</p>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3339.5945763179348!2d1.4141610983963295!3d45.262894114106395!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab88d9ae10fb7023!2sDavid%20Olivier%20Sarl!5e0!3m2!1sfr!2sfr!4v1629835648326!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


<?php
$content = ob_get_clean();
include "baselayout.php";
?>