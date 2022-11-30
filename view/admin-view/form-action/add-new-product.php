<?php
        include "../../../model/connect.php";
        $query = "select * from category";
        $category = getAll($query);
        session_start();
        if(empty($_SESSION)) {
            header("location:../../login.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../src/css/main.css">
    <link rel="stylesheet" href="../../../src/css/form-add-update-product.css">
    <title>Add New</title>
</head>
<body>
    <div class="containers">
        <?php include_once 'aside.php'?>
        <main>
            <?php require_once "header.php"?>
            <h1 align="center">Add new Product</h1>
            <div class="addNew">
                <form action="../../../controller/save-add-product.php" method="POST" enctype="multipart/form-data" class="add">
                    <span>Tên sản phẩm</span>
                    <input type="text" name="productName" placeholder="Nhập tên sản phẩm"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errName"])) { echo $_SESSION["errName"]; }?></span>
                        <br>
                    <span>Giá sản phẩm</span>
                    <input type="number" name="productPrice" placeholder="Nhập giá giá sản phẩm"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errPrice"])) { echo $_SESSION["errPrice"]; }?></span>
                        <br>
                    <span>Giảm giá</span>
                    <input type="number" name="productsaleOff" value="0" placeholder="Nhập mức giảm giá" min="0" max="100"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errSaleOff"])) { echo $_SESSION["errSaleOff"]; }?></span>
                        <br>
                    <span>Ảnh sản phẩm</span>
                    <input type="file" name="productImage"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errPicture"])) { echo $_SESSION["errPicture"]; }?></span>
                        <br>
                    <span>Ngày nhập</span>
                    <input type="date" name="date"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errDate"])) { echo $_SESSION["errDate"]; }?></span>
                        <br>
                    <span>Hàng đặc biệt</span> <br>
                    <input type="radio" name="special" value="1"> <span>Đặc biệt</span>
                    <input type="radio" name="special" value="2"> <span>Không đặc biệt</span> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errSpecial"])) { echo $_SESSION["errSpecial"]; }?></span>
                        <br>
                    <span>Mô tả sản phẩm</span>
                    <textarea name="productDesc" id="" cols="85" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errDesc"])) { echo $_SESSION["errDesc"]; }?></span>
                        <br> 
                    <input type="number" name="viewCount" value="0" placeholder="Nhập số lượt xem" hidden>               
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
<?php $_SESSION["errName"] = $_SESSION["errPrice"] = $_SESSION["errSaleOff"] = $_SESSION["errPicture"] = $_SESSION["errDate"] = $_SESSION["errSpecial"] = $_SESSION["errDesc"] = "";?>
</html>