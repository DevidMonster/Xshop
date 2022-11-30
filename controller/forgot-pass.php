<?php
    session_start(); //bắt đầu session 
    $idPerson = "";
    $password = "";
    $error = "";
    if(isset($_POST["btn-login"])){
        if(!$_POST["username"] == "" && !$_POST["idPerson"] == ""){
            $idPerson = $_POST["idPerson"];
            $query = "select * from person where id like n'$idPerson'"; 
            $users = getOne($query); 
            if(!empty($users)) {
                if($_POST["username"] == $users["name"] && $_POST["idPerson"] == $users["id"]){ 
                    $password = $users["passWord"];
                    $show = "Mật khẩu của bạn là $password";
                } else {
                    $error =  "*Sai tên đăng nhập hoặc id của bạn";
                }
            } else {
                $error =  "*Tài khoản không tồn tại";
            }
        }
    }
?>