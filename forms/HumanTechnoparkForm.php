<?php

namespace app\forms;

/**
 * Description of HumanMarketplaceForm
 *
 * @author kotov
 */
class HumanTechnoparkForm extends TechnoparkForm
{
    public function rules(): array 
    {
        return [
            [['name','email','country'], 'required'],
            ['email','email']
        ];
    }
    
}
