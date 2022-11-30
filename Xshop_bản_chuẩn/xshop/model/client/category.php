<?php 

function selectAll_client_category(){
    $sql = "select * from category";
            $cates = pdo_query($sql);
            return $cates;
}

function selectAll_client_product_cate_id($id){
    
    
      $sql = "select * from product where cate_id = '$id'";

     
      $products = pdo_query($sql);
      return $products;


}

?>