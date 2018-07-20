<?php

namespace App\Controllers;

use CAP\Framework\CrudController;

class UsersController extends CrudController
{

    protected function getModel() : string
    {
        return 'users_model';
    }

}
