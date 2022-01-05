<?php
$title = "David Olivier - Connexion";
ob_start();
?>

<form action="index.php?action=admin" id="formconnect" class="form1 my-5 d-flex justify-content-center" method="post">
    <table>
        <tr>
            <td>Utilisateur : </td>
            <td><input type="text" id="user" name="user" autocomplete="off"></td>
        </tr>
        <tr>
            <td>Mot de passe : </td>
            <td><input type="password" name="pwd" autocomplete="off"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" id="submit" value="Valider"><input type="reset" id="reset" value="Annuler"></td>
        </tr>
    </table>
</form>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>