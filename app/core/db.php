<?php
    namespace itrax\core;
    use PDO;
    use PDOException;
    use itrax\core\DBHandler;
    class DB implements DBHandler{
        private $conn;
        private $table;
        function __construct()
        {   
            try{
                $this->conn = new PDO($_ENV['DB_DSN'],$_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "connection faild:".$e->getMessage();
            }
            $model_class_name = explode("\\", STATIC::class);
            $this->table = trim($model_class_name[2], "Model");
        }

        function selectAll(){
            $stmt = $this->conn->query("SELECT * FROM $this->table");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function select($params){
            $sql = "SELECT * FROM `$this->table` WHERE ";
            foreach($params as $key=>$value){
                $sql .= "`$key`=:$key AND ";
            }
            $sql = rtrim($sql, "AND ");
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function delete($id){
            $sql = "DELETE FROM `$this->table` WHERE id=:id";
            $this->execute($sql, ['id'=>$id]);
        }

        function insert($data){
            $sql = "INSERT INTO `$this->table` (";
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

        function update($data){
            $sql = "UPDATE `$this->table` SET ";
            foreach($data as $key=>$value){
                if($key != 'id')
                    $sql .= "`$key`=:$key,";
            }
            $sql = rtrim($sql, ',');
            $sql .= " WHERE id=:id"; 
            echo "$sql";
            $this->execute($sql, $data);
        }
    
        function execute($sql, $data){
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
        }
    }
?>