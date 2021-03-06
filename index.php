<?php
require_once(__DIR__ . '/src/php/functions/startSession.php');
require_once(__DIR__ . '/src/php/classes/NewsController.php');
require_once(__DIR__ . '/src/php/functions/getPath.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/newsletterForm.css">
    <link rel="stylesheet" href="/assets/css/contrast.css">
	<script type="text/javascript" src="assets/js/menu-acessibilidade.js"></script>
    <link rel="icon" href="assets/img/Logosemnome.svg">
    <script type="text/javascript" src="assets/js/NLAction.js"></script>
    <script type="text/javascript" src="assets/js/scroll.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>SENAC Notícias</title>
</head>
<body>
    <!-- Header  -->
    <?php require_once('src/php/components/header.php') ?>
    
    <main>
        <!-- Landing-page -->
        <section class="first-section">
            <div id="landing-text">
                <p class="top-text">Seja bem-vindo(a) ao seu portal de notícias favorito</p>
                <h1 class="title">Veja aqui as principais notícias <br> acerca do Senac, a sua <br> instituição favorita para se tornar um <br> bom profissional</h1>
                <button class="landing-btn" onclick="document.location = '#news'">VER NOTÍCIAS</button>
            </div>
        </section>

        <!-- Notícias -->
        <?php require_once('./src/php/components/newsGrid.php') ?>

        <!-- Newsletter -->
        <?php require_once('./src/php/components/newsletterForm.html') ?>

        <!-- Mapa -->
        <?php require_once('./src/php/components/map.html') ?>
    </main>

    <!-- Footer -->
    <?php require_once('src/php/components/footer.html') ?>

    <?php require_once('src/php/components/topButton.html') ?>
</body>
</html>