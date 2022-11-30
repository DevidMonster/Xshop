<?php
    include_once '../../model/connect.php';
    include_once '../../model/user.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/products.css">
    <link rel="stylesheet" href="../../src/css/category.css">
    <title>User</title>
</head>
<body>
    <div class="containers">
        <?php include_once 'aside.php'?>
        <main>
            <?php require_once "header.php"?>
            <div class="banner">
                <div class="title">
                    <h1>Welcome to Users</h1>
                    <p>You can control User here</p>
                </div>
                <div class="pic-banner">
                    <img src="../../src/images/slider-pic.png" alt="">
                </div>
            </div>
            <div class="products">
                <div class="tools">
                    <p>Users List</p>
                    <div class="action">
                        <a href="./form-action/add-new-user.php?ctr=user"><button>Add New Users</button></a>
                        <form action="users.php" method="POST">
                            <input type="text" name="findName" placeholder="Search name User">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <table class="cate-list">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Avatar</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <div class="container">
                    <table class="cate-list">
                        <tbody>
                            <?php foreach($userList as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value["id"] ?></td>
                                    <td><img src="../../src/images/<?php echo $value["picture"] ?>" alt=""></td>
                                    <td><?php echo $value["name"] ?></td>
                                    <td><?php echo $value["email"] ?></td>
                                    <td><?php if($value["role"] == 1) {
                                        echo "Khách hàng";
                                    } else if($value["role"] == 2) {
                                        echo "Nhân viên";
                                    } else {
                                        echo "Quản lý";
                                    }
                                    ?></td>
                                    <td class="func">
                                        <a href="./form-action/update-user.php?id=<?php echo $value["id"]?>&ctr=user"><button>Update</button></a>
                                        <button class="delete-user" id="<?php echo $value["id"] ?>" onClick="show(this)" >Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>                
                    </table>
                </div>
            </div>
        </main>
    </div>  
    <div class="logger">
        <div class="box">
            <h3>You want to delete this</h3>
            <p>*this file will remove from your table</p>
            <div class="onClick">

            </div>
        </div>
    </div>
    <script src="../../src/js/action.js"></script>
</body>
</html>