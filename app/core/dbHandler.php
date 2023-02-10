<?php
    namespace itrax\core;
    interface DBHandler{
        function selectAll();
        function select($id);
        function delete($id);
        function insert($data);
        function update($data);
        function execute($sql, $data);
    }
?>