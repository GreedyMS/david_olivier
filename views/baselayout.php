<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@300&display=swap" rel="stylesheet">
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <div class=" d-flex justify-content-center" id="container_logo">
            <img src="img/logo-test.jpg" id="logo_david_olivier" alt="" srcset="">
        </div>
        <div id="menu-baselayout" class="mb-5 py-2">
            <nav>
                <ul id="menu" class="d-flex justify-content-around">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?action=marques">Nos marques</a></li>
                    <li><a href="index.php?action=tarifs">Prestations & Tarifs</a></li>
                    <li><a href="index.php?action=coordonnees">Horaire et Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <?= $content ?>
    </main>

    <footer>
        <div class="py-3 d-flex justify-content-around">
            <a href="https://www.instagram.com/davidoliviercoiffure/"><i id="social-media" class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/DavidOlivierCoiffureEsthetique"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="pb-3 d-flex justify-content-around">
            <a href="index.php?action=mentions_legales">Mentions légales</a>
        </div>
    </footer>
</body>

</html>