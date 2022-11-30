<?php
    include_once '../../model/connect.php';
    include_once '../../model/index.php';
?>
<?php require_once 'header.php'?>
    <div class="banner">
        <img src="../../src/images/banner.jpg" alt="">
    </div>
    <div class="wrapper">
        <div class="pic">
            <img src="../../src/images/pic1.jpg" alt="">
            <div class="hover">
                <button>more</button>
            </div>
        </div>
        <div class="pic">
            <img src="../../src/images/pic2.jpg" alt="">
            <div class="hover">
                <button>more</button>
            </div>
        </div>
    </div>
    <main>
        <!-- filter Item -->
        <form class="filter" action="index.php" method="POST">
            <select name="Filter_Select" value="">
                <option value="">chọn danh mục</option>
                <?php foreach($categories as $value): ?>
                    <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option>
                <?php endforeach?>
            </select>
            <button>Find</button>
        </form>
        <!-- End -->
        <!-- show item for male -->
        <h1 class="title">Áo cho nam giới</h1>
        <div class="products line">
            <?php foreach($products as $value): ?>
                <?php if($value["idLoai"] == 1) { ?>
                    <div class="item">
                        <div class="pic-item">
                            <a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><img src="../../src/images/<?php echo $value["picture"] ?>" alt=""></a>
                        </div>
                        <h2><a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a></h2>
                        <p><?php echo $value["price"] ?>$</p>
                        <small><?php echo $value["description"] ?></small>
                    </div>
                <?php } ?>
            <?php endforeach ?>
        </div>
        <!-- show item for male -->

        <br>
        <!-- Show Category -->
        <div class="categories line">
            <h2 class="title">Categories</h2>
            <div class="category">
                <?php foreach($categories as $value): ?>
                    <div class="show-cate">
                        <div class="desc">
                            <span class="name-cate"><a href=""><?php echo $value["name"] ?></a></span>
                            <br>
                            <small>Count: <?php  echo $value["countProduct"] ?></small>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- Show Category -->

        <!-- show item for female -->
        <h1 class="title">Áo cho nữ giới</h1>
        <div class="products line">
            <?php foreach($products as $value): ?>
                <?php if($value["idLoai"] == 2) { ?>
                    <div class="item">
                        <div class="pic-item">      
                            <a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><img src="../../src/images/<?php echo $value["picture"] ?>" alt=""></a>
                        </div>
                        <h2><a href="./detailProduct.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a></h2>
                        <p><?php echo $value["price"] ?>$</p>
                        <small><?php echo $value["description"] ?></small>
                    </div>
                <?php } ?>
            <?php endforeach ?>
        </div>
        <!-- show item for female -->
        
        <br>
        <h1 class="title">shop owner</h1>
        <div class="container line">
            <!-- Start Profile -->
            <div class="Card-Profile">
                <div class="card-img">
                    <img src="../../src/images/154953931_877219653112543_7131690768362558891_n.jpg" alt="">
                </div>
                <div class="Text">
                    <h3>Trần Thị Thu Phương</h3>
                    <p>Xinh Gái</p>
                </div>
                <div class="cousial">
                    <a href="https://www.facebook.com/thuphuong.tranthi.1297">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/p_phuong1207/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="action">
                    <button>Contact Me</button>
                </div>  
            </div>
            <!-- Card Profile -->
            <div class="Card-Profile">
                <div class="card-img">
                    <img src="../../src/images/175973515_907604300074078_8498852808296764780_n.jpg" alt="">
                </div>
                <div class="Text">
                    <h3>Trần Thị Thu Phương</h3>
                    <p>Đáng Yêu</p>
                </div>
                <div class="cousial">
                    <a href="https://www.facebook.com/thuphuong.tranthi.1297">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/p_phuong1207/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="action">
                    <button>Contact Me</button>
                </div>  
            </div>
            <!-- Card Profile -->
            <div class="Card-Profile">
                <div class="card-img">
                    <img src="../../src/images/186479545_921567448677763_8296669904951623549_n.jpg" alt="">
                </div>
                <div class="Text">
                    <h3>Trần Thị Thu Phương</h3>
                    <p>Tài Giỏi</p>
                </div>
                <div class="cousial">
                    <a href="https://www.facebook.com/thuphuong.tranthi.1297">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/p_phuong1207/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="action">
                    <button>Contact Me</button>
                </div>  
            </div>
            <!-- Card Profile -->
        </div>
        <br>
    </main>
    <?php require_once './footer.php'?>
    <script src="../../src/js/slick.js"></script>
    <script src="../../src/js/script.js"></script>
</body>
</html>
	