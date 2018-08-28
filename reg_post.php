<html>
<style>
 .bg{background-image:url("j.jpg");
      
     }
</style>
<body><div class = "bg">
<?php
	$id = $_POST['id'];
	$email = $_POST['email'];
	$name  = $_POST['name'];	
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];		
	$college = $_POST['college'];
	$branch = $_POST['branch'];
	$year = $_POST['year'];

		$conn = new mysqli('localhost','root','','susruth');

		if(!$conn) {
		$message = "Error";
  		echo "<script type='text/javascript'>alert('$message');</script>";
	}
		else {

		mysqli_query($conn,"Insert into students (id, email, name, gender, dob, college, branch, year) values ('$id', '$email', '$name', '$gender', '$dob', '$college', '$branch', '$year')");
		$message = "Successfull";
  		echo "<script type='text/javascript'>alert('$message');</script>";
}
	?>
<meta http-equiv="refresh" content="1; url=http://localhost/susruth/home.php">
</div>
</body>
</html>
