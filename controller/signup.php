<?php
    session_start(); 
    $error = " ";
    if(isset($_POST["btn-signup"])){ 
        if(!$_POST["username"] == "" && !$_POST["password"] == "" && !$_POST["rppassword"] == "" && !$_FILES["Avatar"]["size"] == 0){
            $check = $_POST["username"];
            $query = "select * from person where name like n'$check'"; 
            $users = getAll($query);
            if(count($users) == 0) {
                if($_POST["password"] == $_POST["rppassword"]){
                    $id = $_POST["idUser"];
                    $userName = $_POST["username"];
                    $userEmail = $_POST["email"];
                    $userImage = $_FILES["Avatar"]["name"]; 
                    $passWord = $_POST["password"]; 
                    $active = 1;
                    $role = 1;
                    var_dump($_FILES);
                    $query = "insert into person(id, name, passWord, email, picture, active, role) values ('$id','$userName', '$passWord', '$userEmail','$userImage', $active, $role)";

                    connect($query);

                    move_uploaded_file($_FILES["Avatar"]["tmp_name"],"../src/images/".$_FILES["Avatar"]["name"]);

                    header("location:./login.php");
                }
                else{
                    $error =  "*Nhập sai dữ liệu hoặc mật khẩu không trùng khớp";
                }
            } else {
                $error =  "*Tên người dùng đã tồn tại";
            }
        } else {
            $error = "Bạn chưa nhập đủ dữ liệu";
        }
    }
?>