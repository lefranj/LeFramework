<?php
/**
 * Created by LeFranj.
 * Date: 18.01.2016
 * Time: 17:39
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title><?=App::$appName?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/bootstrap.css")?>">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/bootstrap-theme.css")?>">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/bootstrap-responsive.css")?>">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/main.css")?>">
    <script type="application/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="application/javascript" src="<?php echo App::createAddress("js/bootstrap.js")?>"></script>
    <script type="application/javascript" src="<?php echo App::createAddress("js/main.js")?>"></script>
</head>
<body>
<?php include('components/menu.php');?>
<?php include('components/carousel.php');?>
<!-- Content -->
<main class="container ">
    <hr />
        <?=$content?>
</main>

<footer>
    <small class="text-muted">
        Powered by LeFramework v<?=App::$version?>
    </small>
</footer>
</body>
</html>

