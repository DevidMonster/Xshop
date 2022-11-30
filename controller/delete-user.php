<?php
    include "../model/connect.php";
    $id = $_GET["id"];

    $query = "DELETE FROM comment WHERE idPerson like n'$id'";
    connect($query);

    $query = "DELETE FROM cart WHERE idPerson like n'$id'";
    connect($query);

    $query = "DELETE FROM person WHERE id like n'$id'";
    connect($query);
    header("location:../view/admin-view/users.php?ctr=user");
?>