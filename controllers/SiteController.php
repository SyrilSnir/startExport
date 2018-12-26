<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class SiteController extends AppController
{
    public $siteRating;
    
    public function init() {
        parent::init();
        Yii::$app->view->params['requestPoll'] = true;
    }
    public function actionIndex() {
        $this->initRequests();        
        return $this->render('index', $this->tplVars);
    }
}
