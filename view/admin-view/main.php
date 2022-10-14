<?php
    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    } else {
        if($_SESSION["id"] == 1) {
            header("location:../index.php");
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
    <link rel="stylesheet" href="../../src/css/main.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="containers">
        <aside>
            <div class="logo">
                <img src="../../src/images/logo.png" alt="logo">
            </div>
            <ul class="menu">
                <li><a href="main.php" id="active"><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href="product.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Products</a></li>
                <li><a <?php if($_SESSION["id"] == 2) { echo "onclick=(alert('Bạn_không_phải_quản_lý'))"; } else { echo "href='users.php'"; }?> ><i class="fa fa-laptop" aria-hidden="true"></i> Users</a></li>
                <li><a href="category.php"><i class="fa fa-list-alt" aria-hidden="true"></i> Category</a></li>
                <li><a href="comment.php"><i class="fa fa-comments" aria-hidden="true"></i> Comment</a></li>
                <li><a <?php if($_SESSION["id"] == 2) { echo "onclick=(alert('Bạn_không_phải_quản_lý'))"; } else { echo "href='statistical.php'"; }?> ><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistical</a></li>
            </ul>
        </aside>
        <main>
            <header>
                <div class="option">
                    <div class="row">
                        <div class="ava">
                            <img src="../.<?php echo $_SESSION["avatar"] ?>" alt="">
                        </div>
                        <div class="userName">
                            <p>welcome, <a href="#"><?php echo $_SESSION["username"] ?></a></p>
                        </div>
                        <div class="connect">
                            <div class="center">
                                <a href="#"><button><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</button></a>
                                <a href="../../controller/logout.php"><button><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
                            </div>
                        </div>
                    </div>
                </div>  
            </header>
            <div class="banner">
                <div class="title">
                    <h1>Welcome to Dashboard</h1>
                    <p>Do your future</p>
                </div>
                <div class="pic-banner">
                    <img src="../../src/images/slider-pic.png" alt="">
                </div>
            </div>
        </main>
    </div>
</body>
</html>