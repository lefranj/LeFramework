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

    public function actionCollection()
    {
        $this->title = 'Collection';
        $this->caption = 'Links collection';
        $this->layout = 'slider';

        $this->render('collection', [
            'thumbs' => BaseParser::parseIni('collection'),
        ]);
    }

    public function actionAbout()
    {
        $this->title = 'About';
        $this->caption = 'LeFramework';
        $this->layout = 'simple';

        $this->render('about');
    }

    public function actionSysInfo()
    {
        $this->title = 'System';
        $this->caption = 'info';
        $this->layout = 'simple';
        $params = [
            [
                'name' => 'Sensors',
                'response' => SystemStatus::sensors(),
            ],
            [
                'name' => 'Top',
                'response' => SystemStatus::top(),
            ],
        ];
        $this->render('sysInfo', $params);
    }
}