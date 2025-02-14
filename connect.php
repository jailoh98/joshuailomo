<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mikopo";

//create database connection
$conn = new mysqli($servername,$username,$password,$database);
//check for database connection
if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

?>