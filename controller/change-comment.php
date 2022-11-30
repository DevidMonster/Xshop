<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model

    $idItem = $_POST["idItem"];
    $idCommnent = $_POST["idComment"];
    $timeComment = date("Y/m/d");
    $title = $_POST["new-change"];

    $query = "update comment set 
            title='$title',
            timeComment = '$timeComment'
            where id = $idCommnent";

    connect($query);


    header("location:../view/client-view/detailProduct.php?id=$idItem"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>  