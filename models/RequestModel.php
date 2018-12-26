<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use Yii;
/**
 * Общий класс для заявок
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $country
 * @property string $company
 * @property integer $field
 * @property integer $type
 * @property integer $created_at
 * @author kotov
 */
abstract class RequestModel extends ActiveRecord
{
    const TYPE_INDIVIDUAL = 1;
    const TYPE_ENTITY = 2;
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
    /**
     * Отправить сообщение на почту
     * @param type $insert
     * @param type $changedAttributes
     */
    public function afterSave($insert, $changedAttributes) {
        parent::afterSave($insert, $changedAttributes);
        $tplVars = [
            'fio' => $this->name,
            'phone' => $this->phone,
            'company' => $this->company,
            'country' => $this->country,
            'email' => $this->email,
            'title' => static::TITLE
        ];
        if ($this->type == $this::TYPE_INDIVIDUAL) {
            $tplVars['type'] = 'Физическое лицо';
        } else {
            $tplVars['type'] = 'Юридическое лицо';
        }
        Yii::info('Заявка сохранена','event');
        Yii::$app->mailer->compose('sendRequest',$tplVars)
                ->setFrom('kotov@nsod.ru')
                ->setTo(['marina@schmatova.com','SkayVideoPRO@ya.ru','forandrewm@gmail.com'])
                ->setSubject('Оформлена новая заявка')
                ->send();
      /*  Yii::$app->mailer->compose('mailToSender',$tplVars)
                ->setFrom('truck01@mail.ru')
                ->setTo([$this->email => $this->name])
                ->setSubject('Заявка была принята')
                ->send();
        */
    }
    
}