<?php

namespace app\forms;

use yii\base\Model;
use app\models\PollModel;

/**
 * Форма опроса
 *
 * @author kotov
 */
class PollForm extends Model
{
    public $siteRating;
    public $siteDesign;
    public $siteSpeed;
    public $siteConvenience;
    public $siteUseful;
    public $siteClarity;
    public $marketPlaceСlarity;
    public $siteFunctional;
    public $siteBugs;
    public $technopark;
    public $useResource;
    public $region;
    public $device;
    public $status;
    public $age;
    public $gender;
    public $comments;
    public $email;

    public function attributeLabels() {
        return [
            'siteRating' => 'Какую общую оценку сайту Вы бы поставили?',
            'siteDesign' => 'Оцените дизайн сайта:',
            'siteSpeed' => 'Как быстро в среднем загружаются страницы сайта?',
            'siteConvenience' => 'Оцените удобство сайта:',
            'siteUseful' => 'Принесло ли Вам пользу посещение сайта, достигли ли Вы своих целей?',
            'siteClarity' => 'Понятна ли Вам направленность ресурса:',
            'marketPlaceСlarity' => 'Понятно ли, что на через этот сайте вы можете разместить товары на ресурсе Alibaba.com и других онлайн площадках по сниженной цене?',
            'siteFunctional' => 'Выполняет ли сайт свои функции?',
            'siteBugs' => 'Много ли на сайте ошибок, недоработок?',
            'technopark' => 'Понятно ли, что через этот сайт можно можно выбрать любой технопарк мира и работать в нем по сниженной цене?',
            'useResource' => 'Готовы ли Вы воспользоваться этим ресурсом?',
            'region' => 'Пожалуйста, укажите Ваш регион.',
            'device' => 'С какого устройства Вы зашли на сайт?',
            'status' => 'Пожалуйста, уточните Ваш статус.',
            'age' => 'Выберите Вашу возрастную категорию.',
            'gender' => 'Пожалуйста, укажите пол.',
            'comments' => 'Комментарии, пожелания:',                        
            'email' => 'Для отправки опроса введите адрес электронной почты:',
        ];
     }
    public function rules() {
        return [
            ['email', 'required','message' => 'Для отправки данных укажите корректный адрес электронной почты'],
            ['email', 'email', 'message' => 'Для отправки данных укажите корректный адрес электронной почты'],
            ['email','errorIfEmailUsed']
        ];
    }
    public function errorIfEmailUsed() 
    {
        if (PollModel::existsEmail($this->email)) {
            $this->addError('email','С Вашего адреса опрос уже был отправлен!');
        }                            
    }
}
