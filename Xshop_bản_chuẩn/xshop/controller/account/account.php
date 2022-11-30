<?php 
function show_account(){
    $accounts = selectAll_account();
    // echo "<pre></pre>";
    // print_r($accounts);
    // exit();
    require_once "view/account/show_account.php";
}


?>