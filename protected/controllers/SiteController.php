<?php

/**
 * Created by PhpStorm.
 * User: F@N
 * Date: 29.12.2015
 * Time: 22:14
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->title = 'Welcome !';
        $this->caption = 'LeFramework greetings you!';

        $this->render('index');
    }
}