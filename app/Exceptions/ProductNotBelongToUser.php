<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongToUser extends Exception
{

    public function render()
    {
        return ['errors' => 'Product does not belong to user'];
    }
    
}
