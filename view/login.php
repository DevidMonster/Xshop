 <!-- form đăng nhập -->
    <?php
        session_start(); //bắt đầu session

        include "../model/connect.php"; 
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
                            header("location:./index.php"); 
                        } else {
                            header("location:./admin-view/main.php");
                        }
                    } else {
                        $error =  "*Nhập sai mật khẩu hoặc tên đăng nhập";
                    }
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
    <title>Login</title>
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
        <form action="login.php" method="POST">
            <h1 align="center">Login</h1>
            <span style="color:red;" ><?php echo $error ?></span>
            <br>
            <label for="username">User Name</label>
            <input type="text" name="username" placeholder="Enter Your Username" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Your Password" required>
            
            <button type="submit" name="btn-login">Login</button>

            <span>Dont have acount? <a href="./signup.php">Create here</a></span>
        </form>
    </div>
</body>
</html>