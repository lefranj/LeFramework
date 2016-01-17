<?php

/**
 * Created by LeFranj.
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

    public function actionTest()
    {
        $this->title = 'Test page';
        $this->caption = 'Test action of SiteController';

        $this->render('test');
    }
}