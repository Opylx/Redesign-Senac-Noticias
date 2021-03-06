<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');
require_once(dirname(__DIR__) . '/php/functions/getPath.php');
require_once(dirname(__DIR__) . '/php/functions/startSession.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="/assets/img/Logosemnome.svg">
    <script type="text/javascript" src="/assets/js/menu-acessibilidade.js"></script>
    <link rel="stylesheet" href="/assets/css/allNews.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/assets/js/scroll.js"></script>
    <title>SENAC | Ver notícias</title>
</head>
<body>
    <!-- Header  -->
    <?php require_once(dirname(__DIR__) . '/php/components/header.php'); ?>

    <main class='main'>
        <?php require_once(dirname(__DIR__) . '/php/components/newsList.php'); ?>
    </main>

    <!-- Footer -->
    <?php require_once(dirname(__DIR__) . '/php/components/footer.html'); ?>
    <!-- News List movido do main para o footer -->
    <!-- <?php require_once(dirname(__DIR__) . '/php/components/newsList.php'); ?> -->

    <?php require_once(dirname(__DIR__) . '/php/components/topButton.html'); ?>
</body>
</html>