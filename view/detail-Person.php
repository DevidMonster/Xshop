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
    $id = $_GET["id"];

    session_start();
    if(empty($_SESSION)) {
        header("location:./login.php");
    } else if (empty($_GET["id"])) {
        header("location:./index.php");
    }

    $query = "select * from person where id like n'$id'";
    $user = getOne($query);

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
    <link rel="stylesheet" href="../src/css/detail-person.css">
    <title>Your Profile</title>
</head>
<script type="text/javascript">
    function alerts() {
        if(<?php echo $_SESSION['success']; ?> == 1) {
            <?php $_SESSION['success'] == 0; ?> ; 
            alert('Thay đổi thành công'); 
        }        
    }
    alerts();
</script>
<body >
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
    <div class="detail-Person">
        <h1 align="center">Your Profile</h1>
        <div class="container">
            <div class="info-left">
                <div class="avatar-profile">
                <img src="../src/images/<?php echo $user["picture"] ?>" alt="Avatar">
                </div>
                <form action="../controller/change-avatar.php" method="POST" enctype="multipart/form-data" class="form-picture">
                    <input type="text" name="id" value="<?php echo $_SESSION["idPerson"]?>" hidden>
                    <label for="image">Thay avatar</label>
                    <br>
                    <input type="file" name="avatar">
                    <span><button class="submit">Thay đổi</button></span>
                </form>
            </div>
            <div class="info-right">
                <input type="text" id="nameStorage" value="<?php echo $user["name"]?>" hidden>
                <input type="email" id="emailStorage" value="<?php echo $user["email"]?>" hidden>
                <form action="../controller/change-info.php" method="POST" class="form-info">
                    <input type="text" name="id" value="<?php echo $_SESSION["idPerson"]?>" hidden>
                    <label for="name">Full name</label> <br>
                    <input type="text" name="fullname" oninput="disabledFalse()" id="name" value="<?php echo $user["name"]?>" required disabled>
                    <span><button type="button"  id="change-name" class="edit-btn">Thay đổi</button></span> <br>
                    <label for="email">Email</label> <br>
                    <input type="email" name="email" oninput="disabledFalse()" id="email" value="<?php echo $user["email"]?>" required disabled>
                    <span><button type="button"  id="change-email" class="edit-btn">Thay đổi</button></span> <br>
                    <button class="submit" disabled>Lưu Thông Tin</button>
                </form>
                <a href="../controller/logout.php"><button class="logout"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
                <a href="./index.php"><button class="logout"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Reverse</button></a>
                <a href="./change-password.php"><button class="logout">Đổi mật khẩu</button></a>
            </div>
        </div> 
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