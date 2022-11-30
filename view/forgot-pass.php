<?php
    include_once "../model/connect.php";
    include_once "../controller/forgot-pass.php";
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
        <form action="./forgot-pass.php" method="POST">
            <?php if($password == "") { ?>
                <h1>Enter your infomation</h1>
                <span style="color:red;" ><?php echo $error ?></span>
                <br>
                <label for="username">User Name</label>
                <input type="text" name="username" placeholder="Enter Your Username" required>
                
                <label for="idPerson">Your Id</label>
                <input type="text" name="idPerson" placeholder="Enter Your Id" required>
                
                <button type="submit" name="btn-login">Find</button>
                <span><a href="./login.php">Go to Login</a></span> or <span><a href="./signup.php">Go to Signup</a></span>
            <?php } else { ?>
                <h1 align="center">Your Password</h1>
                <br>
                <input type="text" value="<?php echo $password;?>">
                
                <button type="submit">Next</button>
                <?php $password = "";?>
            <?php } ?>
        </form>
    </div>
</body>
</html>