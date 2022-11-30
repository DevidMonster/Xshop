<?php 

function show_category(){
    $cates = selectAll_category();
    include "view/admin/theloai/show_category.php";
}

function add_category(){
    if (isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];

        $image = $_FILES['image'];

        if ($image['size'] > 0) {
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg') {
                $image_err = "Anh khong dung dinh dang";
            }
        } else {
            $image_err = "Ban chua nhap anh";
        }

        if (!isset($image_err)) {
            $image_name = $image['name'];
            insert_category($name, $image_name);
            move_uploaded_file($image['tmp_name'], 'upload_file/images_category/' . $image_name);

            $msg = 'Thêm dữ liệu thành công';
            header("location: index.php?act=show_category&msg=$msg");
        };
    }
    include "view/admin/theloai/add_category.php";
}

function sua_category(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $cate = selectOne_category($_GET['id']);
    };

    if (isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];

        $image_name = $_POST['image'];
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            $image_name = $file['name'];
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg') {
                $image_err = "Anh khong dung dinh dang";
            }
        }

        if (!isset($image_err)) {

           update_category($name,$image_name,$id);

            move_uploaded_file($file['tmp_name'], 'upload_file/images_category/' . $image_name);

            $msg = 'Sửa dữ liệu thành công';

            header("location: index.php?act=show_category&msg=$msg");
        }
    }

    include "view/admin/theloai/sua_category.php";
}

function xoa_category(){
    if (isset($_GET['id'])) {

        delete_category($_GET['id']);

        $msg = 'Xóa dữ liệu thành công';
    };
    $cates = selectAll_category();
    include "view/admin/theloai/show_category.php";
}

?>