<?php 

function show_client_category(){
    $cates = selectAll_client_category();
    // $products = selectAll_client_product_cate_id($id);
    
    // echo "<pre></pre>";
    // print_r($cates);
    include "view/client/show_category/category.php";
}




?>