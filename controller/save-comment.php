<?php 
    include "../model/connect.php";
    session_start();

    $idItem = $_POST["id"];
    $timeComment = date("Y/m/d");
    $idP = $_SESSION["idPerson"];
    $title = $_POST["comment"];

    $query = "insert into comment(title, idItem, idPerson, timeComment) values ('$title', $idItem,'$idP', '$timeComment')";
    connect($query);

    header("location: ../view/detailProduct.php?id=$idItem");

?>