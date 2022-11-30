<style>
    @font-face {
        font-family: pro;
        src: url(/font-farmily/SourceSansPro-Regular.ttf);
    }
    .content{
        background-color: #fff;
        
        width: 1196px;
        min-height: 0;
        margin: auto;
       
        padding-top: 40px;
        padding-bottom:40px ;

    }

    .wrap-card{
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-auto-rows: minmax(350px,auto);
        grid-gap:20px 10px ;
    }

    .content>h1{
        font-size: 30px;
        margin: 20px 0;
        font-family: pro;
        font-weight: 500;
    }

    .content .card{
        border-radius: 10px;
        overflow: hidden;
        box-shadow: rgba(100, 100, 111,0.2) 0px 7px 29px 0px;
          
    }

    .content .card .card-image{
        width: 100%;
        
        object-fit: cover;
    }

    .image-wrap{
        overflow: hidden;
    }
    .content .card .card-image:hover{
        transform: scale(1.2);
        transition: 1s ease;
    }
    
    .content .card .card-content{
        text-align: center;
    }

    .content .card .card-content h1{
         text-transform:uppercase ;
         margin: 20px 0;
         font-family: pro;
    } 

    .content .card .card-content h2{
        margin: 20px 0;
        font-family: pro;
    }

    .btnMua{
        width:80%;
    height:40px;
    border: 1px solid var(--pri);
    border-radius: 10px;
    
    background-color: #f6f6f6;
    transition: 0.5s ease;
    margin-bottom: 20px;
    }

    .btnMua:hover{
    cursor: pointer;
    background-color:#f5dac2;
    color: #fff;
    }

   

  
</style>



    
    
    <div class="content">
    <h1>DANH SÁCH SẢN PHẨM</h1>
   

    <div class="wrap-card">
        
        <?php foreach($products as $product): ?>
   
    <div class="card">
            <a href="index.php?act=client_detail_product&id=<?= $product['id'] ?>">
            <div class="image-wrap">
            <img src="upload_file/images_product/<?= $product['image'] ?>" alt="" class="card-image" >
            </div>
            </a>
            <div class="card-content">
            <h1><?= $product['name'] ?></h1>
            <h2><?= $product['price'] ?></h2>
            <button class="btnMua">Mua ngay</button>
            </div>
        </div>
        <?php endforeach ?>

</div>

</div>


