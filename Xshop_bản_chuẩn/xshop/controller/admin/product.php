<?php 

function show_product(){
    if(isset($_POST['btn_submit'])){
        $id=$_POST['category_id'];
    }else{
        $id=0;
    }
    $products = selectAll_product($id);
    include "view/admin/sanpham/show_product.php";
    

}

function add_product(){
    $cates = selectAll_category();

            if (isset($_POST['btnSubmit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $image = $_FILES['image'];
                $description = $_POST['description'];
                $view = $_POST['view'];
                $cate_id = $_POST['cate_id'];


                // echo $cate_id;
                // exit;
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
          
                    insert_product($name,$price,$discount,$image_name,$cate_id,$description,$view);

                    move_uploaded_file($image['tmp_name'], 'upload_file/images_product/' . $image_name);

                    $msg = 'Thêm dữ liệu thành công';

                    header("location: index.php?act=show_product&msg=$msg");
                }
            };
            include "view/admin/sanpham/add_product.php";
}


function sua_product(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
       

        $product=selectOne_product($id);
        $cates = selectAll_category($id);
    }

    if (isset($_POST['btnSubmit'])) {

        $name = $_POST['name'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $image_name = $_POST['image'];
        $cate_id = $_POST['category'];
        $description = $_POST['description'];
        $view = $_POST['view'];
        $file = $_FILES['image'];


        if ($file['size'] > 0) {
            $image_name = $file['name'];
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg') {
                $image_err = "Anh khong dung dinh dang";
            }
        }


        if (!isset($image_err)) {



          
            update_product($name,$price,$discount,$image_name,$cate_id,$description,$view,$id);

            move_uploaded_file($file['tmp_name'], 'upload_file/images_product/' . $image_name);

            $msg = 'Thêm dữ liệu thành công';

            header("location: index.php?act=show_product&msg=$msg");
        }
    }


    include "view/admin/sanpham/sua_product.php";
}

function xoa_product(){
    include "view/admin/sanpham/xoa_product.php";
}




?>