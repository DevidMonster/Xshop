<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_GET["id"];

    $query="select * from person where id like n'$id'";
    $user = getOne($query);

    if(!empty($_POST["fullname"])) {
        $userName = $_POST["fullname"];
    } else {
        $userName = $user["name"];
    }

    if(!empty($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $email = $user["email"];
    }
    $query = "update person set 
            name='$userName',
            email='$email'
            where id like n'$id'";
    connect($query);

    header("location:../view/client-view/detail-Person.php?id=$id"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>  