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

    $query = "select * from product where id=$id";
    $products = getOne($query);

    $query2 = "select bl.id, title, idItem, idPerson, timeComment, p.name, p.picture from comment as bl join person as p on idPerson = p.id where idItem = $id";
    $comments = getAll($query2);

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
    <link rel="stylesheet" href="../src/css/detail-product.css">
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
            <a class="cart" href="./cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
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
    <div class="detail-product">
        <h1 style="margin-left: 20px;">Thông tin sản phẩm</h1>
        <br>
        <div class="info">
            <div class="picture">
                <img src="../src/images/<?php echo $products["picture"]?>" alt="<?php echo $products["name"]?>">
                <p class="special"><?php if($products["special"] == 49) { echo "Hàng đặc biệt"; } else { echo "Hàng không đặc biệt"; }?></p>
            </div>
            <div class="infomation">
                <h1 class="nameProduct"><?php echo $products["name"]?></h1>
                <p class="priceProduct"><?php echo $products["price"]?> $</p>
                <h2 class="saleOff">saleOff: <strong style="color: red;"><?php echo $products["saleOff"]?> %</strong></h2>
                <form action="../controller/save-add-to-cart.php" method="POST">
                    <input type="number" name="id" value="<?php echo $id?>" hidden>
                    <div class="countItem">
                    <button type="button" class="decrease">-</button>
                    <input type="text" class="count" value="1" name="count" >
                    <button type="button" class="increase">+</button>
                    </div>
                    <br>
                    <button class="addItem">Add to cart</button>
                </form>
            </div>
        </div>
        <div class="more-info">
            <h1>Mô tả sản phẩm</h1>
            <small class="date">Ngày nhập hàng: <?php echo $products["ngayNhap"]?></small>
            <br>
            <small class="view">Số lượt xem: <?php echo $products["viewCount"]?></small>
            <p class="description"><?php echo $products["description"]?></p>
        </div>
    </div>
    <br><hr><br>
    <form action="../controller/save-comment.php" method="POST" class="comment">
        <h3>Hãy để lại bình luận của bạn ở đây</h3>
        <input type="number" name="id" value="<?php echo $id?>" hidden>
        <textarea name="comment" class="input" cols="170" rows="10" placeholder="Text here"></textarea>
        <button>Send Comment</button>
    </form>
    <br><hr><br>
    <div class="viewComment">
        <h3>Xem bình luận</h3>
        <br>
        <div class="box">
            <?php foreach($comments as $value): ?>
                <div class="showComment">
                    <div class="head">
                        <div class="avatar-comment">
                            <img src="../src/images/<?php echo $value["picture"]?>" alt="">
                        </div>
                        <div class="nameinfo">
                            <h5 class="namePerson"><?php echo $value["name"]?></h5>
                            <small class="timeComment"><?php echo $value["timeComment"]?></small>
                        </div>
                    </div>
                    <div class="detail-comment">
                        <p class="textComment"><?php echo $value["title"]?></p>
                    </div>
                </div>
            <?php endforeach ?>
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