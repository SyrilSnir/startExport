<?php

namespace app\forms;

use yii\base\Model;

/**
 * Description of TechnoparkForm
 *
 * @author kotov
 */
abstract class TechnoparkForm extends Model
{
    public $name;
    public $phone;
    public $email;
    public $country;
    public $company;
    public $field;
    public $description;
    
    public function rules(): array 
    {
        return [
            [['name','email'], 'required']
        ];
    }
    public function attributeLabels() {
        return [
            'name' => 'ФИО',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'country' => 'Страна',
            'company' => 'Компания',
            'field' => 'Сфера деятельности',            
            'description' => 'Описание проекта',
        ];
    }
}
