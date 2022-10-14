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
    $alert = "Giỏ hàng của bạn đang trống";
    $id = $_SESSION["idPerson"];
    $query="select count, c.idItem, p.id, p.name, p.price, p.saleOff, p.picture from cart as c join product as p on c.idItem = p.id where c.idPerson like n'$id'";
    $item = getAll($query); 
    if(!empty($item)) {
        $alert = "";
    }
    if(empty($_SESSION)) {
        header("location:./login.php");
    }
   
    $total=0;
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
    <link rel="stylesheet" href="../src/css/cart.css">
    <title>Detail Product</title>
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
            <div class="avatar">
                <a href="./detail-Person.php?id=<?php echo $_SESSION["idPerson"] ?>"><img src=".<?php echo $_SESSION["avatar"] ?>" alt=""></a>
            </div>
            <a href="../controller/logout.php"><button><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
        </div>
    </header>
    <a href="#">
        <div class="scroll-header">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </div>
    </a>
    <div class="your-cart">
        <h1>Your Cart</h1>
        <h1 class="alert"><?php echo $alert; ?></h1>
        <div class="box">
            <?php foreach($item as $value): ?>
                <div class="item">
                    <div class="avaItem">
                        <img src="../src/images/<?php echo $value["picture"] ?>" alt="">
                    </div>
                    <div class="content">
                        <h1><?php echo $value["name"]?></h1> <br>
                        <h2><?php echo $value["price"]?> $</h2> <br>
                        <span>Count: <?php echo $value["count"]?></span><span>SaleOff: <?php echo $value["saleOff"]?>%</span> <br> <br>
                        <p>Cost: <?php if($value["saleOff"] == 0) { $result = $value["price"] * $value["count"]; echo $result; } else { $result = $value["price"] * $value["count"] * ($value["saleOff"]/100); echo $result; } ?> $</p>
                        <div class="itemFooter">
                            <a href="../controller/delete-item-in-cart.php?id=<?php echo $value["idItem"]?>"><button class="delete-item-in-cart">Remove Item</button></a>
                        </div>
                    </div>
                </div>
                <?php  $total = $total + $result;?>
            <?php endforeach ?>
        </div>

        <div class="total">
            <span class="total" >your total payment is: <?php echo $total ?> $</span>
            <button class="btn-accept" >Accept Order</button>
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
<script src="../src/js/script.js"></script>
</html>