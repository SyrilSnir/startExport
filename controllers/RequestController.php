<?php

namespace app\controllers;

use app\models\RequestsMarketplace;
use app\models\RequestsTechnopark;
use Yii;

class RequestController extends AppController
{
    public function init() {
        parent::init();
        Yii::$app->view->params['requestPoll'] = false;
    }
    public $defaultType = 'humanManketplaceForm';
            
    public function actionSend() {
        $this->initRequests();
        //Yii::info($message, 'debug')
       // $this->tplVars['test'] = print_r(Yii::$app->request->get(),true);
        if (!(Yii::$app->request->isPost)) {
            return $this->sendFailure();
        }
        $postData = Yii::$app->request->post();
        if (key_exists('marketplaceSubmit', $postData)) {
            return $this->sendMarketplaceForm($postData);
        }
        if (key_exists('technoparkSubmit', $postData)) {
            return $this->sendTechnoparkForm($postData);
        }
        return $this->sendFailure();    
    }
    protected function sendMarketplaceForm($postData = array())  { 
        
        if (!empty($postData)) {
            foreach ($postData as $key => $val) {
                if (strpos($key, 'MarketplaceForm') !== false ) {
                    $formData = $val;
                    $this->defaultType = $key;
                }
            }
            if (!$formData) {
                return $this->sendFailure();
            }
            $matketPlaceForm = new RequestsMarketplace();
            $matketPlaceForm->setAttributes($formData,false);
            if (strpos($this->defaultType,'entity') !== false) {
                $matketPlaceForm->type = $matketPlaceForm::TYPE_ENTITY;
            } else {
                $matketPlaceForm->type = $matketPlaceForm::TYPE_INDIVIDUAL;
            }
            if (!$matketPlaceForm->validate()) {
                return $this->sendFailure('Ошибка валидации формы');
            }
            $matketPlaceForm->save();
            $this->tplVars['message'] = 'Форма успешно отправлена';
            $this->tplVars['messageClass'] = 'alert-info';
        }
        return $this->render('sendMarketplace', $this->tplVars);
    }
    protected function sendTechnoparkForm($postData = array()) {
        if (!empty($postData)) {
            $this->defaultType = 'humanTechnoparkForm';
            foreach ($postData as $key => $val) {
                if (strpos($key, 'TechnoparkForm') !== false ) {
                    $formData = $val;
                    $this->defaultType = $key;
                }
            }
            if (!isset($formData)) {
                return $this->sendFailure();
            }
            $technoparkForm = new RequestsTechnopark();
            $technoparkForm->setAttributes($formData,false);
            if (strpos($this->defaultType,'entity') !== false) {
                $technoparkForm->type = $technoparkForm::TYPE_ENTITY;
            } else {
                $technoparkForm->type = $technoparkForm::TYPE_INDIVIDUAL;
            }
            if (!$technoparkForm->validate()) {
                return $this->sendFailure('Ошибка валидации формы');
            }
            
            $technoparkForm->save();
            $this->tplVars['message'] = 'Форма успешно отправлена';
            $this->tplVars['messageClass'] = 'alert-info';
        }
        return $this->render('sendTechnopark', $this->tplVars);
    }
    protected function sendFailure($errorMessage = 'Остсутствует форма заявки') 
    {
        $this->tplVars['message'] = $errorMessage;
        $this->tplVars['messageClass'] = 'alert-danger';
        if (strpos($this->defaultType, 'MarketplaceForm') !== false ) {
            return $this->sendMarketplaceForm();
        }
        return $this->sendTechnoparkForm();
    }
}
