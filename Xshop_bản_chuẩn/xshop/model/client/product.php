<?php
function selectAll_client_product($kyw,$category_id){
   
 $sql = "select * from product where 1"; 

 if($kyw!=""){
    $sql.=" and name like '%".$kyw."%'";
 }

 if($category_id>0){
    $sql.=" and cate_id=$category_id ";
 }

 if(isset($_GET['cate_id'])){
    $cate_id = $_GET['cate_id'];
    $sql.= " and cate_id = $cate_id";
 }
 $sql.=" order by id DESC";
 $products = pdo_query($sql);
 return $products;
}

function select_10_new_product(){
    $sql = "select * from product order by id DESC limit 0,10";
    $new_products = pdo_query($sql);
    return $new_products;
}

function select_8_favorite_product(){
    $sql = "select * from product order by view DESC limit 0,8";
    $favorite_products = pdo_query($sql);
    return $favorite_products;
}

function select_10_discount_product(){
    $sql = "select * from product where discount>0 limit 0,10";
    $discount_products = pdo_query($sql);
    return $discount_products;
}