<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["idCate"];

    $query="select * from category where id=$id";
    $category= getOne($query);

    $categoryName = $_POST["categoryName"];
    $query = "update categories set 
            name='$categoryName'
            where id=$id";

    connect($query);

    header("location:../view/admin-view/category.php"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>  