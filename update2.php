<html>
<style>
 body{background-image:url("j.jpg");
      
     }
button {
    width:30%;
    background-color:#0FFFFF;
	color:black;
	padding:14px 20px;
	margin:8px 0;
}
a {
    color: blue;
	padding: 14px 25px;
    text-align: center; 
}
</style>
<body>
<?php

$conn = new mysqli('localhost','root','','susruth');


if (!$conn) {
    die("Error");
}
else {

	$id = $_POST['id'];
	$email = $_POST['email'];
	$name  = $_POST['name'];	
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];		
	$college = $_POST['college'];
	$branch = $_POST['branch'];
	$year = $_POST['year'];



$sql = "UPDATE students SET email = '$email', name = '$name', gender = '$gender', dob = '$dob', college = '$college', branch = '$branch', year = '$year' WHERE id = '$id'";

mysqli_query($conn, $sql);

$message = "Updated Successfully";
 	echo "<script type='text/javascript'>alert('$message');</script>";


}
?>

<meta http-equiv="refresh" content="1; url=http://localhost/susruth/home.php">
	
</body>
</html>
