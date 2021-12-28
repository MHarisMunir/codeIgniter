<?php

namespace App\Controllers;
use App\Controllers\Admin\Shop as Adminshop;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    function validation(){
        $shop = new shop();
        $shop->product('laptop','lenovo');

        $adminshop = new Adminshop();
        $adminshop->product('laptop','Apple');
    }
}
