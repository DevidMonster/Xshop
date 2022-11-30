<?php
    include_once '../../model/connect.php';
    include_once '../../model/cart.php';
?>
<?php require_once 'header.php'?>
    <div class="your-cart">
        <h1>Your Cart</h1>
        <h1 class="alert"><?php echo $alert; ?></h1>
        <div class="box-cart">
            <?php foreach($item as $value): ?>
                <div class="item-cart">
                    <div class="avaItem-cart">
                        <img src="../../src/images/<?php echo $value["picture"] ?>" alt="">
                    </div>
                    <div class="content-item-cart">
                        <h1><?php echo $value["name"]?></h1> <br>
                        <h2><?php echo $value["price"]?> $</h2> <br>
                        <span>Count: <?php echo $value["count"]?></span><span>SaleOff: <?php echo $value["saleOff"]?>%</span> <br> <br>
                        <p>Cost: <?php if($value["saleOff"] == 0) { $result = $value["price"] * $value["count"]; echo $result; } else { $result = $value["price"] * $value["count"] * ($value["saleOff"]/100); echo $result; } ?> $</p>
                        <div class="itemFooter-cart">
                            <a href="../../controller/delete-item-in-cart.php?id=<?php echo $value["idItem"]?>"><button class="delete-item-in-cart">Remove Item</button></a>
                        </div>
                    </div>
                </div>
                <?php  $total = $total + $result;?>
            <?php endforeach ?>
        </div>

        <div class="total">
            <span class="total" >your total payment is: <?php echo $total ?> $</span>
            <button class="btn-accept" >Accept Order</button>
        </div>
    </div> 
    <?php require_once './footer.php'?>
</body>
<script src="../../src/js/script.js"></script>
</html>