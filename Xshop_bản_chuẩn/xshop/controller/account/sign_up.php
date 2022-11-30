<?php 
function sign_up(){
if(isset($_POST['btn_submit'])){
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    insert_user($username,$password,$email);
    $msg = "Đăng kí tài khoản thành công";

    
header("location:index.php?act=client_trangchu" );

}
require_once "view/account/signup.php";



}

?>