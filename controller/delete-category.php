<?php
    include "../model/connect.php";
    $id = $_GET["id"];

    $query = "DELETE FROM category WHERE id=$id";
    connect($query);

    header("location:../view/admin-view/category.php?ctr=category");
?>