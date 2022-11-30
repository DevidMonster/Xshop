<?php
    function connect($query) {
        $connection = new PDO("mysql:host=localhost;dbname=xshop;charset=utf8","root","");
        $stmt = $connection -> prepare($query);
        $stmt -> execute();
        return $stmt;
    };
    function getAll($query) {
        $array = connect($query) -> fetchAll();
        return $array;
    };
    function getOne($query) {
        $array = connect($query) -> fetch();
        return $array;
    };
?>