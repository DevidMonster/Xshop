<?php
    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    } else {
        if($_SESSION["id"] == 1) {
            header("location:../index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="containers">
        <?php include_once 'aside.php'?>
        <main>
            <?php require_once "header.php"?>
            <div class="banner">
                <div class="title">
                    <h1>Welcome to Dashboard</h1>
                    <p>Do your future</p>
                </div>
                <div class="pic-banner">
                    <img src="../../src/images/slider-pic.png" alt="">
                </div>
            </div>
        </main>
    </div>
</body>
</html>