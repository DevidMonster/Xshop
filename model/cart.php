<?php
    session_start();
    $alert = "Giỏ hàng của bạn đang trống";
    $id = $_SESSION["idPerson"];
    $query="select count, c.idItem, p.id, p.name, p.price, p.saleOff, p.picture from cart as c join product as p on c.idItem = p.id where c.idPerson like n'$id'";
    $item = getAll($query); 
    if(!empty($item)) {
        $alert = "";
    }
    if(empty($_SESSION)) {
        header("location:../login.php");
    }
   
    $total=0;
?>