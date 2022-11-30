<?php 
function insert_category($name,$image_name){

    $sql = "INSERT INTO category (name, image)  
    VALUES ('$name', '$image_name' )
 ";
pdo_execute($sql);
}


function delete_category($id){
    $sql = "DELETE FROM category WHERE id =$id ";

pdo_execute($sql);
}


function selectAll_category(){
    $sql = "select * from category order by id DESC";
            $cates = pdo_query($sql);
            return $cates;
}


function selectOne_category($id){
    $sql = "select * from category where id = $id; ";

    $cate = pdo_query_one($sql);
    return $cate;
}

function update_category($name,$image_name,$id){
    $sql = "update category set name='$name', image= '$image_name' where id = $id;";
                   
    pdo_execute($sql);
}


?>