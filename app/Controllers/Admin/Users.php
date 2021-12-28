<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function user()
    {
        echo "This is a user class";
    }
    public function getallUsers()
    {
        echo "print all users";
    }
}
?>