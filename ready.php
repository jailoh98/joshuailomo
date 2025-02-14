<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wateja/Customers</title>
    <link rel="stylesheet" href="ready.css">
    <link rel="stylesheet" href="mystyle.css">
    <style>
        
.btn_update{
    background-color: blue;
    width: max-content;

}
.btn_delete{
    width: fit-content;
    background-color: red;

}
    </style>
</head>
<body>
    <div class="container">
        <div class="div_table">
            <div div_title></div>
            <div>
                <table class="kichwa_kwaujumla">
                   <thead class="vichwa_vya_table">WATEJA WETU</thead>
                   <tr>
                    <th>REG NO</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>PHONE NUMBER</th>
                    <th>EMAIL</th>
                    <th>CITY</th>
                    <th>AGE</th>
                    <th>ACTION</th>
                   </tr>
                   <hr> 
                   <tbody>
                    <?php
                    $conn = new mysqli("localhost","root","","mikopo");
                    $sql = "SELECT *FROM wateja";
                    $result = $conn->query($sql);
                    $row = mysqli_fetch_row($result);
                
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo"2015-1-" .$row['id'];?></td>
                        <td><?php echo $row['firstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['phonenumber'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['city'];?></td>
                        <td><?php echo $row['age'];?></td>
                        <td>
                        <a class="btn btn-warning" href="update.php">edit</a>
                        <a class="btn btn-danger" href="delete.php">Delete</a>
                        </td>
                    </tr>
                    
                    <?php
                }
                    ?>
                   </tbody>
                </table>
            </div>

        </div>
    </div>

    
</body>
</html>