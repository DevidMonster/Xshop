<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model

    // echo "<pre>";
    // var_dump($_FILES);die;
    // var_dump($_POST);die; 
    $categoryName = $_POST["name"];
    $query = "insert into category(name) values ('$categoryName')";

    connect($query);

    header("location:../view/admin-view/category.php"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>