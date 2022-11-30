


  <style>
    h2{
      margin-bottom: 15px;
      font-size: 20px;
    }

    .article {
      width: 1196px;
      margin: auto;
      font-family: pro;
      padding: 20px 0;

    }

    .article>div>h1{
      font-size: 30px;
      font-weight: 500;
      margin-top: 40px ;
      text-transform: uppercase;
    }

    .cate-sanpham{
      width: 100%;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      grid-auto-rows:minmax(420px,auto) ;
      grid-gap:20px; 
      margin-bottom: 40px;
    }

    .cate-sanpham .card{
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
    }

    .cate-sanpham .card h1{
      font-size: 20px;
      margin-top: 20px;

    }
    .cate-sanpham .card h2{
      font-size: 18px;
      margin-top: 20px;

     
    }

    .cate-sanpham .card button{
      width:80%;
    height:40px;
    border: 1px solid var(--pri);
    border-radius: 10px;
    
    background-color: #f6f6f6;
    transition: 0.5s ease;
    margin: 20px 0  ;
    }

    .cate-sanpham .card button:hover{
        cursor: pointer;
    background-color:#f5dac2;
    color: #fff;

    }

    .cate-sanpham .card img{
      width: 100%;
      height: 280px;
      transition: 0.3 ease;
    }

    .cate-sanpham .card img:hover{
      opacity: 0.8;
    }
    h1{
      font-size: 25px;
      margin-bottom: 40px;
    }
  </style>


  <div class="article">
    <h1>Danh sách sản phẩm theo thể loại</h1>
    <?php foreach ($cates as $cate) : ?>
      <div>
        <h2> <?= $cate['name'] ?> </h2>
        <div class="cate-sanpham">
        

        <?php 
        $id = $cate['id'];
       $products = selectAll_client_product_cate_id($id);
       

        ?>

        <?php foreach($products as $product): ?>
          <a href="index.php?act=client_detail_product&id=<?=$product['id']?>">
          <div class="card">
          <img src="upload_file/images_product/<?= $product['image'] ?>" alt="">
          <h1><?= $product['name'] ?></h1>
          <h2><?= $product['price'] ?></h2>
          <button>Mua ngay</button>
        </div>
        </a>

          <?php endforeach ?>
                    
        
        



        </div>

      </div>

    <?php endforeach ?>


  </div>

