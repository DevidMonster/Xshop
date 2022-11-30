<?php
    $id = $_GET["id"];
    $query = "select bl.id, title, timeComment, p.name from comment as bl join person as p on bl.idPerson = p.id where idItem = $id;";
    $commentList = getAll($query);

    session_start();
    if(empty($_SESSION)) {
        header("location:../login.php");
    }  else {
        if($_SESSION["id"] == 1) {
            header("location:../index.php");
        }
    }
?>