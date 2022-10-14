<?php
        include "../model/connect.php";
        $query = "select * from category";
        $category = getAll($query);
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
    <title>Add New</title>
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
            <h1 align="center">Add new Product</h1>
            <div class="addNew">
                <form action="../controller/save-add-product.php" method="POST" enctype="multipart/form-data" class="add">
                    <span>Tên sản phẩm</span>
                    <input type="text" name="productName" placeholder="Nhập tên sản phẩm" required>
                        <br>
                    <span>Giá sản phẩm</span>
                    <input type="number" name="productPrice" placeholder="Nhập giá giá sản phẩm">
                        <br>
                    <span>Giảm giá</span>
                    <input type="number" name="productsaleOff" placeholder="Nhập mức giảm giá" required>
                        <br>
                    <span>Ảnh sản phẩm</span>
                    <input type="file" name="productImage" required>
                        <br>
                    <span>Ngày nhập</span>
                    <input type="date" name="date" required>
                        <br>
                    <span>Hàng đặc biệt</span> <br>
                    <input type="radio" name="special" value="1"> <span>Đặc biệt</span>
                    <input type="radio" name="special" value="2"> <span>Không đặc biệt</span>
                        <br>
                    <span>Mô tả sản phẩm</span>
                    <textarea name="productDesc" id="" cols="85" rows="10" placeholder="Nhập mô tả sản phẩm" required></textarea>
                        <br> 
                    <span>Số lượt xem</span>
                    <input type="number" name="viewCount" placeholder="Nhập số lượt xem">
                        <br>                
                    <span>Danh mục sản phẩm</span>
                    <select name="category" id="">
                        <?php foreach($category as $key => $value):?>
                            <option value="<?php echo $value["id"]?>"> <?php echo $value["name"]?></option>
                        <?php endforeach?>
                    </select>
                        <br>
                    <button type="submit">Add New Product</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>