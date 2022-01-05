<?php
$title = "David Olivier - Erreur";
ob_start()
?>

<p><strong>Une erreur est survenue : </strong><span id="messageexception"><?= $msgErreur ?></span></p>
<?php echo "<a href='.\index.php' >Retour à la page d'accueuil</a>" ?>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>