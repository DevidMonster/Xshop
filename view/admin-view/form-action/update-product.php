<?php
        include "../../../model/connect.php";
        $query = "select * from category";
        $category = getAll($query);
        // var_dump($category);die;

        $id = $_GET["id"];

        $query2 = "select * from product where id=$id";
        $item = getOne($query2);
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
    <title>Update</title>
</head>
<body>
    <div class="containers">
        <?php include_once 'aside.php'?>
        <main>
            <?php require_once "header.php"?>
            <h1 align="center">Update Product</h1>
            <div class="addNew">
                <form action="../../../controller/save-update-product.php" method="POST" enctype="multipart/form-data" class="add">
                    <input type="text" name="idProduct" value="<?php echo $item["id"] ?>" hidden>
                    <span>Tên sản phẩm</span>
                    <input type="text" name="productName" placeholder="Nhập tên sản phẩm" value="<?php echo $item["name"] ?>"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errName"])) { echo $_SESSION["errName"]; }?></span>
                        <br>
                    <span>Giá sản phẩm</span>
                    <input type="number" name="productPrice" placeholder="Nhập giá sản phẩm" value="<?php echo $item["price"] ?>" min="0" max="100"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errPrice"])) { echo $_SESSION["errPrice"]; }?></span>
                        <br>
                    <span>Giảm giá</span>
                    <input type="number" name="productSaleOff" placeholder="Nhập mức giảm giá" value="<?php echo $item["saleOff"] ?>"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errSale"])) { echo $_SESSION["errSale"]; }?></span>
                        <br>
                    <span>Ảnh sản phẩm</span>
                    <input type="file" name="productImage"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errPicture"])) { echo $_SESSION["errPicture"]; }?></span>
                        <br>
                    <span>Ngày nhập</span>
                    <input type="date" name="date" value="<?php echo $item["ngayNhap"]?>"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errDate"])) { echo $_SESSION["errDate"]; }?></span>
                    <br>
                    <span>Hàng đặc biệt</span> <br>
                    <input type="radio" name="special" value="1" <?php if($item["special"] == 1) { echo "checked"; }; ?>> <span>Đặc biệt</span>
                        <br>
                    <input type="radio" name="special" value="2" <?php if($item["special"] == 2) { echo "checked"; }; ?>> <span>Không đặc biệt</span>
                        <br>
                    <span>Mô tả sản phẩm</span>
                    <textarea name="productDesc" id="" cols="85" rows="10" placeholder="Nhập mô tả sản phẩm"><?php echo $item["description"] ?></textarea> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errDesc"])) { echo $_SESSION["errDesc"]; }?></span>
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
<?php $_SESSION["errDesc"] = $_SESSION["errDate"]  = $_SESSION["errSale"] = $_SESSION["errSale"] = $_SESSION["errPrice"] = $_SESSION["errName"] = ""; ?>
</html>