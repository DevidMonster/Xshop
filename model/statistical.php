<?php
    if(!empty($_POST["findName"])) {
        $filter = $_POST["findName"];
        $query = "select c.id, c.name, count(idLoai) as 'count', max(price) as'highPrice', min(price) as 'lowPrice', avg(price) as 'avgPrice' from category as c inner join product as p on c.id = idLoai GROUP by idLoai having c.name like n'%$filter%';";
        $categories = getAll($query); 
    } else {
        $query = "select c.id, c.name, count(idLoai) as 'count', max(price) as'highPrice', min(price) as 'lowPrice', avg(price) as 'avgPrice' from category as c inner join product as p on c.id = idLoai GROUP by idLoai;";
        $categories = getAll($query);
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