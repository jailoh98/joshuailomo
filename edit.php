<?php

use LDAP\Result;

include"connect.php";

$id = $_GET["id"];
$sql = "SELECT *FROM wateja WHERE 'id'='$id'";
$result = mysqli_query($conn,$sql);
if($result){
$name = $row["firstname"];
echo $name;
}

if (isset($_POST["edit"])) {
    $user_id = $_POST["id"];
    $firstname = $_POST["firtname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $phonenumber = $_POST["phonenumber"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $user_id =$_POST["id"];

    $sql = "UPDATE 'wateja' SET 'firstname' = '$firstname','lastname' = '$lastname','email' = '$email',
    'city' = '$city','phonenumber' = '$phonenumber','age' = '$age','password' = '$password','repassword' = '$repassword',
    WHERE 'id' = '$user_id' ";
    $result = mysqli_query($conn,$sql);
    if ($result==TRUE) {
        echo"UMETISHA UMEBADILI TAARIFA ZA" .strtoupper($firstname);
        # code...
    }else{
        echo"UMEKOSEA" .$sql ."<br>" .$conn_error;
    }

}
if(isset($_GET["id"])){
     $user_id = $_GET["id"];
    $sql1 = "SELECT *FROM wateja WHERE 'id' ='user_id' ";
    $result1 = mysqli_query($conn,$sql1);

    if ($result1->num_rows>0) {
        while ($row=$result1->fetch_assoc()) {
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $phonenumber = $row["phonenumber"];
            $email = $row["email"];
            $city = $row["city"];
            $age = $row["age"];
            $password = $row["password"];
            $repassword = $row["repassword"];
        
                ?>
              <!DOCTYPE html>
              <html lang="en">
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>badili taarifa za wateja wangu</title>
                <link rel="stylesheet" href="mystyle.css">
              </head>
              <body>
              <form action="" method="post">
    <div class="block_registration">
        <div class="title_registration">
            <h1>BADILI TAARIFA ZA MTEJA HAPA</h1>
        </div>
        <div>
            <div>
                <label for="">USER ID</label>
                <input type="number" name="id" <?php echo $id; ?>>
                <label for="">FIRSTNAME:</label>
                <input type="text" name="firstname" <?php echo $firstname; ?>>
            </div>
            <div>
                <label for="">LASTNAME:</label>
                <input type="text" name="lastname" <?php echo $lastname; ?>>
            </div>
            <div>
                <label for="">PHONE NUMBER:</label>
                <input type="number" name="phonenumber" <?php echo $phonenumber; ?>>
            </div>
            <div>
                <label for="">EMAIL:</label>
                <input type="text" name="email" <?php echo $email; ?>>
            </div>
            <div>
                <label for="">CITY:</label>
                <input type="text" name="city" <?php echo $city; ?>>
            </div>
            <div>
                <label for="">AGE:</label>
                <input type="number" name="age" <?php echo $age; ?>>
            </div>
            <div>
                <label for="">PASSCODE:</label>
                <input type="password" name="password" <?php echo $password; ?>>
            </div>
            <div>
                <label for="">REPASSCODE:</label>
                <input type="password" name="repassword" <?php echo $repassword; ?>>
            </div>
            <div>
                <input type="submit" name="edit" value="BADILI TAARIFA" id="reg">
            </div>
        </div>
        <div class="foot">
            <p> Ready Here our <a href="">terms &</a><a href="">policy,</a>
                 Make sure you change correctly this infomation? <a href="register.html">register new one</a><br>
                
            </p>

        </div>


    </div>
</form>
    
                
              </body>
              </html>
                
                <?php }
   
}
}else{
    ?>
    <!DOCTYPE html>
              <html lang="en">
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>badili taarifa za wateja wangu</title>
                <link rel="stylesheet" href="mystyle.css">
              </head>
              <body>
              <form action="" method="post">
    <div class="block_registration">
        <div class="title_registration">
            <h1>BADILI TAARIFA ZA MTEJA HAPA</h1>
        </div>
        <div>
            <div>
                <label for="">USER ID</label>
                <input type="number" name="id" <?php echo $id; ?>>
                <label for="">FIRSTNAME:</label>
                <input type="text" name="firstname" <?php echo $firstname; ?>>
            </div>
            <div>
                <label for="">LASTNAME:</label>
                <input type="text" name="lastname" <?php echo $lastname; ?>>
            </div>
            <div>
                <label for="">PHONE NUMBER:</label>
                <input type="number" name="phonenumber" <?php echo $phonenumber; ?>>
            </div>
            <div>
                <label for="">EMAIL:</label>
                <input type="text" name="email" <?php echo $email; ?>>
            </div>
            <div>
                <label for="">CITY:</label>
                <input type="text" name="city" <?php echo $city; ?>>
            </div>
            <div>
                <label for="">AGE:</label>
                <input type="number" name="age" <?php echo $age; ?>>
            </div>
            <div>
                <label for="">PASSCODE:</label>
                <input type="password" name="password" <?php echo $password; ?>>
            </div>
            <div>
                <label for="">REPASSCODE:</label>
                <input type="password" name="repassword" <?php echo $repassword; ?>>
            </div>
            <div>
                <input type="submit" name="edit" value="BADILI TAARIFA" id="reg">
            </div>
        </div>
        <div class="foot">
            <p> Ready Here our <a href="">terms &</a><a href="">policy,</a>
                 Make sure you change correctly this infomation? <a href="register.html">register new one</a><br>
                
            </p>

        </div>


    </div>
</form>
    
                
              </body>
              </html>
    
    <?php
}
?>