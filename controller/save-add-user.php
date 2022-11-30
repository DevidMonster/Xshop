<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    session_start();
    if(!empty($_POST["userID"]) && !empty($_POST["userName"]) && !empty($_POST["userEmail"]) && !empty($_POST["passWord"]) && !empty($_POST["rpPassWord"]) && !empty($_POST["active"]) && !empty($_POST["role"]) && !empty($_FILES["Avatar"]["name"])) {
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

        header("location:../view/admin-view/users.php?ctr=user");
    } else {
        if(empty($_POST["userName"])) {
            $_SESSION["errName"] = "Bạn phải điền tên";
        } else {
            $_SESSION["errName"] = "";
        }
        if(empty($_POST["userID"])) {
            $_SESSION["errId"] = "Bạn phải điền mã người dùng";
        } else {
            $_SESSION["errId"] = "";
        }

        if(empty($_POST["userEmail"])) {
            $_SESSION["errEmail"] = "Bạn phải điền gmail";
        } else {
            $_SESSION["errEmail"] = "";
        }
        
        if(empty($_POST["passWord"])) {
            $_SESSION["errPass"] = "Bạn phải điền mật khẩu";
        } else {
            $_SESSION["errPass"] = "";
        }

        if(empty($_POST["rpPassWord"])) {
            $_SESSION["errRpPass"] = "Bạn phải điền lại mật khẩu";
        } else {
            $_SESSION["errRpPass"] = "";
        }

        if(empty($_POST["active"])) {
            $_SESSION["errActive"] = "Bạn phải chọn trạng thái";
        } else {
            $_SESSION["errActive"] = "";
        }

        if(empty($_POST["role"])) {
            $_SESSION["errRole"] = "Bạn phải chọn vai trò";
        } else {
            $_SESSION["errRole"] = "";
        }
        if($_FILES["userAva"]["size"] == 0) {
            $_SESSION["errAva"] = "Bạn phải chọn avatar";
        } else {
            $_SESSION["errAva"] = "";
        }

        header("location:../view/admin-view/form-action/add-new-user.php?ctr=user");
    }
?>