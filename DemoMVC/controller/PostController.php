<?php
require_once "model/Post_m.php";

class PostController{
    public function index() {
        $user = new Post_m();
        if (isset($_POST['btn_search']) && $_POST['search_name'] != '') {
            $input = $_POST;
            $post = new Post_m();
            $listpost = $post->Search($input['search_name']);
        } else if(isset($_GET['del'])) {
            $del = $_GET['del'];
            $post = new Post_m();
            $delete = $post->Delete($del);
            header('Location: http://localhost/DemoMVC/index.php?demo=user');
        } else {
            $listpost = $user->getAll();
        }
        
        include "view/user/list.php";
    }
    
    public function add(){
        include "view/user/add.php";
    }
    
    
    public function save(){
        if(isset($_POST['btn_add']) && $_POST['btn_add'] != ''){
            $input = $_POST;
            $post = new Post_m();
            $listPost = $post->Insert($input['username'], $input['email']);
            header('Location: http://localhost/DemoMVC/index.php?demo=user');
            exit();
        }      
    }
    
    public function GetUpdate() {
        $value = $_GET['value'];
        if ($value) {
            $post = new Post_m();
            $data = $post->GetUpdate($value);
        } if (!$value) {
            if (isset($_POST['btn_update']) && $_POST['update_name'] != '' && $_POST['update_email'] != '') {
                $input = $_POST;
                $post = new Post_m();
                $listPost = $post->Update($input['update_name'], $input['update_email'], $input['update_id']);
                header('Location: http://localhost/DemoMVC/index.php?demo=user');
                exit();
            }
        }
        include "view/user/update.php";
    }

}
