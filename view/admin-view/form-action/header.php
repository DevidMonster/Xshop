<header>
    <div class="option">
        <div class="row">
            <div class="ava">
                <img src="../../.<?php echo $_SESSION["avatar"] ?>" alt="">
            </div>
            <div class="userName">
                <p>welcome, <a href="#"><?php echo $_SESSION["username"] ?></a></p>
            </div>
            <div class="connect">
                <div class="center">
                    <a href="#"><button><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</button></a>
                    <a href="../../../controller/logout.php"><button><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Logout</button></a>
                </div>
            </div>
        </div>
    </div>    
</header>