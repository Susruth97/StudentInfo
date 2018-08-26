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

$fid 	= $_POST['fid'];
$fmail 	= $_POST['fmail'];
$fname  = $_POST['fname'];
$fno 	= $_POST['fno'];
$fsub 	= $_POST['fsub'];
$fpass 	= $_POST['fpass'];

session_start();
$conn = new mysqli('localhost','root','1','susruth');

if (!$conn) {
    die("Connection failed");
}



$sql = "INSERT INTO faculty (fid, fmail, fname, fno, fsub, fpass)
VALUES ('$fid', '$fmail', '$fname', '$fno', '$fsub', '$fpass')";
$result = mysqli_query ($conn, $sql);

if ($result) {
    $_SESSION['user'] = $fmail;
    print_r($_SESSION);
    header('Location: home.php');
} else {
    $message = "Error";
 echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: faculty.php');
}
?>
</body></html>
