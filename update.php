<?php 
/* 
include"connect.php";

if(isset($POST["update"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $age = $_POST["age"];
    $user_no = $_POST['id'];

    $sql = "UPDATE wateja SET 'firstname'='$firstname','lastname'='$lastname','phonenumber'='$phonenumber','email'='$email','city'='$city','age'='$age' WHERE 'id'='user_no'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    while($row = mysqli_fetch_array($result)){
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $phonenumber = $row["phonenumber"];
        $email = $row["email"];
        $city = $row["city"];
        $age = $row["age"];
    }?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <a href="ready.php">wateja</a>
    <form action="update.php" method="get">
    <div class="block_registration">
        <div class="title_registration">
            <h1>BADILI TAARIFA HAPA</h1>
        </div>
        <div>
            <div>
                <label for="">FIRSTNAME:</label>
                <input type="text" name="firstname" />
            </div>
            <div>
                <label for="">LASTNAME:</label>
                <input type="text" name="lastname" />
            </div>
            <div>
                <label for="">PHONE NUMBER:</label>
                <input type="number" name="phonenumber" />
            </div>
            <div>
                <label for="">EMAIL:</label>
                <input type="text" name="email" />
            </div>
            <div>
                <label for="">CITY:</label>
                <input type="text" name="city" />
            </div>
            <div>
                <label for="">AGE:</label>
                <input type="number" name="age" />
            </div>
            <div>
                <input type="submit" name="update" id="update" value="update">
            </div>


    </div>
</form>
    
</body>

</html>

*/

include "connect.php";

if (isset($_POST["update"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $age = $_POST["age"];
    $user_no = $_POST['id'];

    // Prepare the SQL statement
    $sql = "UPDATE wateja SET firstname=?, lastname=?, phonenumber=?, email=?, city=?, age=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisssi", $firstname, $lastname, $phonenumber, $email, $city, $age, $user_no);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <a href="ready.php">wateja</a>
    <form action="update.php" method="post">
        <div class="block_registration">
            <div class="title_registration">
                <h1>BADILI TAARIFA HAPA</h1>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>" />
                <div>
                    <label for="">FIRSTNAME:</label>
                    <input type="text" name="firstname" required />
                </div>
                <div>
                    <label for="">LASTNAME:</label>
                    <input type="text" name="lastname" required />
                </div>
                <div>
                    <label for="">PHONE NUMBER:</label>
                    <input type="number" name="phonenumber" required />
                </div>
                <div>
                    <label for="">EMAIL:</label>
                    <input type="email" name="email" required />
                </div>
                <div>
                    <label for="">CITY:</label>
                    <input type="text" name="city" required />
                </div>
                <div>
                    <label for="">AGE:</label>
                    <input type="number" name="age" required />
                </div>
                <div>
                    <input type="submit" name="update" id="update" value="update">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
// Key Changes:
//Use of $_POST: Fixed the typo.
// SQL Query: Corrected the SQL syntax.
// Prepared Statements: Used prepared statements to prevent SQL injection.
// Form Method: Changed the form method to post.
// Hidden Input for ID: Added a hidden input field to pass the user ID.

/*



include 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if($_POST) {	

	$ApplicantId 			= $_POST['id'];
	$firstname 					= $_POST['firstname']; 
	$lastname				= $_POST['lastname']; 
	$phonenumber			= $_POST['phonenumber'];
    $email	 			= $_POST['email'];	
	$city	 				= $_POST['city'];	
	$age 				= $_POST['age']; 
    $password 	 			= $_POST['password'];	
	$repassword				= $_POST['repassword'];

	
	$sql = "UPDATE loanapplicant SET firstame = '$firstame',lastname = '$lastname',phonenumber= '$phonenumber',email = '$email',city = '$city',age = '$age','password' = '$password',repassword = '$repassword'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Database Error";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
} */
// /if $_POST