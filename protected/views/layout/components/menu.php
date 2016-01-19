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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index">
                <span class="glyphicon glyphicon-globe"></span>
                <?=App::$appName?>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/about">About</a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a href="/collection">Collection</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
