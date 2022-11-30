<main>
            <h1>Add Category</h1>
            <div class="date">
                <input type="date">
            </div>

            <div class="add_categories_wrap_form">
        
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Tên thể loại:</label> <br>
            <input type="text" class="form-control mb3" name="name" required>
            <br>

            

            <label for="">Image:</label> <br>
            <input type="file" class="image" name="image" multiple>
            <?php if(isset($image_err)): ?>
                <div style="color: red;">
            <?= $image_err  ?>
            </div>

              <?php endif ?>  

           
            <button type="submit" class="btn " style="margin-top:20px ;" name="btnSubmit">Thêm</button>
            



        </form>
    </div>


</main>

