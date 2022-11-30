<?php
    include_once '../../model/connect.php';
    include_once '../../model/comment.php';

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
    <title>Comment</title>
</head>
<body>
    <div class="containers">
        <?php include_once 'aside.php'?>
        <main>
            <?php require_once "header.php"?>
            </header>
            <div class="banner">
                <div class="title">
                    <h1>Welcome to Comment</h1>
                    <p>You can control Comment here</p>
                </div>
                <div class="pic-banner">
                    <img src="../../src/images/slider-pic.png" alt="">
                </div>
            </div>
            <div class="products">
                <div class="tools">
                    <p>Comments List</p>
                </div>
                <table class="cate-list">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Comment count</th>
                            <th>New comment</th>
                            <th>Old commnet</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <div class="container">
                    <table class="cate-list">
                        <tbody>
                            <?php foreach($itemList as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value["name"]?></td>
                                    <td><?php echo $value["commentCount"]?></td>
                                    <td><?php echo $value["moiNhat"]?></td>
                                    <td><?php echo $value["cuNhat"]?></td>
                                    <td class="func"><a href="./detail-comment.php?id=<?php echo $value["id"] ?>&ctr=comment"><button>View Detail</button></a></td>
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