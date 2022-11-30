<?php
    //Filter
    if(!empty($_POST["findName"])) {
        $filter = $_POST["findName"];
        $query = "select * from product where name like '%$filter%'";
        $productList = getAll($query); 
    } else {
        $query = 'select * from product';
        $productList = getAll($query);
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