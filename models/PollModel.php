<?php
namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\forms\PollForm;
use Yii;

/**
 * Кдасс для сохраненных опросов
 * @property integer $id
 * @property integer $siteRating
 * @property integer $siteDesign
 * @property integer $siteSpeed
 * @property integer $siteConvenience
 * @property integer $siteUseful
 * @property integer $siteClarity
 * @property integer $marketPlaceСlarity
 * @property integer $siteFunctional
 * @property integer $siteBugs
 * @property integer $technopark
 * @property integer $useResource
 * @property integer $region
 * @property integer $device
 * @property integer $status
 * @property integer $age
 * @property integer $gender
 * @property string $comments
 * @property string $email
 * @property integer $created_at
 * @author kotov
 */
class PollModel extends ActiveRecord {
    
    public static function tableName() {
        return Yii::$app->db->tablePrefix .'poll';
    }
    
     public function behaviors() {
        return  [
                    [
                        'class' => TimestampBehavior::className(),
                        'attributes' => [
                            ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                            ],
                            // если вместо метки времени UNIX используется datetime:
                        'value' => new Expression('NOW()'),
                    ],
                ];
    }
    public function setModelFromForm(PollForm $pollForm) {
        $this->siteRating = $pollForm->siteRating;
        $this->siteDesign = $pollForm->siteDesign;
        $this->siteSpeed = $pollForm->siteSpeed;
        $this->siteConvenience = $pollForm->siteConvenience;
        $this->siteUseful = $pollForm->siteUseful;
        $this->siteClarity = $pollForm->siteClarity;
        $this->marketPlaceСlarity = $pollForm->marketPlaceСlarity;
        $this->siteFunctional = $pollForm->siteFunctional;
        $this->siteBugs = $pollForm->siteBugs;
        $this->technopark = $pollForm->technopark;
        $this->useResource = $pollForm->useResource;
        $this->region = $pollForm->region;
        $this->device = $pollForm->device;
        $this->age = $pollForm->age;
        $this->gender = $pollForm->gender;
        $this->comments = $pollForm->comments;  
        $this->email = $pollForm->email;
    }
    public static function existsEmail($email) 
    {
        $count = static::find()->where(['email' => $email])->count();
        return ($count > 0);
    }
}

