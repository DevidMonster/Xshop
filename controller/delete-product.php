<?php
    include "../model/connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM product WHERE id=$id";
    connect($query);
    header("location:../view/admin-view/product.php");
?>