<main>
            <h1>Edit Category</h1>
            <div class="date">
                <input type="date">
            </div>


            <div class="sua_categories_wrap">
       
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Tên thể loại:</label> <br>
            <input type="text" class="form-control mb3" name="name" required value="<?= $cate['name'] ?>">

            

            <label for="">Image:</label> <br>
            <img src="../../upload_file/images_category/<?= $cate['image']?>" alt="">
            <input type="hidden" value="<?= $cate['image']?>" name="image">
            <input type="file" class="image" name="image" multiple >
            <?php if(isset($image_err)): ?>
                <div style="color: red;">
            <?= $image_err  ?>
            </div>

              <?php endif ?>  

           
            <button type="submit" class="btn " style="margin-top:20px ;" name="btnSubmit">Thêm</button>
            



        </form>
    </div>


        </main>

