<?php
/**
 * @var string $content
 */
?>
<html lang="en">
    <head>
        <title><?=App::$appName?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="application/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="application/javascript" src="js/bootstrap.js"></script>
        <script type="application/javascript" src="js/main.js"></script>
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
                <p class="navbar-text"><?=App::$appName?></p>
            </div>
        </div>
    </nav>
    <!-- Content -->
    <div class="container">
        <!-- Breadcrumbs -->
        <ul class="breadcrumb">
            <?=$this->getBreadcrumbs()?>
        </ul>
        <?=$this->content?>
    </div>
    <div id="footer">
        <small class="text-muted">
            Powered by LeFramework v. <?=App::$version?>
        </small>
    </div>
    </body>
</html>