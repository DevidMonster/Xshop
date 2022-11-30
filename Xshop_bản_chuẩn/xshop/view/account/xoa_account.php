<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "Delete FROM user WHERE id=$id ";

  pdo_execute($sql);
    $msg = 'Xóa dữ liệu thành công';
    header("location: index.php?msg=$msg&act=show_account");
    exit();

}