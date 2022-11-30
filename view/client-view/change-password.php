<?php
    include_once '../../model/connect.php';
    include_once '../../controller/change-pass.php';
    $isset="";
?>
<?php require_once 'header.php'?>
    <a href="./detail-Person.php?id=<?php echo $id; ?>"><button class="reverse">Quay lại</button></a>
    <div class="wrap">

        <h1 align="right" class="title-form">Change Your Password</h1>
        <form action="change-password.php" class='form' method="POST">
            <span style="color:yellow;" ><?php echo $error ?></span>
                <br>
            <label for="passWord">Your Password</label> <br>
            <input type="password" name="passWord" placeholder="Enter Your Password" required>
                <br>
            <label for="new-password">New Password</label> <br>
            <input type="password" name="new-password" placeholder="Enter New Password" required>
                <br>
            <label for="rePassWord">Repeat Password</label> <br>
            <input type="password" name="rePassWord" placeholder="Repeat Password" required>
                <br>
            <button type="submit" name="btn-login">Login</button>

        </form>
    </div>
    <?php require_once './footer.php'?>
</body>

<script src="../../src/js/action.js"></script>
<script src="../../src/js/script.js"></script>
</html>