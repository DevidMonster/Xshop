<?php
        include "../model/connect.php";
        // var_dump($category);die;
        $id = $_GET["id"];

        $query2 = "select * from person where id like n'$id'";
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
            <h1 align="center">Update User</h1>
            <div class="addNew">
                <form action="../controller/save-update-user.php" method="POST" enctype="multipart/form-data" class="add">
                    <input type="text" name="userId" value="<?php echo $item["id"] ?>" hidden>
                    <span>*Tên người dùng</span>
                    <input type="text" name="userName" placeholder="Nhập tên người dùng" value="<?php echo $item["name"] ?>" required>
                        <br>
                    <span>*Email người dùng</span>
                    <input type="email" name="userEmail" placeholder="Nhập email người dùng" value="<?php echo $item["email"]?>">
                        <br>
                    <span>*Ảnh đại diện</span>
                    <input type="file" name="Avatar">
                        <br>
                    <span>*Mật khẩu</span>
                    <input type="password" name="passWord" placeholder="Nhập mật khẩu" value="<?php echo $item["passWord"] ?>" required>
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
</html>