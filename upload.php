<?php
 define('UPLOAD_DIRECTORY','/wateja_pich/');
 if(isset($_POST["submit"])){
    $file = $_FILES["file"];

    $fileName = $_FILES["file"]["name"];
    $fileTempName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];

    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowedExt = array("png","jpeg","gif","jpg");
    if (in_array($fileActualExt,$allowedExt)) {
      $conn = new mysqli("localhost","root","","mikopo");
      $sql = "INSERT INTO user_picture(path) VALUES('$fileName')";
      mysqli_query($conn,$sql);
      echo "suceccfully";}
      /*  if ($fileError === 0) {
            if ($fileSize <= 500000) {
                $filedest = "wateja_picha/".$fileName;
                move_uploaded_file($fileTempName, $filedest);
                echo "picha imepokelewa vizuri ipo".$filedest;
                
            }else{
                echo "Picha hii nikubwa mno";
            }
        }else{
            "picha hii inashida jaribu nyingine";
        }
    }*/
    else{
        echo "unapakia faili ambalo sio picha";
    }



 }

?>