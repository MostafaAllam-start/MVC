<?php 
    namespace itrax\models;
    use itrax\core\db;
    class userModel extends db{
        function getAllUsers(){
            return $this->selectAll();
        }
        function getUserDetails($id){
            return $this->select( $id);
        }
        function insertUser($data){
            $this->insert($data);
        }
        function updateUser($data){
            $this->update($data);
        }
        function deleteUser($id){
            $this->delete($id);
        }
    }
?>