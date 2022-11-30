<main>

    <h1>Account</h1>
   
    
    <div class="date">
        <input type="date">
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
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Telephone </th>
                    <th>Role</th>
                    
                    <th>
                        <a href="index.php?act=add_product" class="btn-them">Thêm Account</a>
                    </th>

                </tr>


                <!-- Đổ dữ liệu -->

                <?php foreach ($accounts as $account) : ?>
                    <tr>
                        <td><?= $account['id']  ?></td>
                        <td><?= $account['username']  ?></td>
                        <td><?= $account['password'] ?></td>
                        <td><?= $account['address']  ?></td>
                        <td><?= $account['telephone']  ?></td>

                        

                        
                        <td> <?= $account['role'] ?> </td>
                        <td>
                            <a href="index.php?act=sua_account&id=<?= $account['id'] ?>" class="btn-sua ">Sửa</a>
                            <a href="index.php?act=xoa_account&id=<?= $account['id'] ?>" class="btn-xoa " onclick="return confirm('Bạn có chắc xóa không?')">Xóa</a>
                        </td>






                    </tr>


                <?php endforeach ?>
            </table>
        </div>

    </div>





</main>