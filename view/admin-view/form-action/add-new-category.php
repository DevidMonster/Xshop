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
            <h1 align="center">Add new category</h1>
            <div class="addNew">
                <form action="../../../controller/save-add-category.php" method="POST" enctype="multipart/form-data" class="add">
                    <span>Tên danh mục</span>
                    <input type="text" name="categoryName" placeholder="Nhập tên danh mục"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errName"])) { echo $_SESSION["errName"]; }?></span>
                        <br>
                    <button type="submit">Add New Category</button>
                </form>
            </div>
        </main>
    </div>
</body>
<?php $_SESSION["errName"] = "";?>
<html/>
