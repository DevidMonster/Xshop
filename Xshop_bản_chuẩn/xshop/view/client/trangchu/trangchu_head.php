<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="view/client/font-awesome/css/all.css">
  <link rel="stylesheet" href="view/client/css/client.css">
</head>

<body>
  <div class="header">

    <img class="logo" src="view/client/img/logo.jpg" alt="">

    <ul>
      <li><a href="index.php?act=client_trangchu">TRANG CHỦ</a></li>
      <li><a href="index.php?act=client_category">THỂ LOẠI</a></li>
      <li><a href="index.php?act=client_product">SẢN PHẨM</a></li>
      <li><a href="#">ĐỊA CHỈ</a></li>
      <li> <a href="#">KHUYẾN MẠI</a></li>
    </ul>
    
    <form action="" method="POST">
        <input type="text" name="kyw" id="" placeholder="Nhập sản phẩm cần tìm kiếm" class="search-input">
        
        <?php $cates = selectAll_category(); ?>
     
        <select class="select_search" name="category_id" id="">
         <option  value="0" selected>Tất cả thể loại</option>

        <?php foreach ($cates as $cate) : ?>
                <option  value="<?= $cate['id'] ?>" >
                    <?= $cate['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
       
       <button name="btn_submit" type="submit"><i class="timkiem fa-solid fa-magnifying-glass"></i></button>


    </form>
        
      <!-- <input  type="text" placeholder=" What are your looking for?"> -->
      

    
    
    <div class="wrap_login">
      <?php  if(!isset($_SESSION['username'])) : ?>

    <?php  echo"<a href='view/account/login.php'><button class='login'>Đăng nhập</button></a>"?>
    <?php endif ?>

    <?php  if(isset($_SESSION['username'])) : ?>
    
    <div class="wrap_logout">
    <p>Xin chào <span style="font-weight: 700;"> <?=$_SESSION['username']?>  </span></p>
    <a href="index.php?act=logout"><button class="btn_logout">Đăng xuất</button></a>
    </div>
<?php endif ?>
    <a class="sign_up" href="index.php?act=sign_up">Đăng ký thành viên</a>
    </div>
   


  </div>
  <div class="banner">
    
   
    
        

  </div>
  