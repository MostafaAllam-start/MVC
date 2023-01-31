<?php
    namespace itrax\core;
    use PDO;
    use itrax\core\dbHandler;
use PDOException;

    class db implements dbHandler{
        private $conn;
        function __construct($db_engine="mysql", $db_host="localhost", $db_name="store_front", $db_user="root", $db_user_password="")
        {   
            try{
                $dsn = "$db_engine:host=$db_host;dbname=$db_name";
                $this->conn = new PDO($dsn,$db_user, $db_user_password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "connection faild:".$e->getMessage();
            }
        }

        function selectAll($table){
            $stmt = $this->conn->query("SELECT * FROM $table");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function select($table, $id){
            $stmt = $this->conn->prepare("SELECT * FROM `$table` WHERE id=:id");
            $stmt->execute(['id'=>$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function delete($table, $id){
            $sql = "DELETE FROM `$table` WHERE id=:id";
            $this->execute($sql, ['id'=>$id]);
        }

        function insert($table, $data){
            $sql = "INSERT INTO `$table` (";
            foreach($data as $key=>$value){
                $sql .= "$key,";
            }
            $sql = rtrim($sql, ',');
            $sql .= ") VALUES (";
            foreach($data as $key=>$value){
                $sql .= ":$key,";
            } 
            $sql = rtrim($sql, ',');
            $sql .= ")";
            $this->execute($sql, $data);
        }

        function update($table, $data){
            $sql = "UPDATE `$table` SET ";
            foreach($data as $key=>$value){
                if($key != 'id')
                    $sql .= "`$key`=:$key,";
            }
            $sql = rtrim($sql, ',');
            $sql .= " WHERE id=:id"; 
            $this->execute($sql, $data);
        }
    
        function execute($sql, $data){
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
        }
    }
?>