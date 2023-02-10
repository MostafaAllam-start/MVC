<?php 
    namespace itrax\models;
    use itrax\core\DB;
    class UserModel extends DB{
        function getAllUsers(){
            return $this->selectAll();
        }
        function getUserDetails($params){
            return $this->select($params);
        }
        function addUser($data){
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