<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sajili mikopo</title>
      <link rel="stylesheet" href="mystyle.css">
      <style>
        form{
            width: max-content;
        }
       form div{
            display: flex;
            padding-left: 0px;
            margin-left:0px ;
            margin-top: 0px;
        }
      </style>
</head><body>
    <?php
   /*  $servername = "localhost";
    $username ="root";
    $password = "";
    $database = "mikopo";

    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connnection faied:" .$conn->connect_error);

    }*/
    include "connect.php";
    
        $loan_registration = $_POST['loan_reg'];
        $percentage = $_POST['percentage'];
        $time = $_POST['time'];
        $stmt =$conn->prepare("insert into loan_registration(jina_mkopo,asilimia,mda_malipo) value(?,?,?)");
        $stmt->bind_param("sis",$loan_registration,$percentage,$time);
        $stmt->execute();
        echo "MKOPO WAKO UMESAAJILIWA KIKAMILIFU";
        $stmt->close();
        $conn->close();

    
    ?>
    <form action="loan_registration.php" method="post">
        <label for="">AINA YA MKOPO</label><br>
        <input type="text" name="loan_reg">
        <label for="">ASILIMIA</label>
        <input type="number" name="percentage" >
        <label for="">MDA WA MALIPO</label><br>
       <div><input type="radio" name="time" value="wiki" >WIKI
        <input type="radio" name="time" value="mwezi" >MWEZI
       <input type="radio" name="time" value="miezi" >MIEZI
        <input type="radio" name="time" value="mwaka" >MWAKA<br><br><br>
        </div>
        <input type="submit" name="submit" value="SAJILI MKOPO HAPA" style="background: blue;">
    </form>
</body>
</html>