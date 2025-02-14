<?php
//connection field
include "connect.php";
//section over submition of my form
 if(isset($_POST["submit"])){
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phonenumber = $_POST["phonenumber"];
$email = $_POST["email"];
$city = $_POST["city"];
$age = $_POST["age"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];


/*
$stmt = $conn->prepare("insert into usajili(firstname,lastname,phonenumber,email,city,age,password,repassword)
    value(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssississ",$firstname,$lastname,$phonenumber,$email,$city,$age,$password,$repassword);
    $stmt->execute();
    echo "Ndugu ".$firstname ." " .$lastname ." Umejisali kikamilifu.......";
    $stmt->close();
    $conn->close(); */
        // sql query to enter data on database
$stmt = $conn->prepare("insert into wateja(firstname,lastname,phonenumber,email,city,age,password,repassword) 
value(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssississ",$firstname,$lastname,$phonenumber,$email,$city,$age,$password,$repassword);
    $stmt->execute();
    echo "YOUR REGISTERED SUCESSFUL MR/MRS " .$firstname ." ".$lastname;
    $stmt->close();
    $conn->close();
   


 }







?>



































































