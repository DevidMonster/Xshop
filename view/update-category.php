<?php
        include "../model/connect.php";
        $id = $_GET["id"];
        $query = "select * from category where id=$id";
        $category = getOne($query);
        session_start();
        if(empty($_SESSION)) {
            header("location:./login.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="stylesheet" href="../src/css/form-add-update-product.css">
    <title>Update</title>
</head>
<body>
    <div class="containers">
        <aside>
            <div class="logo">
                <img src="../src/images/image 1.png" alt="">
            </div>
            <ul class="menu">
                <li><a href="../main.php"><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href="../product.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Products</a></li>
                <li><a href="../users.php"><i class="fa fa-laptop" aria-hidden="true"></i> Users</a></li>
                <li><a href="../category.php"><i class="fa fa-list-alt" aria-hidden="true"></i> Category</a></li>
                <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistical</a></li>
            </ul>
        </aside>
        <main>
            <header>
                <div class="option">
                    <div class="row">
                        <div class="ava">
                            <img src=".<?php echo $_SESSION["avatar"] ?>" alt="">
                        </div>
                        <div class="userName">
                            <p>welcome, <a href="#"><?php echo $_SESSION["username"] ?></a></p>
                        </div>
                        <div class="connect">
                            <div class="center">
                                <a href="#"><button><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</button></a>
                                <a href="../controller/logout.php"><button><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
                            </div>
                        </div>
                    </div>
                </div>  
            </header>
            <h1 align="center">Update category</h1>
            <div class="addNew">
                <form action="../controller/save-update-category.php" method="POST" enctype="multipart/form-data" class="add">
                    <input type="text" name="idCate" value="<?php echo $category["id"] ?>" hidden>
                    <span>Tên danh mục</span>
                    <input type="text" name="categoryName" value="<?php echo $category["name"] ?>" placeholder="Nhập tên danh mục" required>
                        <br>
                    <button type="submit">Update Category</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>