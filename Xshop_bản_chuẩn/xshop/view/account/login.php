<?php 
session_start();
require_once '../../model/pdo.php';

// require_once 'model/pdo.php';

// echo "<pre>";
// print_r($admin);
// exit;


if(isset($_POST['btnLogin'])){

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "select * from user";
$users = pdo_query($sql);

// if($password = $admin['password']){
//     $_SESSION['username']=$username;
//        $msg = 'Đăng nhập thành công';
//         header("location:../admin/trangchu/index.php");
//     }else{
//        $login_err = "Mật khẩu hoặc username chưa đúng";
// 

// $stmt = $conn ->prepare($sql);

// $stmt ->execute();

// $admins = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($users as $user){


if($username == $user['username'] && $password == $user['password']){
    $_SESSION['username']=$username;
    $msg = 'Đăng nhập thành công';
    if($user['role']==1){
    header("location:../../index.php");
    } elseif($user['role']== 0){
        header("location:../../index.php?act=client_trangchu");
    }
        
    
}else{
   $login_err = "Mật khẩu hoặc username chưa đúng";
}

// }



}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&family=Roboto:wght@100&display=swap');
        *{
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .wrap{
            width: 100vw;
            height: 100vh;
            position: relative;
            
            background-image: url(image1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        form{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 600px;
            background-color: rgba(255,255,255,0.1);
            backdrop-filter: blur(40px);
            padding: 60px;
        }
        form img{
            text-align: center;
            width: 202px;
            margin-top: 140px;
            
        }

        form>div:nth-child(1){
            text-align: center;
        }
        form .forgot{
            display: flex;
            justify-content: end;
        }

        form .forgot p {
            color: #fff;
        }

        input{
            width: 100%;
            height: 46px;
            border-radius: 4px;
            background-color: #0000001C;
            outline: none;
            color: #fff;
            padding: 0px 8px ;
            
           

        }

        form input:nth-child(1){
            margin-bottom: 50px;
        }
        label{
            color: #fff;
            line-height: 24px;
            font-size: 16px;
            font-weight: 300;
            font-size: 16px;
        }

        .signup{
            text-align: center;
            padding-top: 30px;
        }

        .signup button{
            width:
150px;
height:
46px;
border-radius: 46px;
background-color: #FFFFFFE5;
border: none;
color: #000;
font-size: 16px;
transition: all 300ms ease;




        }

        .signup button:hover{
            opacity: 0.9;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="wrap">
       
        <form  method="POST" enctype="multipart/form-data">
            <div><img src="Sing in.png" alt=""></div>
            <label for="">Username</label>
            <input type="text" name="username">
            <br>
            <label for="" >Password</label>
            <input type="password" name="password" id="">
            <div class="forgot">  <p>Forgot Password?</p></div>
            <div class="signup">
                <button type="submit" name="btnLogin">Sign In</button>
            </div>
            <?php if(isset($login_err)): ?>

<div style="color:red ;">

<?= $login_err ?>

<?php endif ?>


            </form>
    </div>
</body>
</html>