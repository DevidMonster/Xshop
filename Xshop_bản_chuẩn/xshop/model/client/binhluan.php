<?php 
function insert_binhluan($msg,$username,$id){
    $sql = "INSERT INTO comment (content, username, product_id)  
    VALUES ('$msg', '$username', '$id')
 ";
               
                 pdo_execute($sql);
}

function selectAll_binhluan($id){
    $sql = "select * from comment where product_id=$id";
    $cmt =pdo_query($sql);
    return $cmt;
}


?>