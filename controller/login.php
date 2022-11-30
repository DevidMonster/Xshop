<?php
    session_start(); //bắt đầu session
    $query = "select * from person"; 
    $users = getAll($query); 
    $error=" ";
    foreach($users as $value){ 
        if(isset($_POST["btn-login"])){
            if(!$_POST["username"] == "" && !$_POST["password"] == ""){
                if($_POST["username"] == $value["name"] && $_POST["password"] == $value["passWord"]){ 
                    $_SESSION["username"] = $_POST["username"]; 
                    $_SESSION["avatar"] = "./src/images/".$value["picture"];
                    $_SESSION["id"] = $value["role"];
                    $_SESSION["idPerson"] = $value["id"];
                    if($_SESSION["id"] == 1) {
                        header("location:./client-view/index.php"); 
                    } else {
                        header("location:./admin-view/dashboard.php?ctr=dashboard");
                    }
                } else {
                    $error =  "*Nhập sai mật khẩu hoặc tên đăng nhập";
                }
            }
        }
    }
?>