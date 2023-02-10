<?php 
    namespace itrax\models;
    use itrax\core\db;
    class CategoryModel extends DB{
        public function addCategory($name){
            $this->insert(['name'=>$name]);
        }
        public function getAllCategories(){
            return $this->selectAll();
        }
        public function deleteCategory($id){
            $this->delete($id);
        }
        public function getCategory($id){
            return $this->select(['id'=>$id]);
        }
        public function updateCategory($data){
            $this->update($data);
        }
    }
?>