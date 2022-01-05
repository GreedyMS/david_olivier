<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style_admin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@300&display=swap" rel="stylesheet">
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <div class=" d-flex justify-content-center" id="container_logo">
            <img src="img/logo_david_olivier.png" id="logo_david_olivier" alt="" srcset="">
        </div>
        <h1 class=" d-flex justify-content-center mb-5">Administration du site web</h1>
        <div id="menu_admin" class="d-flex justify-content-around">
            <a href="index.php?action=admin">Modifier les textes et les images de l'accueil</a>
            <a href="index.php?action=admin_marques">Ajouter, modifier ou supprimer des marques</a>
            <a href="index.php?action=admin_tarifs">Modifier les prestations et tarifs</a>
            <a href="index.php?action=admin">Revenir à l'accueil</a>
            <a href="index.php?action=deconnexion">Deconnexion</a>
        </div>
    </header>

    <main>
        <?= $content ?>
    </main>

    <footer>
    </footer>
</body>

</html>