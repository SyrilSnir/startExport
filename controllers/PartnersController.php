<?php

namespace app\controllers;

/**
 * Description of PartnersController
 *
 * @author kotov
 */
class PartnersController extends AppController
{
    public function actionIndex() 
    {
        return $this->render('index', $this->tplVars);
    }
}
