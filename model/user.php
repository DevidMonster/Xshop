<?php
    if(!empty($_POST["findName"])) {
        $filter = $_POST["findName"];
        $query = "select * from person where name like '%$filter%'";
        $userList = getAll($query); 
    } else {
        $query = 'select * from person';
        $userList = getAll($query);
    }
    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    }  else {
        if($_SESSION["id"] == 1 || $_SESSION["id"] == 2) {
            header("location:../index.php");
        }
    }
?>