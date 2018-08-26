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

$fmail  = $_POST['fmail'];
$fpass 	= $_POST['fpass'];

session_start();

$conn = new mysqli('localhost','root','1','susruth');

if (!$conn) {
    die("Connection Failed");
}


$sql = "SELECT * FROM faculty WHERE fmail='$fmail'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    if($row['fpass'] == $fpass)
    {
        $_SESSION['user'] = $fmail;
    	print_r($_SESSION);
    	header('Location: home.php');
    }
    else
    {
	$message = "Wrong Credentials";
 	echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: home.php');
	exit();

    }
	
}

?>

</body></html>
