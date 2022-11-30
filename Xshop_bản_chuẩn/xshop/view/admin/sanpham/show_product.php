<style>
    .select_search{
        width: 200px;
        margin-top: 20px;
        margin-bottom: 0px;
        padding: 2px;
    }
    .timkiem{
        position: absolute;
        right: 390px;
        top: 83px;
       color: var(--color-info-dark);
    }
    .timkiem:hover{
        cursor: pointer;
    }
    .wrap_date_form{
        display: flex;
        justify-content: space-between;
        
    }
    
</style>
<main>

    <h1>Show Product</h1>
    <div class="wrap_date_form">
    
    <div class="date">
        <input type="date">
    </div>
    <form action="" method="POST" class="form">
        
        
        <?php $cates = selectAll_category(); ?>
     
        <select class="select_search" name="category_id" id="">
         <option  value="0" selected>Tất cả thể loại</option>

        <?php foreach ($cates as $cate) : ?>
                <option  value="<?= $cate['id'] ?>" >
                    <?= $cate['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
       
       <button name="btn_submit" type="submit"><i class="timkiem fa-solid fa-magnifying-glass"></i></button>


    </form>
    </div>

    <div class="show_product">
        <div class="table_wrapper">
            <?php if (isset($_GET['msg'])) : ?>

                <div>
                    <h2 class="alert"> <?= $_GET['msg'] ?> </h2>
                </div>
            <?php endif ?>
            <table class="table">
                <tr>
                    <th>Product_ID</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Ảnh </th>
                    <th>Category</th>
                    <th>Desciption</th>
                    <th>View</th>
                    <th>
                        <a href="index.php?act=add_product" class="btn-them">Thêm Sản Phẩm</a>
                    </th>

                </tr>


                <!-- Đổ dữ liệu -->

                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product['id']  ?></td>
                        <td><?= $product['name']  ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['discount']  ?></td>

                        <td>
                            <img src="upload_file/images_product/<?= $product['image']  ?>" alt="">
                        </td>

                        <?php
                        $cate_id = $product['cate_id'];
                        $sql = "Select * from category where id = '$cate_id'  ";
                        $cate = pdo_query_one($sql);
                        ?>



                        <td> <?= $cate['name'] ?> </td>


                        <td><?= $product['description'] ?></td>
                        <td> <?= $product['view'] ?> </td>
                        <td>
                            <a href="index.php?act=sua_product&id=<?= $product['id'] ?>" class="btn-sua ">Sửa</a>
                            <a href="index.php?act=xoa_product&id=<?= $product['id'] ?>" class="btn-xoa " onclick="return confirm('Bạn có chắc xóa không?')">Xóa</a>
                        </td>






                    </tr>


                <?php endforeach ?>
            </table>
        </div>

    </div>





</main>