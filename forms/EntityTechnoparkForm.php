<?php

namespace app\forms;

/**
 * Description of EntityMarketPlaceForm
 *
 * @author kotov
 */
class EntityTechnoparkForm extends TechnoparkForm
{
    public function rules(): array 
    {
        return [
            [['name','email','country','company','field'], 'required'],
            ['email','email']
        ];
    }
    
}