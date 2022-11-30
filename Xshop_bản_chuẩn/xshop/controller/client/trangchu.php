<?php 
function client_trang_chu(){
 
    $new_products = select_10_new_product();
    $cates = selectAll_category();
    $favorite_products = select_8_favorite_product();
    $discount_products = select_10_discount_product();
    // echo "<pre></pre>";
    // print_r($discount_products);
    require "view/client/trangchu/trangchu_main.php";
  }

?>