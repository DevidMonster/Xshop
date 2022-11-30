<?php
    if(!empty($_POST["findName"])) {
        $filter = $_POST["findName"];
        $query = "select * from category  where name like '%$filter%'";
        $categoryList = getAll($query); 
    } else {
        $query = 'select * from category';
        $categoryList = getAll($query);
    }
    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    }  else {
        if($_SESSION["id"] == 1) {
            header("location:../index.php");
        }
    }
?>