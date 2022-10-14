<?php
    include "../model/connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM person WHERE id like N'$id'";
    connect($query);
    header("location:../view/admin-view/users.php");
?>