<?php

namespace app\forms;

/**
 * Description of HumanMarketplaceForm
 *
 * @author kotov
 */
class HumanMarketplaceForm extends MarketPlaceForm
{
    public function rules(): array 
    {
        return [
            [['name','email','country'], 'required'],
            ['email','email']
        ];
    }
    
}
