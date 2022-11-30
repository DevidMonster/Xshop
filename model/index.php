<?php
    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    }

    if (!empty($_POST["Filter_Select"])) {
        $filter = $_POST["Filter_Select"];
        $query = "select * from product where idLoai = $filter";
        $products = getAll($query);
    } else if(!empty($_POST["Filter"])) {
        $filter = $_POST["Filter"];
        $query = "select * from product where id like n'$filter' OR name like n'%$filter%' ";
        $products = getAll($query);
    } else {
        $query = "select * from product";
        $products = getAll($query);
    }

    $query2 = "select l.id, count(hh.idLoai) as 'countProduct', l.name from category as l join product as hh on l.id = hh.idLoai group by l.id;";
    $categories = getAll($query2);
?>