<?php

namespace app\controllers;

use app\forms\PollForm;
use app\models\PollModel;
use app\se\helpers\FileHelper;
use Yii;
/**
 * Description of PollController
 *
 * @author kotov
 */
class PollController extends AppController
{
    
    public function init() {
        parent::init();       
    }

    public function initVars() {
        parent::initVars();
        $this->tplVars['model'] = new PollForm();
    }

        public function actionIndex() {            
            $this->getPollAnswersFromJson();
            return $this->render('index', $this->tplVars);
    }
    public function actionSend() {
        if (!Yii::$app->request->isPost) {
            return ('request error');
        }
        $postData = Yii::$app->request->post();
        $pollForm = new PollForm();
        $pollForm->setAttributes($postData['PollForm'],false);
        if ($pollForm->validate()) {
            $pollModel = new PollModel();            
            $pollModel->setModelFromForm($pollForm);
            $pollModel->save();
            return $this->render('send', $this->tplVars);
        }
        $this->tplVars['model'] = $pollForm;
        $this->getPollAnswersFromJson();
        return $this->render('index', $this->tplVars);
    }
    protected function getPollAnswersFromJson() {
        $dataFile = new FileHelper(Yii::getAlias('@app'). '/data/poll-data.json');
            if (!$dataFile->isFileExist()) {
                throw new \yii\base\ExitException(0,'Файл не найден');
            }
            $jsonData = $dataFile->getFileData();
            $this->tplVars['pollConfig'] = json_decode($jsonData,true);             
    }            
}
