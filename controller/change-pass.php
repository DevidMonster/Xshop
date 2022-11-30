<?php
 session_start();
 if(empty($_SESSION)) {
     header("location:../login.php");
 }
 $id = $_SESSION["idPerson"];
 $query = "select * from person where id like n'$id'"; 
 $users = getOne($query); 
 $error="";
 $_SESSION["success"] = 0;
     if(isset($_POST["btn-login"])){
         if(!empty($_POST["passWord"]) && !empty($_POST["rePassWord"]) && !empty($_POST["new-password"])){
             if($_POST["passWord"] == $users["passWord"]){ 
                 if($_POST["new-password"] == $_POST["rePassWord"]) {  
                     $_SESSION["success"] = 1;
                     
                     $passWord = $_POST["new-password"];
                     $query = "update person set passWord = '$passWord' where id like n'$id'";
                     connect($query);
                     header("location:./detail-Person.php?id=$id");
                 } else {
                     $error = "Mật khẩu nhập lại không trùng khớp!";
                 }
             } else {
                 $error =  "*Nhập sai mật khẩu";
             }
         }
     }
?>