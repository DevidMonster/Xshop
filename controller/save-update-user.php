<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["userId"];

    $query="select * from person where id like n'$id'";
    $user = getOne($query);

    $userName = $_POST["userName"];
    $email = $_POST["userEmail"];
    $active = $_POST["active"];
    $role = $_POST["role"];
    if($_FILES["Avatar"]["size"] != 0) {
        $userImage = $_FILES["Avatar"]["name"];
    } else {
        $userImage = $user["picture"];
    }
    $passWord = $_POST["passWord"];
    $query = "update person set 
            name='$userName',
            passWord='$passWord',
            email='$email',
            picture='$userImage',
            active='$active',
            role='$role'
            where id like n'$id'";

    connect($query);

    move_uploaded_file($_FILES["Avatar"]["tmp_name"],"../src/images/".$_FILES["Avatar"]["name"]);

    header("location:../view/admin-view/users.php"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>  