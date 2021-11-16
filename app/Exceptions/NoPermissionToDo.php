<?php

namespace App\Exceptions;

use Exception;

class NoPermissionToDo extends Exception
{
    public function render()
    {
        return [
            'data' => "You do not have permission"
        ];
    }
}
