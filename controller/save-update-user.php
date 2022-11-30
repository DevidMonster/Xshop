<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["userId"];
    session_start();
    $query="select * from person where id like n'$id'";
    $user = getOne($query);
    if(!empty($_POST["userName"]) && !empty($_POST["userEmail"]) && !empty($_POST["passWord"])) {
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

        header("location:../view/admin-view/users.php?ctr=user"); 
    } else {
        if(empty($_POST["userName"])) {
            $_SESSION["errName"] = "Bạn phải điền tên";
        } else {
            $_SESSION["errName"] = "";
        }

        if(empty($_POST["userEmail"])) {
            $_SESSION["errEmail"] = "Bạn phải điền gmail";
        } else {
            $_SESSION["errEmail"] = "";
        }
        
        if(empty($_POST["userPass"])) {
            $_SESSION["errPass"] = "Bạn phải điền mật khẩu";
        } else {
            $_SESSION["errPass"] = "";
        }

        header("location:../view/admin-view/form-action/update-user.php?id=$id&ctr=user");
    }
?>  