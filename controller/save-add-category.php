<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    session_start();
    if(!empty($_POST["categoryName"])) {
    // echo "<pre>";
    // var_dump($_FILES);die;
    // var_dump($_POST);die; 
    $categoryName = $_POST["categoryName"];
    $query = "insert into category(name) values ('$categoryName')";

    connect($query);

    header("location:../view/admin-view/category.php?ctr=category");

    } else {
        if(empty($_POST["categoryName"])) {
            $_SESSION["errName"] = "Bạn phải điền tên danh mục";
        } else {
            $_SESSION["errName"] = "";
        }
    
    header("location:../view/admin-view/form-action/add-new-category.php?ctr=category");
}
?>