<?php
namespace app\models;


use Yii;
/**
 * @author kotov
 */
class RequestsMarketplace extends RequestModel
{
    const TITLE = 'Создана новая заявка на взаимодействие с международными торговыми онлайн - площадками';
    
    public static function tableName() {
        return Yii::$app->db->tablePrefix .'requests_marketplace';
    }

}
