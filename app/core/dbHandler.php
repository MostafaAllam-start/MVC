<?php
    namespace itrax\core;
    interface dbHandler{
        function selectAll($table);
        function select($table, $id);
        function delete($table, $id);
        function insert($table, $data);
        function update($table, $data);
        function execute($sql, $data);
    }
?>