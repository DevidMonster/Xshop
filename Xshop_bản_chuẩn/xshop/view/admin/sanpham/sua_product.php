
<main>
    <h1>Edit Product</h1>
    <div class="date">
        <input type="date">
    </div>
    <div class="sua_product">


        <form action="" method="POST" enctype="multipart/form-data">

            <label for="">Product Name:</label> <br>
            <input type="text" class="form-control mb3" name="name" required value="<?= $product['name'] ?>">
            <br>

            <label for="">Price:</label> <br>
            <input type="number" class="form-control" name="price"  required value="<?= $product['price'] ?>">
            <br>

            <label for=""> Discount:</label> <br>
            <input type="number" class="form-control" name="discount" required value="<?= $product['discount'] ?>">
            <br>

            <label for="">Image:</label> <br>
            <img src="upload_file/images_product/<?= $product['image'] ?>" alt="" width="123">
            <br>

            



            <input type="hidden" class="image" name="image" multiple value="<?= $product['image'] ?>" width="123">
            <input type="file" class="image" name="image" multiple>
            <br>

            <label for="">Category:</label> <br>
            <select name="category">
            <?php foreach ($cates as $cate) : ?>
                <option value="<?= $cate['id'] ?>" <?= ($cate['id'] == $product['cate_id']) ? 'selected' : '' ?>>
                    <?= $cate['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>


            <label for=""> Desciption:</label> <br>
            <textarea class="" placeholder="Leave a comment here" name="description"></textarea>
            <br>

            <label for=""> View:</label> <br>
            <input type="number" class="form-control" name="view" required value="<?= $product['view'] ?>">
            <br>

            <button type="submit" class="btn " style="margin-top:20px ;" name="btnSubmit">Sửa</button>




        </form>
    </div>
</main>