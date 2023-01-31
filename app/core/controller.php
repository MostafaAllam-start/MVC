<?php
    namespace itrax\core;
    use itrax\core\db;
    class Controller{
        protected function view($path){
            $db = new db();
            // $db->insert("category", ['name'=>'fruit', 'description'=>'fruit are usefull']);
            // $db->update("category", ['name'=>'vegetable', 'description'=>'vegetable are usefull', 'id'=>5]);
            // $db->delete('category', 4);
            $categories = $db->selectAll("category");
            echo "<pre>";
            print_r($categories);
            $vegetable = $db->select("category", 5);
            print_r($vegetable);
            echo "</pre>";
            require VIEWS.$path.".php";
        }
    }
?>