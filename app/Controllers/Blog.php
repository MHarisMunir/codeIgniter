<?php

namespace App\Controllers;

use App\Models\blogModel;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => "codeIgniter 4 Blog" ,
            'title' => "This is our Blog" ,
        ];
        $posts = ['post_1', 'post_2', 'post_3'];

        $data['posts'] = $posts ;

        //echo View('Templates/header.php',$data);
        return View('blog',$data);
        //echo View('Templates/footer.php');
    }
    public function post($type = "", $product_id = "")
    {
        $data = [
            'meta_title' => "codeIgniter 4 Post" ,
            'title' => "This is an Awsome Post" ,
        ];
        //echo View('Templates/header.php',$data);
        return View('Single_post',$data);
        //echo View('Templates/footer.php');
        
    }
    
    public function new(){
        $data = [
            'meta_title' => "New Post" ,
            'title' => "Create new Post" ,
        ];

        if($this->request->getMethod() == "post"){
            $model = new blogModel();
            $model->save($_POST);
        }
        return View('new_post',$data);
    }
  
}
?>