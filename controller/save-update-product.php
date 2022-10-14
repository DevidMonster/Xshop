<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["idProduct"];

    $query="select * from product where id=$id";
    $product = getOne($query);

    $productName = $_POST["productName"];

    if($_FILES["productImage"]["size"] != 0) {
        $productImage = $_FILES["productImage"]["name"];
    } else {
        $productImage = $product["picture"];
    }

    $productPrice = $_POST["productPrice"];
    $productsaleOff = $_POST["productSaleOff"];
    $special = $_POST["special"];
    $date = $_POST["date"];
    $viewCount = $_POST["viewCount"];
    $productDesc = $_POST["productDesc"];
    $categoryId = $_POST["category"];



    $query = "update product set 
            name='$productName',
            price=$productPrice,
            saleOff=$productsaleOff,
            picture='$productImage',
            ngayNhap='$date',
            description='$productDesc',
            special='$special',
            viewCount = $viewCount,
            idLoai = $categoryId
            where id=$id";

    connect($query);

    move_uploaded_file($_FILES["productImage"]["tmp_name"],"../src/images/".$_FILES["productImage"]["name"]);

    header("location:../view/admin-view/product.php"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>  