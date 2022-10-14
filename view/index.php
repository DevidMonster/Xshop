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

    $query = "select * from product";
    $products = getAll($query);

    $query2 = "select l.id, count(hh.idLoai) as 'countProduct', l.name from category as l join product as hh on l.id = hh.idLoai group by l.id;";
    $categories = getAll($query2);
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
    <title>Shop Áp Hoodie</title>
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
    <div class="banner">
        <img src="../src/images/banner.jpg" alt="">
    </div>
    <div class="wrapper">
        <div class="pic">
            <img src="../src/images/pic1.jpg" alt="">
            <div class="hover">
                <button>more</button>
            </div>
        </div>
        <div class="pic">
            <img src="../src/images/pic2.jpg" alt="">
            <div class="hover">
                <button>more</button>
            </div>
        </div>
    </div>
    <main>
        <h1 class="title">New items</h1>
        <div class="products line">
            <?php foreach($products as $value): ?>
                <div class="item">
                    <div class="pic-item">
                        <a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><img src="../src/images/<?php echo $value["picture"] ?>" alt=""></a>
                    </div>
                    <h2><a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a></h2>
                    <p><?php echo $value["price"] ?>$</p>
                    <small><?php echo $value["description"] ?></small>
                </div>
            <?php endforeach ?>
        </div>
        <br>
        <div class="categories line">
            <h2 class="title">Categories</h2>
            <div class="category">
                <?php foreach($categories as $value): ?>
                    <div class="show-cate">
                        <div class="desc">
                            <span class="name-cate"><a href=""><?php echo $value["name"] ?></a></span>
                            <br>
                            <small>Count: <?php  echo $value["countProduct"] ?></small>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <h1 class="title">Bestsellers</h1>
        <div class="products line">
            <?php foreach($products as $value): ?>
                <div class="item">
                    <div class="pic-item">      
                        <a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><img src="../src/images/<?php echo $value["picture"] ?>" alt=""></a>
                    </div>
                    <h2><a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a></h2>
                    <p><?php echo $value["price"] ?>$</p>
                    <small><?php echo $value["description"] ?></small>
                </div>
            <?php endforeach ?>
        </div>
        <br>
        <h1 class="title">shop owner</h1>
        <div class="container line">
            <!-- Start Profile -->
            <div class="Card-Profile">
                <div class="card-img">
                    <img src="../src/images/154953931_877219653112543_7131690768362558891_n.jpg" alt="">
                </div>
                <div class="Text">
                    <h3>Trần Thị Thu Phương</h3>
                    <p>Xinh Gái</p>
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
                <div class="action">
                    <button>Contact Me</button>
                </div>  
            </div>
            <!-- Card Profile -->
            <div class="Card-Profile">
                <div class="card-img">
                    <img src="../src/images/175973515_907604300074078_8498852808296764780_n.jpg" alt="">
                </div>
                <div class="Text">
                    <h3>Trần Thị Thu Phương</h3>
                    <p>Đáng Yêu</p>
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
                <div class="action">
                    <button>Contact Me</button>
                </div>  
            </div>
            <!-- Card Profile -->
            <div class="Card-Profile">
                <div class="card-img">
                    <img src="../src/images/186479545_921567448677763_8296669904951623549_n.jpg" alt="">
                </div>
                <div class="Text">
                    <h3>Trần Thị Thu Phương</h3>
                    <p>Tài Giỏi</p>
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
                <div class="action">
                    <button>Contact Me</button>
                </div>  
            </div>
            <!-- Card Profile -->
        </div>
        <br>
    </main>
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
    <script src="../src/js/slick.js"></script>
    <script src="../src/js/script.js"></script>
</body>
</html>
	