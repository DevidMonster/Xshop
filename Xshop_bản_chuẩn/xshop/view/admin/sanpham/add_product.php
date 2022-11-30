<main>
    <h1>Add Product</h1>
    <div class="date">
        <input type="date">
    </div>

    <div class="add_product">


        <form action="" method="POST" enctype="multipart/form-data">

            <label for="">Product Name</label> <br>
            <input type="text" name="name" required>
            <br>


            <label for="">Price:</label> <br>
            <input type="number" name="price" required>
            <br>


            <label for="">Discount:</label> <br>
            <input type="number" name="discount" required>
            <br>

            <label for=""> Image:</label> <br>
            <input type="file" class="image" name="image" multiple>
            <br>


            <?php if (isset($image_err)) : ?>

                <div style="color: red;">
                    <?= $image_err  ?>
                </div>

            <?php endif ?>


            <label for="">Categories</label> <br>
            <select class="form-select" aria-label="Default select example" name="cate_id">

                <?php foreach ($cates as $cate) : ?>

                    <option value="<?= $cate['id'] ?>"> <?= $cate['name']  ?> </option>

                <?php endforeach ?>

            </select>
            <br>

            <label for="">Desciption:</label> <br>
            <textarea class="form-control" placeholder="Leave a comment here" name="description"></textarea>
            <br>


            <Label>View:</Label> <br>
            <input type="number" name="view" required>
            <br>


            <button type="submit" class="btn" style="margin-top:20px ;" name="btnSubmit">Thêm</button>


        </form>

    </div>





</main>