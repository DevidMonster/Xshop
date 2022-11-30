<style>
    .article {
        background-color: #f6f6f6;
        padding-top: 40px;
        padding-bottom: 40px;
        border-bottom: 1px solid #fff;
    }

    h1 {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .content_wrap {
        width: 1196px;
        margin: auto;
    }

    .content {
        background-color: #fff;
        width: 1196px;
        min-height: 500px;
        margin: auto;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding: 24px;



    }

    .content div:nth-child(2) {
        padding-left: 40px;
    }





    .content img {
        width: 100%;
        height: 100%;
        object-fit: fill;
    }

    .sp-content {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 30px 32px 1fr 1fr 1fr 1fr 1fr;
    }

    .sp-content>div:nth-child(1) {
        display: flex;
    }

    .sp-content div:nth-child(1) span {
        background-color: #ff6651;
        padding: 2px;
        color: #fff;
        border-radius: 5px;
        align-content: center;
        display: grid;
    }

    .sp-content div:nth-child(1) div:nth-child(2) h1 {
        font-size: 20px;
        align-content: center;
        display: grid;
    }

    .sp-content>div:nth-child(2) {
        display: flex;
        padding: 0;

    }

    .sp-content>div:nth-child(2) span {
        margin-right: 20px;
    }

    .sp-content>div:nth-child(2) span:nth-child(1) {
        color: #ff6651;
    }

    .sp-content>div:nth-child(2) span:nth-child(2) {
        color: #ff6651;
    }


    .sp-content>div:nth-child(2) span:nth-child(1) i {
        color: #ff6651;
    }

    .sp-content>div:nth-child(3) {
        display: flex;
        padding: 0;
        align-items: center;
        background-color: #fafafa;

    }

    .sp-content>div:nth-child(3) h2 {
        font-size: 30px;
        color: #ff6651;
    }

    .sp-content>div:nth-child(4) {
        display: grid;
        grid-template-areas:
            "a b c e e "
            "a f g e e "
    }

    .sp-content>div:nth-child(5) {
        display: grid;
        grid-template-areas:
            "a b c d e"
    }

    .sp-content>div:nth-child(5) span {
        padding: 8px 28px;
        border: 1px solid #ccc;
    }

    .sp-content>div:nth-child(6) {
        display: flex;

    }

    .sp-content>div:nth-child(7) button:nth-child(1) {
        padding: 8px 36px;
        outline: none;
        border: 1px solid #ff6651;
        background-color: rgba(255, 87, 34, .1);
        color: #ff6651;

    }

    .sp-content>div:nth-child(7) i {
        color: #ff6651;
    }

    .sp-content>div:nth-child(7) button:nth-child(2) {
        padding: 8px 16px;
        margin-left: 20px;
        outline: none;
        border: none;
        background-color: #ff6651;
        color: #fff;

    }

    .pagination {
        display: flex;
    }

    .pagination li {
        list-style-type: none;

    }

    .pagination li a {
        text-decoration: none;
        padding: 8px;
        border: 1px solid #ccc;
    }
    
</style>



<div class="article">
    <div class="content_wrap">
        <h1>Chi tiết sản phẩm</h1>

        <div class="content">
            <div>
                <img src="upload_file/images_product/<?= $product['image'] ?>" alt="">
            </div>
            <div class="sp-content">

                <div>
                    <div><span>Yêu thích+</span></div>

                    <div>
                        <h1><?= $product['name'] ?></h1>
                    </div>
                </div>

                <div>
                    <Span>4.9 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star-half-stroke"></i></Span>

                    <span>1.3k Đánh Giá</span>
                    <span>7,8k Đã Bán <i class="fa-regular fa-circle-question"></i></span>

                </div>



                <div>
                    <h2><?= $product['price'] ?>đ</h2>
                </div>

                <div>
                    <div style="grid-area:a;">Vận chuyển</div>
                    <span style="grid-area:b;"><i class="fa-solid fa-truck"></i> Vận chuyển tới</span>
                    <span style="grid-area:c;">Huyện ba vì <i class="fa-solid fa-angle-down"></i></span>
                    <span style="grid-area:f;">Phí vận chuyển</span>
                    <span style="grid-area:g;">Không hỗ trợ<i class="fa-solid fa-angle-down"></i></span>

                </div>

                <div>
                    <div style="grid-area:a;">Phân loại</div>

                    <div style="grid-area:b;"><span>Size S</span></div>
                    <div style="grid-area:c;"><span>Size M</span></div>
                    <div style="grid-area:d;"><span>Size L</span></div>
                </div>

                <div>
                    <div di>Số lượng</div>
                    <nav aria-label="Page navigation example" style="margin-left: 70px;">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">-</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">+</a></li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <button><i class="fa-solid fa-cart-plus"></i> Thêm vào giỏ hàng</button>
                    <button>Mua ngay</button>
                </div>








            </div>


        </div>
    </div>



</div>

<style>
    .article2{
        
        width: 1196px;
        margin: auto;
        border: 1px solid #ebebeb;
        min-height: 500px;
        background-color: #fff;
        display: grid;
        grid-template-rows: 1fr 6fr 1fr;
        
    }
   

    .cmt_content{
        overflow-y: scroll;
        padding: 16px;
        margin-bottom: 10px;
    }

    
    .wrap_article2{
        width: 100%;
        background-color: #f6f6f6;
    }


    
    .cmt_wrap h1{
        background-color: #f6f6f6;padding: 8px;
    }

    .form a{
        padding: 4px 8px;
        background-color: #f6f6f6;
        border: 1px solid #ebebeb;
    }

    .one_cmt{
        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
    }

</style>

<div class="wrap_article2">
<div class="article2">

    <h1>Bình luận</h1>
    <div class="cmt_content">
        <?php  
        $cmts=selectAll_binhluan($id); 
        // echo "<pre></pre>";
        // print_r($cmt);
        ?>
   <?php foreach($cmts as $cmt) : ?>

    <div class="one_cmt">
            <div> <?php echo$cmt['username'];?>    </div>
            <div> <?=$cmt['content'] ?>    </div>
            <div>  <?=$cmt['date'] ?>   </div>
        </div>
    <?php endforeach ?>

        
        
        
        
        


    </div>
    <div class="form">

    <?php if(!isset($_SESSION['username'])):?>
        <a href="view/account/login.php">Đăng nhập để bình luận</a>

<?php endif ?>
<?php if(isset($_SESSION['username'])):?>
    <form action="" method="POST">
        <input type="text" name="msg">
        <input type="submit" name="guibinhluan" value="Gửi bình luận">
    </form>

<?php endif ?>
    
    </div>


</div>
</div>


