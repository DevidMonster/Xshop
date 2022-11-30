<?php 
function selectAll_account(){
$sql = "select * from user";
$accounts = pdo_query($sql);
return $accounts;
}




?>