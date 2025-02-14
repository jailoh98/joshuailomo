<?php
// create connection
include "connect.php";

if(isset($_GET["id"])){
    $user_id = $_GET["id"];

    $sql = "DELETE FROM wateja WHERE 'id'= '$user_id'";
    $result = $conn->query($sql);
    if($result == TRUE){
        echo "YOU DELETED SUCCESFULLY";
    }
    else{
        echo "Errro" .$sql . "<br>".$conn->error;
    }
    
}


?>