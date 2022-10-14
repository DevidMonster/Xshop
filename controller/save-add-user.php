<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $idPerson = $_POST["userID"];
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userImage = $_FILES["Avatar"]["name"];
    if($_POST["passWord"] == $_POST["rpPassWord"]) {
        $passWord = $_POST["passWord"]; 
    } else {
        header("location:../error.php");
        die;
    }
    $active = $_POST["active"];
    $role = $_POST["role"];
    $query = "insert into person(id,name,passWord,email,picture,active,role) values ('$idPerson','$userName','$passWord','$userEmail','$userImage', $active, $role)";

    connect($query);

    move_uploaded_file($_FILES["Avatar"]["tmp_name"],"../src/images/".$_FILES["Avatar"]["name"]);

    header("location:../view/admin-view/users.php"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>