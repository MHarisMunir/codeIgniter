<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo '<h2>This is Admin Shop Area</h2>';
    }
    public function product($type = "", $product_id = "")
    {
        echo '<h2>This is a Admin product : ' .$type. ' ,with an id : ' .$product_id. ' </h2>';
        #return View('Product');
    }
    protected function admin_check(){
        echo "this is protected area";
    }
}
?>