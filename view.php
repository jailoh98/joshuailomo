<?php
include "connect.php";

$sql = "SELECT *FROM wateja"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKURASA WA WATEJA WETU</title>
    <link rel="stylesheet" href="ready.css">
</head>
<body>
    <div class="container">
        <h1>WATEJA</h1>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>Ation</th>
                </tr>
                
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn,$sql);
                if ($result->num_rows>0) {
                    while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <th><?php echo"2025-01-".$row["id"]; ?></th>
                        <th><?php echo strtoupper($row["firstname"]." ".$row["lastname"]) ; ?></th>
                        <th><?php echo $row["phonenumber"]; ?></th>
                        <th><?php echo $row["email"]; ?></th>
                        <th><?php echo strtoupper($row["city"]);?></th>
                        <th><?php echo $row["age"]; ?></th>
                        <th>
                            <a class="btn-change" href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                            <a class="btn-danger" href="delete.php?id=<?php echo $row["id"]; ?>">delete</a>
                        </th>






                    </tr>
                    <?php }
                }


                ?> 

            </tbody>
        </table>

    </div>
    
</body>
</html>