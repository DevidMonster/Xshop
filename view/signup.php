<!-- form đăng nhập -->
<?php
        session_start(); 
        include "../model/connect.php";  
   
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
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/signin singup.css">
    <title>SignUp</title>
</head>
<body>
    <div class="container">
        <div class="slogan">
            <h1>
                THE <br> 
                DEFENDER OF <br> 
                TOMORROW <br>
            </h1>
            <img src="../src/images/logo.png" class="logo" alt="">
        </div>
        <form action="signup.php" method="POST" enctype="multipart/form-data">
            <h1 align="center">SignUp</h1>
            <span style="color:red;" ><?php echo $error ?></span>
            <br>
            <label for="idUser">Id</label>
            <input type="text" name="idUser" placeholder="Enter Id" required>

            <label for="username">User Name</label>
            <input type="text" name="username" placeholder="Enter Your Username" required>

            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter Your Email" required>

            <span>Ảnh đại diện</span>
            <input type="file" name="Avatar" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Your Password" required>
            
            <label for="password">Repeat Password</label>
            <input type="password" name="rppassword" placeholder="Pepeat Your Password" required>

            <button type="submit" name="btn-signup">SignUp</button>

            <span>You early have acount? <a href="login.php">Login here</a></span>
        </form>
    </div>
</body>
</html>