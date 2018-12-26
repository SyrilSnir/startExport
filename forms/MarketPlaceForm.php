<?php

namespace app\forms;

use yii\base\Model;
/**
 * Description of MarketPlaceForm
 *
 * @author kotov
 */
abstract class MarketPlaceForm extends Model
{
    public $name;
    public $phone;
    public $email;
    public $country;
    public $company;
    public $field;
    
    public function attributeLabels() {
        return [
            'name' => 'ФИО',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'county' => 'Страна',
            'company' => 'Компания',
            'field' => 'Сфера деятельности',            
        ];
    }
}
