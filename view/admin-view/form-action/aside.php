<?php 
    $ctr = $_GET["ctr"];
?>
<aside>
            <div class="logo">
                <img src="../../../src/images/logo.png" alt="">
            </div>
            <ul class="menu">
                <li><a href="../dashboard.php?ctr=dashboard" <?php if($ctr == "dashboard"){ echo "id='active'"; }?> ><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href="../product.php?ctr=product"  <?php if($ctr == "product"){ echo "id='active'"; }?>><i class="fa fa-shopping-bag" aria-hidden="true"></i> Products</a></li>
                <li><a <?php if($_SESSION["id"] == 2) { echo "onclick=(alert('Bạn_không_phải_quản_lý'))"; } else { echo "href='../users.php?ctr=user'"; } if($ctr == "user"){ echo "id='active'"; }?>><i class="fa fa-laptop" aria-hidden="true"></i> Users</a></li>
                <li><a href="../category.php?ctr=category" <?php if($ctr == "category"){ echo "id='active'"; }?>><i class="fa fa-list-alt" aria-hidden="true"></i> Category</a></li>
                <li><a href="../comment.php?ctr=comment"  <?php if($ctr == "comment"){ echo "id='active'"; }?>><i class="fa fa-comments" aria-hidden="true"></i> Comment</a></li>
                <li><a <?php if($_SESSION["id"] == 2) { echo "onclick=(alert('Bạn_không_phải_quản_lý'))"; } else { echo "href='../statistical.php?ctr=statistical'"; } if($ctr == "statistical"){ echo "id='active'"; }?>><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistical</a></li>
            </ul>
</aside>