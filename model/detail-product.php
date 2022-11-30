<?php
    $id = $_GET["id"];

    //Increase View count
    $query="update product set viewCount = viewCount + 1 where id = $id";
    connect($query);
    
    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    } else if (empty($_GET["id"])) {
        header("location:./index.php");
    }

    $query = "select * from product where id=$id";
    $products = getOne($query);

    $idPerson = $_SESSION["idPerson"];

    $query = "select * from person where id like n'$idPerson'";
    $user = getOne($query);
    $query2 = "select bl.id, title, idItem, idPerson, timeComment, p.name, p.picture from comment as bl join person as p on idPerson = p.id where idItem = $id";
    $comments = getAll($query2);
?>