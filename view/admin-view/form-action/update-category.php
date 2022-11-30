<?php
        include "../../../model/connect.php";
        $id = $_GET["id"];
        $query = "select * from category where id=$id";
        $category = getOne($query);
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
            <h1 align="center">Update category</h1>
            <div class="addNew">
                <form action="../../../controller/save-update-category.php" method="POST" enctype="multipart/form-data" class="add">
                    <input type="text" name="idCate" value="<?php echo $category["id"] ?>" hidden>
                    <span>Tên danh mục</span>
                    <input type="text" name="categoryName" value="<?php echo $category["name"] ?>" placeholder="Nhập tên danh mục"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errName"])) { echo $_SESSION["errName"]; }?></span>
                        <br>
                    <button type="submit">Update Category</button>
                </form>
            </div>
        </main>
    </div>
</body>
<?php  $_SESSION["errName"] = "";?>
</html>