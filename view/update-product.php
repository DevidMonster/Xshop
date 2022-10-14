<?php
        include "../model/connect.php";
        $query = "select * from category";
        $category = getAll($query);
        // var_dump($category);die;

        $id = $_GET["id"];

        $query2 = "select * from product where id=$id";
        $item = getOne($query2);
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
            <h1 align="center">Update Product</h1>
            <div class="addNew">
                <form action="../controller/save-update-product.php" method="POST" enctype="multipart/form-data" class="add">
                    <input type="text" name="idProduct" value="<?php echo $item["id"] ?>" >
                    <span>Tên sản phẩm</span>
                    <input type="text" name="productName" placeholder="Nhập tên sản phẩm" value="<?php echo $item["name"] ?>" required>
                        <br>
                    <span>Giá sản phẩm</span>
                    <input type="number" name="productPrice" placeholder="Nhập giá sản phẩm" value="<?php echo $item["price"] ?>" required>
                        <br>
                    <span>Giảm giá</span>
                    <input type="number" name="productSaleOff" placeholder="Nhập mức giảm giá" value="<?php echo $item["saleOff"] ?>" required>
                        <br>
                    <span>Ảnh sản phẩm</span>
                    <input type="file" name="productImage">
                        <br>
                    <span>Ngày nhập</span>
                    <input type="date" name="date" value="<?php echo $item["ngayNhap"]?>" required>
                    <span>Hàng đặc biệt</span> <br>
                    <input type="radio" name="special" value="1" <?php if($item["special"] == 49) { echo "checked"; }; ?>> <span>Đặc biệt</span>
                        <br>
                    <input type="radio" name="special" value="2" <?php if($item["special"] == 0) { echo "checked"; }; ?>> <span>Không đặc biệt</span>
                        <br>
                    <span>Mô tả sản phẩm</span>
                    <textarea name="productDesc" id="" cols="85" rows="10" placeholder="Nhập mô tả sản phẩm" required><?php echo $item["description"] ?></textarea>
                        <br>
                    <span>Số lượt xem</span>
                    <input type="number" name="viewCount" value="<?php echo $item["viewCount"]?>" placeholder="Nhập số lượt xem">
                        <br>    
                    <span>Danh mục sản phẩm</span>
                    <select name="category" id="">
                        <?php foreach($category as $key => $value):?>
                            <option value="<?php echo $value["id"]?>"> <?php echo $value["name"]?></option>
                        <?php endforeach?>
                    </select>
                        <br>
                    <button type="submit">Update Product</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>