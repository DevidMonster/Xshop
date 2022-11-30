<?php
    include_once '../../model/connect.php';
    include_once '../../model/detail-product.php';
?>
<?php require_once 'header.php'?>
    <div class="detail-product">
        <h1 style="margin-left: 20px;">Thông tin sản phẩm</h1>
        <br>
        <div class="info">
            <div class="picture">
                <img src="../../src/images/<?php echo $products["picture"]?>" alt="<?php echo $products["name"]?>">
                <p class="special"><?php if($products["special"] == 1) { echo "Hàng đặc biệt"; } else { echo "Hàng không đặc biệt"; }?></p>
            </div>
            <div class="infomation">
                <h1 class="nameProduct"><?php echo $products["name"]?></h1>
                <p class="priceProduct"><?php echo $products["price"]?> $</p>
                <h2 class="saleOff">saleOff: <strong style="color: red;"><?php echo $products["saleOff"]?> %</strong></h2>
                <form action="../../controller/save-add-to-cart.php" method="POST">
                    <input type="number" name="id" value="<?php echo $id?>" hidden>
                    <div class="countItem">
                    <button type="button" class="decrease">-</button>
                    <input type="text" class="count" value="1" name="count" >
                    <button type="button" class="increase">+</button>
                    </div>
                    <br>
                    <button class="addItem">Add to cart</button>
                </form>
            </div>
        </div>
        <div class="more-info">
            <h1>Mô tả sản phẩm</h1>
            <small class="date">Ngày nhập hàng: <?php echo $products["ngayNhap"]?></small>
            <br>
            <small class="view">Số lượt xem: <?php echo $products["viewCount"]?></small>
            <p class="description"><?php echo $products["description"]?></p>
        </div>
    </div>
    <br><hr><br>
    <form action="../../controller/save-comment.php" method="POST" class="comment">
        <h3>Hãy để lại bình luận của bạn ở đây</h3>
        <input type="number" name="id" value="<?php echo $id?>" hidden>
        <textarea name="comment" class="input" cols="170" rows="10" placeholder="Text here" required></textarea>
        <button>Send Comment</button>
    </form>
    <br><hr><br>
    <div class="viewComment">
        <h3>Xem bình luận</h3>
        <br>
        <div class="box-comment">
            <?php foreach($comments as $key => $value): ?>
                <div class="show-comment">
                    <div class="head">
                        <div class="avatar-comment">
                            <img src="../../src/images/<?php echo $value["picture"]?>" alt="">
                        </div>
                        <div class="nameinfo">
                            <h5 class="namePerson"><?php echo $value["name"]?></h5>
                            <small class="timeComment"><?php echo $value["timeComment"]?></small>
                        </div>
                    </div>
                    <div class="detail-comment">
                        <form action="../../controller/change-comment.php" method="post" id="comment" class="form-change-comment" style="display:none;">
                            <input type="text" name="idComment" value="<?php echo $value["id"]?>" hidden>
                            <input type="text" name="idItem" value="<?php echo $value["idItem"]?>" hidden>
                            <input type="text" name="new-change" value="<?php echo $value["title"]?>">
                            <button>change</button>
                        </form>
                        <p id="title_Comment" class="textComment"><?php echo $value["title"]?></p>
                        <div class="action-comment">
                            <?php if($idPerson == $value["idPerson"] || $user["role"] == 3 || $user["role"] == 2) {?>
                                <span><button type="button" onclick="change(this, <?php echo $key;?>)" id="change-comment" class="edit-btn">Thay đổi</button></span>
                                <a href="../../controller/delete-comment-from-user.php?id=<?php echo $value["id"]?>&idItem=<?php echo $value["idItem"]?>"><button class="edit-btn">Xóa</button></a>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php require_once './footer.php'?>
</body>
<script src="../../src/js/action.js"></script>
<script src="../../src/js/script.js"></script>
</html>