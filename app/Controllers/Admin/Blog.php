<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo '<h2>List of all Blogs</h2>';
    }
    public function createnew()
    {
        return view('blog_form');
    }
    public function save(){
        echo "<pre>"; 
        print_r($_POST);
        echo"<pre>";
    }
}
?>