<?php

namespace app\forms;

/**
 * Description of EntityMarketPlaceForm
 *
 * @author kotov
 */
class EntityMarketPlaceForm extends MarketPlaceForm
{
    public function rules(): array 
    {
        return [
            [['name','email','company','country'], 'required'],
            ['email','email']
        ];
    }
    
}
