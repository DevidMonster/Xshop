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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../src/css/slick.css">
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/css/cart.module.css">
    <link rel="stylesheet" href="../../src/css/detail-product.module.css">
    <link rel="stylesheet" href="../../src/css/change-password.css">
    <link rel="stylesheet" href="../../src/css/detail-person.css">
    <title>Shop Áp Hoodie</title>
</head>
<script type="text/javascript">
    <?php if(isset($isset)) {?>
        function alerts() {
            if(<?php echo $_SESSION['success']; ?> == 1) {
 
                alert('Thay đổi thành công'); 
            }        
        }
        alerts();
        
    <?php }?>
</script>
<body>
    <header>
        <ul class="menu">
            <?php foreach($menu as $value): ?>
                <li><a href="<?php echo $value["link"] ?>"><?php echo $value["name"] ?></a></li>
            <?php endforeach ?>
        </ul>
        <img class="logo" src="../../src/images/logo.png" alt="">
        <div class="func">
            <!-- find Item -->
            <form action="index.php" method="POST">
                <input type="text" name="Filter" class="find">
                <button><i class="fa fa-search" aria-hidden="true" id="search"></i></button>
            </form>
            <!-- End -->
            <a class="cart" href="./cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
            <div class="avatar">
                <a href="./detail-Person.php?id=<?php echo $_SESSION["idPerson"] ?>"><img src="../.<?php echo $_SESSION["avatar"] ?>" alt=""></a>
            </div>
            <a href="../../controller/logout.php"><button><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
        </div>
    </header>

    <!-- Sroll to head -->
    <a href="#">
        <div class="scroll-header">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </div>
    </a>
    <!-- Sroll to head -->
    <?php $_SESSION['success'] = 0;?>
