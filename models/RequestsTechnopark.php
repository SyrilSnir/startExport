<?php
namespace app\models;

use Yii;
/**
 * @property string $description
 * @author kotov
 */
class RequestsTechnopark extends RequestModel
{
    const TITLE = 'Создана новая заявка на взаимодействие с технопарками';
    
    public static function tableName() {
        return Yii::$app->db->tablePrefix .'requests_technopark';
    }
}

