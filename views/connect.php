<?php
if (!isset($_SESSION['login']) || (!isset($_SESSION['pwd']))) {
    header('location: index.php');
    exit();
} else {
    header('location: views/admin.php');
    exit();
}

$title = "David Olivier - Redirection";
ob_start();
?>


<?php
$content = ob_get_clean();
include "baselayout_admin.php";
?>