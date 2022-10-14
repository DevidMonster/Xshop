<?php
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["id"];

    $query="select * from person where id like n'$id'";
    $user = getOne($query);

    $userName = $_POST["fullname"];
    $email = $_POST["email"];
    $query = "update person set 
            name='$userName',
            email='$email'
            where id like n'$id'";

    connect($query);

    move_uploaded_file($_FILES["Avatar"]["tmp_name"],"../src/images/".$_FILES["Avatar"]["name"]);

    header("location:../view/detail-Person.php?id=$id"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>  