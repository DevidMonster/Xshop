<?php
    include "../model/connect.php";
    session_start();
    $id = $_GET["id"];
    $idPerson = $_SESSION["idPerson"];
    $query = "DELETE FROM cart WHERE idPerson like n'$idPerson' AND idItem=$id";
    connect($query);
    header("location:../view/client-view/cart.php");
?>