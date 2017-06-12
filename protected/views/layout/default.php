<?php
/**
 * Created by LeFranj.
 * Date: 12.01.2016
 * Time: 2:16
 *
 * @var string $content
 * @var string $isMin
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title><?php echo App::$appName;?></title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo App::createAddress("img/favicon.ico");?>" type="image/x-icon">
    <link rel="icon" href="<?php echo App::createAddress("img/favicon.ico");?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/bootstrap.css");?>">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/bootstrap-theme.css");?>">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/bootstrap-responsive.css");?>">
    <link rel="stylesheet" href="<?php echo App::createAddress("css/main.css");?>">
    <script type="application/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="application/javascript" src="<?php echo App::createAddress("js/bootstrap.min.js");?>"></script>
    <script type="application/javascript" src="<?php echo App::createAddress("js/main".$isMin.".js");?>"></script>
</head>
<body>
<?php include('components/menu.php');?>
<!-- Content -->
<div class="banner-big bg-primary">
    <h1 class="title"><?php echo $this->title;?></h1>
    <p class="caption text-justify"><?php echo $this->caption;?></p>
</div>
<main class="container ">
    <div id="content" class="col-md-10">
        <?php echo $content;?>
    </div>
    <?php //include('components/sidebar.php');?>

</main>

<footer>
    <small class="text-muted">
        Powered by LeFramework v<?php echo App::$version;?>
    </small>
</footer>
</body>
</html>
