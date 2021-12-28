<?php namespace App\Libraries;

class Blog{
    public function render_post($params){
        return view("components/post_items", $params);
    }
    
}

?>