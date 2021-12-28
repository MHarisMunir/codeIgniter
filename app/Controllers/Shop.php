<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return View('Shop');
    }
    public function product($type = "", $product_id = "")
    {
        echo '<h2>This is a product : ' .$type. ' ,with an id : ' .$product_id. ' </h2>';
        #return View('Product');
    }
    protected function admin_check(){
        echo "this is protected area";
    }
}
?>