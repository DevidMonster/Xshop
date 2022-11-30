<?php
    $id = $_GET["id"];

    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    } else if (empty($_GET["id"])) {
        header("location:./index.php");
    }

    $query = "select * from person where id like n'$id'";
    $user = getOne($query);
    $isset= "";
?>