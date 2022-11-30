<?php
function show_client_product(){
  if(isset($_POST['btn_submit'])){
    $kyw = $_POST['kyw'];
    $category_id = $_POST['category_id'];
    

  }else{
    
    $kyw="";
    $category_id=0;
  }
$products  = selectAll_client_product($kyw,$category_id);
$cates = selectAll_category();
require_once "view/client/show_product/product.php";
}

function detail_product(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
       

        $product=selectOne_product($id);

        if(isset($_POST['guibinhluan'])){
          $msg=$_POST['msg'];
          $username = $_SESSION['username'];
          insert_binhluan($msg,$username,$id);



          // $accounts =  selectAll_account();
          // foreach ($accounts as $account){
          //   if($_SESSION['username']==$account['username']){

          //   }
          // }

          

        }




    }
  require_once "view/client/detail_product/detail_product.php";
}


