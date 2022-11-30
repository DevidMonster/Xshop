<?php
        include "../../../model/connect.php";
        // var_dump($category);die;
        $id = $_GET["id"];

        $query2 = "select * from person where id like n'$id'";
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
            <h1 align="center">Update User</h1>
            <div class="addNew">
                <form action="../../../controller/save-update-user.php" method="POST" enctype="multipart/form-data" class="add">
                    <input type="text" name="userId" value="<?php echo $item["id"] ?>" hidden>
                    <span>*Tên người dùng</span>
                    <input type="text" name="userName" placeholder="Nhập tên người dùng" value="<?php echo $item["name"] ?>"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errName"])) { echo $_SESSION["errName"]; }?></span>
                        <br>
                    <span>*Email người dùng</span>
                    <input type="email" name="userEmail" placeholder="Nhập email người dùng" value="<?php echo $item["email"]?>"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errEmail"])) { echo $_SESSION["errEmail"]; }?></span>
                        <br>
                    <span>*Ảnh đại diện</span>
                    <input type="file" name="Avatar">
                        <br>
                    <span>*Mật khẩu</span>
                    <input type="password" name="passWord" placeholder="Nhập mật khẩu" value="<?php echo $item["passWord"] ?>"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errPass"])) { echo $_SESSION["errPass"]; }?></span>
                        <br>
                    <span>*Kích hoạt?</span> <br>
                    <input type="radio" name="active" value="1" <?php if($item["active"] == 1) { echo "checked"; }; ?> ><span>kích hoạt</span>
                    <input type="radio" name="active" value="0" <?php if($item["active"] == 0) { echo "checked"; }; ?> ><span>chưa kích hoạt</span>
                        <br>
                    <span>*Vai trò</span> <br>
                    <input type="radio" name="role" value="1" <?php if($item["role"] == 1) { echo "checked"; }; ?> ><span>Khách hàng</span>
                    <input type="radio" name="role" value="2" <?php if($item["role"] == 2) { echo "checked"; }; ?> ><span>Nhân viên</span>
                    <input type="radio" name="role" value="3" <?php if($item["role"] == 3) { echo "checked"; }; ?> ><span>Quản lý</span>
                    <button type="submit">Update User</button>
                </form>
            </div>
        </main>
    </div> 
</body>
<?php  $_SESSION["errName"] = $_SESSION["errEmail"] = $_SESSION["errPass"] = ""; ?>
</html>