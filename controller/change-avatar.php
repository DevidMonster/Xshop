<?php
    session_start();
    include "../model/connect.php"; //import file connect.php từ thư mục model
    $id = $_POST["id"];

    $query="select * from person where id like n'$id'";
    $user = getOne($query);

    if($_FILES["avatar"]["size"] != 0) {
        $userImage = $_FILES["avatar"]["name"];
    } else {
        $userImage = $user["picture"];
    }
    $_SESSION["avatar"] = "./src/images/".$userImage;
    $query = "update person set 
            picture='$userImage'
            where id like n'$id'";

    connect($query);

    move_uploaded_file($_FILES["avatar"]["tmp_name"],"../src/images/".$_FILES["avatar"]["name"]);

    header("location:../view/detail-Person.php?id=$id"); //điều hướng về trang admin.php sau khi đã xử lý xong việc thêm mới
?>  