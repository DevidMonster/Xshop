<?php
    include_once '../../model/connect.php';
    include_once '../../model/detail-person.php';

?>

<?php require_once 'header.php'?>

    <div class="detail-Person">
        <h1 align="center">Your Profile</h1>
        <div class="container">
            <div class="info-left">
                <div class="avatar-profile">
                <img src="../../src/images/<?php echo $user["picture"] ?>" alt="Avatar">
                </div>
                <form action="../../controller/change-avatar.php" method="POST" enctype="multipart/form-data" class="form-picture">
                    <input type="text" name="id" value="<?php echo $_SESSION["idPerson"]?>" hidden>
                    <label for="image">Thay avatar</label>
                    <br>
                    <input type="file" name="avatar">
                    <span><button class="submit">Thay đổi</button></span>
                </form>
            </div>
            <div class="info-right">
                <input type="text" id="nameStorage" value="<?php echo $user["name"]?>" hidden>
                <input type="email" id="emailStorage" value="<?php echo $user["email"]?>" hidden>
                <form action="../../controller/change-info.php?id=<?php echo $_SESSION['idPerson'];?>" method="POST" class="form-info">
                    <label for="id">Your Id</label> <br>
                    <input type="text" name="id" value="<?php echo $_SESSION["idPerson"]?>" disabled> <br>
                    <label for="name">Full name</label> <br>

                    <input type="text" name="fullname" oninput="disabledFalse()" id="name" value="<?php echo $user["name"]?>" required disabled>
                    <span><button type="button"  id="change-name" class="edit-btn">Thay đổi</button></span> <br>
                    <label for="email">Email</label> <br>

                    <input type="email" name="email" oninput="disabledFalse()" id="email" value="<?php echo $user["email"]?>" required disabled>
                    <span><button type="button"  id="change-email" class="edit-btn">Thay đổi</button></span> <br>
                    <button class="submit" disabled>Lưu Thông Tin</button>
                </form>
                <a href="../../controller/logout.php"><button class="logout"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
                <a href="./index.php"><button class="logout"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Reverse</button></a>
                <a href="./change-password.php"><button class="logout">Đổi mật khẩu</button></a>
            </div>
        </div> 
    </div>
    <?php require_once './footer.php'?>
</body>
<script src="../../src/js/action.js"></script>
<script src="../../src/js/script.js"></script>

</html>