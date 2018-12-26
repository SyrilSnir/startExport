<?php

namespace app\controllers;

use app\forms\HumanMarketplaceForm;
use app\forms\EntityMarketPlaceForm;
use app\forms\HumanTechnoparkForm;
use app\forms\EntityTechnoparkForm;
use Yii;
use yii\web\Controller;
/**
 * Description of AppController
 *
 * @author kotov
 */
abstract class AppController extends Controller
{
    /** @var array переменные для подстановка в шаблон */
    public $tplVars = array();
    /**
     * Инициализация переменных для представления
     */
    public function init() {
        parent::init();
        Yii::$app->view->params['requestPoll'] = false;
        Yii::$app->response->headers->add('Cache-Control', 'no-store, no-cache, must-revalidate');
        Yii::$app->response->headers->add('Expires',date("r"));
        $this->initVars();
    }
    
    protected function initVars() {
        
    }
    protected function initRequests() {
        Yii::$app->view->params['humanMarketPlaceModel'] = new HumanMarketplaceForm();
        Yii::$app->view->params['entityMarketPlaceModel'] = new EntityMarketPlaceForm();
        Yii::$app->view->params['humanTechnoparkModel'] = new HumanTechnoparkForm();
        Yii::$app->view->params['entityTechnoparkModel'] = new EntityTechnoparkForm();
    }
    
}
