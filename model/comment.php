<?php
    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    }  else {
        if($_SESSION["id"] == 1) {
            header("location:../index.php");
        }
    }

    $query = "select hh.id, name, count(bl.idItem) as 'commentCount', MIN(timeComment) as 'cuNhat', MAX(timeComment) as 'moiNhat' from product as hh join comment as bl on hh.id=bl.idItem GROUP by hh.id HAVING count(bl.idItem) > 0 ORDER by timeComment DESC;";
    $itemList = getAll($query);
?>