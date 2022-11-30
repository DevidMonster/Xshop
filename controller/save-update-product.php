<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["idProduct"];

    session_start();
    if(!empty($_POST["productName"]) && !empty($_POST["productPrice"]) && !empty($_POST["productDesc"]) && !empty($_POST["date"]) && isset($_POST["productsaleOff"])) {
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
                idLoai = $categoryId
                where id=$id";

        connect($query);

        move_uploaded_file($_FILES["productImage"]["tmp_name"],"../src/images/".$_FILES["productImage"]["name"]);

        header("location:../view/admin-view/product.php?ctr=product"); 
    } else {
        if(empty($_POST["productName"])) {
            $_SESSION["errName"] = "Bạn phải điền tên";
        } else {
            $_SESSION["errName"] = "";
        }

        if(empty($_POST["productPrice"])) {
            $_SESSION["errPrice"] = "Bạn phải nhập giá tiền";
        } else {
            $_SESSION["errPrice"] = "";
        }

        if(empty($_POST["productSaleOff"])) {
            $_SESSION["errSale"] = "Bạn phải nhập tối thiểu mức giảm giá từ 0";
        } else {
            $_SESSION["errSale"] = "";
        }

        if(empty($_POST["date"])) {
            $_SESSION["errDate"] = "Bạn phải điền ngày nhập";
        } else {
            $_SESSION["errDate"] = "";
        }

        if(empty($_POST["productDesc"])) {
            $_SESSION["errDesc"] = "Bạn phải điền mô tả sản phẩm";
        } else {
            $_SESSION["errDesc"] = "";
        }

        header("location:../view/admin-view/form-action/update-product.php?id=$id&ctr=user");
    }
?>  