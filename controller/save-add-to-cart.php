<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    session_start();
    $idPerson = $_SESSION["idPerson"];
    $idItem = $_POST["id"];
    $query = "select * from cart where idPerson like n'$idPerson' AND idItem = $idItem";
    $cartItem = getOne($query);
    if(empty($cartItem)) {
        $count = $_POST["count"];
        $query = "insert into cart(idPerson,idItem,count) values ('$idPerson', $idItem, $count);";
        connect($query);
    } else {
        $count = $_POST["count"] + $cartItem["count"];
        $query = "update cart set count = $count where idPerson like n'$idPerson' AND idItem=$idItem";
        connect($query);
    }

    header("location:../view/client-view/detailProduct.php?id=$idItem"); 
?>