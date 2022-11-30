<?php 
function insert_user($username,$password,$email){
    $sql = "INSERT INTO user (username, password, email)  
    VALUES ('$username', '$password', '$email')
 ";
                 
                 pdo_execute($sql);

}



?>