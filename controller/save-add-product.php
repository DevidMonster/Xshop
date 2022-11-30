<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    session_start();
    if(!empty($_POST["productName"]) && !empty($_POST["productPrice"]) && !empty($_POST["productDesc"]) && !empty($_POST["date"]) && !empty($_POST["special"]) && isset($_POST["productsaleOff"]) && !empty($_FILES["productImage"]["name"])) {
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

        if(empty($_POST["special"])) {
            $_SESSION["errSpecial"] = "Bạn phải chọn thuộc tính hàng"; 

        } else {
            $_SESSION["errSpecial"] = "";
        }

        if($_FILES["productImage"]["size"] == 0) {
            $_SESSION["errPicture"] = "Bạn phải nhập ảnh của sản phẩm";
        } else {
            $_SESSION["errPicture"] = "";
        }
        header("location:../view/admin-view/form-action/add-new-product.php?ctr=product");
    }
?>