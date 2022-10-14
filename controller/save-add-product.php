<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model

    // echo "<pre>";
    $productName = $_POST["productName"];
    $productsaleOff = $_POST["productsaleOff"];
    $special = $_POST["special"];
    $date = $_POST["date"];
    $productImage = $_FILES["productImage"]["name"];
    $productPrice = $_POST["productPrice"]; 
    $productDesc = $_POST["productDesc"];
    $viewCount = $_POST["viewCount"];
    $category = $_POST["category"]; 
    $query = "insert into product(name, price, saleOff, picture, ngayNhap, description, special, viewCount, idLoai) values ('$productName',$productPrice,$productsaleOff,'$productImage','$date','$productDesc', '$special', $viewCount,$category)";

    connect($query);

    move_uploaded_file($_FILES["productImage"]["tmp_name"],"../src/images/".$_FILES["productImage"]["name"]);

    header("location:../view/admin-view/product.php"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>