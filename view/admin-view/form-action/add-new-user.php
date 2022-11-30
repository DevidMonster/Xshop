<?php
        include "../../../model/connect.php";
        $query = "select * from product";
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
            <h1 align="center">Add new User</h1>
            <div class="addNew">
                <form action="../../../controller/save-add-user.php" method="POST" enctype="multipart/form-data" class="add">
                    <span>*Mã người dùng (lưu ý: không thể thay đổi khi đã đặt)</span>
                    <input type="text" name="userID" placeholder="Nhập mã người dùng"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errId"])) { echo $_SESSION["errId"]; }?></span>
                        <br>   
                    <span>*Tên người dùng</span>
                    <input type="text" name="userName" placeholder="Nhập tên người dùng"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errName"])) { echo $_SESSION["errName"]; }?></span>
                        <br>
                    <span>*Email người dùng</span>
                    <input type="email" name="userEmail" placeholder="Nhập email người dùng"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errEmail"])) { echo $_SESSION["errEmail"]; }?></span>
                        <br>
                    <span>*Ảnh đại diện</span>
                    <input type="file" name="Avatar"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errAva"])) { echo $_SESSION["errAva"]; }?></span>
                        <br>
                    <span>*Mật khẩu</span>
                    <input type="password" name="passWord" placeholder="Nhập mật khẩu"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errPass"])) { echo $_SESSION["errPass"]; }?></span>
                        <br>
                    <span>*Nhập lại mật khẩu</span>
                    <input type="password" name="rpPassWord" placeholder="Nhập lại mật khẩu"> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errRpPass"])) { echo $_SESSION["errRpPass"]; }?></span>
                        <br>
                    <span>*Kích hoạt?</span> <br>
                    <input type="radio" name="active" value="1"><span>kích hoạt</span>
                    <input type="radio" name="active" value="0"><span>chưa kích hoạt</span> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errActive"])) { echo $_SESSION["errActive"]; }?></span>
                        <br>
                    <span>*Vai trò</span> <br>
                    <input type="radio" name="role" value="1"><span>Khách hàng</span>
                    <input type="radio" name="role" value="2"><span>Nhân viên</span>
                    <input type="radio" name="role" value="3"><span>Quản lý</span> <br>
                    <span style="color:red;"><?php if(!empty($_SESSION["errRole"])) { echo $_SESSION["errRole"]; }?></span>
                    
                    <button type="submit">Add New User</button>
                </form>
            </div>
        </main>
    </div>
</body>
<?php $_SESSION["errAva"] = $_SESSION["errRole"] = $_SESSION["errActive"] = $_SESSION["errRpPass"] = $_SESSION["errPass"] = $_SESSION["errEmail"] = $_SESSION["errId"] = $_SESSION["errName"] = ""; ?>
</html>