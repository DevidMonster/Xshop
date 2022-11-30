<?php
    include "../model/connect.php";
    $id = $_GET["id"];
    $idItem = $_GET["idItem"];
    $query = "DELETE FROM comment WHERE id = $id";
    connect($query);
    header("location:../view/client-view/detailProduct.php?id=$idItem");
?>