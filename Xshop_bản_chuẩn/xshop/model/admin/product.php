<?php 
function insert_product($name,$price,$discount,$image_name,$cate_id,$description,$view){
    $sql = "INSERT INTO product (name, price, discount, image,cate_id,description,view)  
    VALUES ('$name', '$price', '$discount', '$image_name', '$cate_id' ,'$description','$view')
 ";
                 
                 pdo_execute($sql);

}


function delete_product($id){
    $sql = "DELETE FROM product WHERE id =$id ";

pdo_execute($sql);
}


function selectAll_product($id){
    $sql = "select * from product where 1";

    if($id>0){

    $sql.=" and cate_id=$id";
    };


    $sql.=" order by id DESC";

            $products = pdo_query($sql);
            return $products;
}


function selectOne_product($id){
    $sql = "select * from product where id = $id; ";

    $cate = pdo_query_one($sql);
    return $cate;
}

function update_product($name,$price,$discount,$image_name,$cate_id,$description,$view,$id){
    
    $sql = "UPDATE product
    SET name = '$name', price='$price', discount='$discount', image = '$image_name', cate_id=$cate_id, description = '$description', view ='$view'
    WHERE id = $id;
 ";

                   
    pdo_execute($sql);
}
