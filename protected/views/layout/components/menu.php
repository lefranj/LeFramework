<?php
/**
 * Created by LeFranj.
 * Date: 18.01.2016
 * Time: 16:46
 */
?>
<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo $this->createAddress('Index')?>">
                <span class="glyphicon glyphicon-globe"></span>
                <?=App::$appName?>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo $this->createAddress('About')?>">About</a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo $this->createAddress('Collection')?>">Collection</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
