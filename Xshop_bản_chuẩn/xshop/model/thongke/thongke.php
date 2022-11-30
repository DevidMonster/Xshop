<?php 
function loadAll_thongke(){
$sql = "select category.id as category_id, category.name as category_name,count(product.id) as quantity, min(product.price) as min, max(product.price) as max, avg(product.price) as avg  ";
$sql.=" from product left join category on category.id=product.cate_id";
$sql.=" group by category.id order by category.id desc";
$tks=pdo_query($sql);
return $tks;
}

?>