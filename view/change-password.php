<?php
    $menu = [
        [
            "name" => "Home",
            "link" => "index.php",
        ],
        [
            "name" => "Products",
            "link" => "product.php",
        ],
        [
            "name" => "AboutUs",
            "link" => "aboutus.php",
        ],
        [
            "name" => "Blog",
            "link" => "blog.php",
        ],
        [
            "name" => "Contact",
            "link" => "contact.php",
        ],
    ];
    include '../model/connect.php';

    session_start();
    if(empty($_SESSION)) {
        header("location:./login.php");
    }
    $id = $_SESSION["idPerson"];
    $query = "select * from person where id like n'$id'"; 
    $users = getOne($query); 
    $error="";
    $_SESSION["success"] = 0;
        if(isset($_POST["btn-login"])){
            if(!empty($_POST["passWord"]) && !empty($_POST["rePassWord"]) && !empty($_POST["new-password"])){
                if($_POST["passWord"] == $users["passWord"]){ 
                    if($_POST["new-password"] == $_POST["rePassWord"]) {  
                        $_SESSION["success"] = 1;
                        
                        $passWord = $_POST["new-password"];
                        $query = "update person set passWord = '$passWord' where id like n'$id'";
                        connect($query);
                        header("location:./detail-Person.php?id=$id");
                    } else {
                        $error = "Mật khẩu nhập lại không trùng khớp!";
                    }
                } else {
                    $error =  "*Nhập sai mật khẩu";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../src/css/slick.css">
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/change-password.css">
    <title>Your Profile</title>
</head>
<body>
    <header>
        <ul class="menu">
            <?php foreach($menu as $value): ?>
                <li><a href="<?php echo $value["link"] ?>"><?php echo $value["name"] ?></a></li>
            <?php endforeach ?>
        </ul>
        <img class="logo" src="../src/images/logo.png" alt="">
        <div class="func">
            <input type="text" class="find">
            <i class="fa fa-search" aria-hidden="true" id="search"></i>
            <a class="cart" href="./cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
            <a href="../controller/logout.php"><button><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
        </div>
    </header>
    <a href="#">
        <div class="scroll-header">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </div>
    </a>  
    <a href="./detail-Person.php?id=<?php echo $id; ?>"><button class="reverse">Quay lại</button></a>
    <div class="wrap">

        <h1 align="right" class="title-form">Change Your Password</h1>
        <form action="change-password.php" class='form' method="POST">
            <span style="color:yellow;" ><?php echo $error ?></span>
                <br>
            <label for="passWord">Your Password</label> <br>
            <input type="password" name="passWord" placeholder="Enter Your Password" required>
                <br>
            <label for="new-password">New Password</label> <br>
            <input type="password" name="new-password" placeholder="Enter New Password" required>
                <br>
            <label for="rePassWord">Repeat Password</label> <br>
            <input type="password" name="rePassWord" placeholder="Repeat Password" required>
                <br>
            <button type="submit" name="btn-login">Login</button>

        </form>
    </div>
    <footer>
        <div class="contact">
            <div class="Text">
                <h1>096-969-1630</h1>
                <p>All day , 13:00 - 22:00</p>
            </div>
            <div class="cousial">
                <a href="https://www.facebook.com/thuphuong.tranthi.1297">
                    <i class="fa fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="https://www.youtube.com/">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/p_phuong1207/">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="menu-footer">
            <img class="logo" src="../src/images/logo.png" alt="">
            <ul class="menu">
                <?php foreach($menu as $value): ?>
                    <li><a href="<?php echo $value["link"] ?>"><?php echo $value["name"] ?></a></li>
                <?php endforeach ?>
            </ul>
            
        </div>
        <div class="signup">
            <form action="">
                <input type="email" placeholder="Enter your Email" required>
                <br>
                <button>Sign me up <i class="fa fa-check" aria-hidden="true"></i></button>
            </form>
            <p>Be the first to know about our new arrivals and exclusive offers.</p>
        </div> 
        <div class="text">
            © Copyright 2022 Dream-Theme. All rights reserved.
        </div>          
    </footer>
</body>

<script src="../src/js/action.js"></script>
<script src="../src/js/script.js"></script>
</html>