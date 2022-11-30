<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["idCate"];

    session_start();
    if(!empty($_POST["categoryName"])) {
        $query="select * from category where id=$id";
        $category= getOne($query);

        $categoryName = $_POST["categoryName"];
        $query = "update category set 
                name='$categoryName'
                where id=$id";

        connect($query);

        header("location:../view/admin-view/category.php?ctr=category");
    } else {
        if(empty($_POST["categoryName"])) {
            $_SESSION["errName"] = "Bạn phải điền tên danh mục";
        } else {
            $_SESSION["errName"] = "";
        }
        
        header("location:../view/admin-view/form-action/update-category.php?id=$id&ctr=user");
    }
?>  