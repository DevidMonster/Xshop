

 <div class="sec1">
    

    <div class="sec1-content">
      <h1>CHỌN THEO THỂ LOẠI</h1>

      <div class="cate_wrap">
      <!-- ===========Start Foreach================ -->
        <?php foreach($cates as $cate) : ?>
       <a href="index.php?act=client_product&cate_id=<?=$cate['id']?>">
       <div class="cate">
        <img src="upload_file/images_category/<?=$cate['image']?>" alt="">

        <p><?=$cate['name']?></p>
      </div>

      </a>

          <?php endforeach ?>

      <!-- ===========End Foreach================ -->

      
    </div>
      
      <a href="index.php?act=client_category">
      <p class="all">Xem tất cả <i class="fa-solid fa-angle-right"></i></p></a>











    </div>

    </div>

  </div>
  <div class="sec2">
    <div class="sec2-content">
      <h1>KHÁM PHÁ SẢN PHẨM MỚI</h1>
      <div class="sec2_wrap">

      <!-- ====Start Foreach============ -->
        <?php foreach($new_products as $new_product): ?>
          <a href="index.php?act=client_detail_product&id=<?= $new_product['id'] ?>">
          <div class="sec2-div">
        <div class="wrap-img">
        <img
          src="upload_file/images_product/<?=$new_product['image']?>"
          alt="">
        </div>
        <p> <?=$new_product['name'] ?>  </p>

        <p><?=$new_product['price'] ?></p>
        <button>Mua ngay</button>

      </div>
        </a>



        <?php  endforeach ?>
    <!-- =============End Foreach=========== -->
    </div>
      
      <p class="all" style="text-align:center;margin-top:30px;">Xem tất cả <i class="fa-solid fa-angle-right"></i></p>


    </div>



  </div>

  <div class="sec3">
    <div class="sec3-content">
      <h1 style="font-size: 20px;">SẢN PHẨM YÊU THÍCH</h1>
      <div class="banchay_wrap">
        <!-- ===========Start Foreach============= -->
        <?php foreach($favorite_products as $favorite_product ) : ?>
          <a href="index.php?act=client_detail_product&id=<?= $favorite_product['id'] ?>">

          <div class="banchay">
        <div class="wrap-img-2">
          <img
          src="upload_file/images_product/<?=$favorite_product['image']?>"
          alt="">
        </div>
        <p><?= $favorite_product['name'] ?>
         </p>

        <p><?= $favorite_product['price'] ?></p>
        <button>Mua ngay</button>
      </div>
        </a>



          <?php endforeach ?>

      


    </div>

  </div>
  <div class="sec4">
    <div class="sec2-content">
      <h1 style="font-size: 20px;margin-bottom:20px;">ĐANG KHUYẾN MẠI</h1>
      <div class="sec4_wrap">
        <!-- ===Start Foreach======== -->

        <?php foreach($discount_products as $discount_product): ?>
          <a href="index.php?act=client_detail_product&id=<?=$discount_product['id']?>">
          <div class="ok sec2-div">
       <div class="wrap-img">
        <img
        src="upload_file/images_product/<?=$discount_product['image']?>"
        alt="">
       </div>
        <p><?=$discount_product['name']?></p>

        <p><?=$discount_product['price']?></p>
        <p>Discount <?=$discount_product['discount']?>%</p>
        <button>Mua ngay</button>

      </div>

          </a>

          <?php endforeach ?>
    
    </div>
      <p class="all" style="text-align:center;margin-top:30px;">Xem tất cả <i class="fa-solid fa-angle-right"></i></p>


    </div>
  </div>