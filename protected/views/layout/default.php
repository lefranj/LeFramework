<?php
/**
 * Created by LeFranj.
 * Date: 12.01.2016
 * Time: 2:16
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
<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-globe"></span>
                <?=App::$appName?>
            </a>
        </div>
        <div class="collapse navbar-collapse">
<!--                <ul class="nav navbar-nav">-->
<!--                    <li>-->
<!--                        <a href="#">Link 1</a>-->
<!--                    </li>-->
<!--                </ul>-->
        </div>
    </div>
</nav>
<!-- Content -->
<div class="banner-big bg-primary">
    <h1 class="title"><?=$this->title?></h1>
    <p class="caption text-justify"><?=$this->caption?></p>
</div>
<main class="container ">
    <div id="content" class="col-md-10">
        <?=$content?>
    </div>
    <div id="sidebar" class="col-md-2">
        <iframe src="https://discordapp.com/widget?id=136546643871793152&theme=dark" height="500"
               width="300" allowtransparency="true" frameborder="0"></iframe>
    </div>

</main>

<footer>
    <small class="text-muted">
        Powered by LeFramework v<?=App::$version?>
    </small>
</footer>
</body>
</html>
