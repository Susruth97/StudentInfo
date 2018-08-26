<html>
<style>
 body{background-image:url("2.jpg");
      
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

$conn = new mysqli('localhost','root','1','susruth');

if (!$conn) {
    die("Connection failed");
}
else {
	$id	= $_GET['id'];

	$sql = "DELETE FROM students WHERE id='$id'";

	mysqli_query($conn, $sql);

	$message = "Deleted Successfully";
 	echo "<script type='text/javascript'>alert('$message');</script>";


}
?>

<meta http-equiv="refresh" content="1; url=http://localhost/susruth/home.php">
	
</body>
</html>
