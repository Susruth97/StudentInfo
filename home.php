<?php
	session_start();
        if (!isset($_SESSION["user"]))
        {
	header('Location: faculty.php'); exit(); 
	}
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.bg {
background-image:url("u1.jpg");
      height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
     }
a {
    color: orange;
	padding: 14px 25px;
    text-align: center; 
}
input[type="text"]{
background: transparent;
}

.form-control {
    border: 0;
}

.header-right {
  float: right;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: transparent;
  color: orange;
}

.header {
  overflow: hidden;
  background-color: transparent;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: goldenrod;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.active {
  background-color: transparent;
  color: orange;
}


</style>

</head>
<body class="text-warning"><div class = "bg">
<div class = "container">

	<div class="header">
		<a href="#default" class="logo">STUDENT INFO</a>
		<div class="header-right">
		<a class="active" href="#home">Home</a>
		<a href="reg.php">Insert</a>
		<a href="signout.php">LogOut</a>
		<a href="#about">About</a>
		</div>
	</div><br>

<form action="home.php" method="POST">
		<table class="table table-striped">
			<tr><td align="left">
					<font size="4">Student Search</font>
				</td>
				<td>
					<input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Search">
					
				</td>
				<td align="center"><input class="btn btn-warning" role="button" type="submit" value="Search"></td>
		   	</tr></table></form><br>
 
 <?php  
	
	$name = false;
	if(isset($_POST['name'])){
    $name = $_POST['name'];
	} 

	$conn = new mysqli('localhost','root','','susruth') or die ('Error connecting to mysql');  
	$limit = 3;  
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
	$start_from = ($page-1) * $limit;
	$count = 1;
	if($name) {
		 $sql = "SELECT * FROM students WHERE (name like '%$name%' or email like '%$name%' or gender like '%$name%' or branch like '%$name%' or college like '%$name%') ORDER BY college ASC LIMIT $start_from, $limit";
		$count = 0;
		}  
	else  
		$sql = "SELECT * FROM students ORDER BY id ASC LIMIT $start_from, $limit";  
	$rs_result = mysqli_query ($conn, $sql);  
?>  
 
<?php  
	echo '<table class="table table-striped">
	    	<tr>
			<th>ID</th>
				<th>EMAIL</th>
				<th>NAME</th>
				<th>GENDER</th>
				<th>DOB</th>
				<th>COLLEGE</th>
				<th>BRANCH</th>
				<th>YEAR</th>
	    	</tr>';
	while ($row = mysqli_fetch_array($rs_result))
		{
			echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['gender'].'</td>		
					<td>'.$row['dob'].'</td>		
					<td>'.$row['college'].'</td>
					<td>'.$row['branch'].'</td>
					<td>'.$row['year'].'</td>	
					<td><a href="del.php?id='.$row['id'].'"><button class="btn btn-warning" onclick="return myFunction()">Delete</button></a></td>
					<td><a href="update.php?id='.$row['id'].'"><button class="btn btn-warning">Update</button></a></td>
			
				</tr>';
		}
		echo "</table>";
?>  

<br>

<?php  
if($count == 1) {
$sql = "SELECT COUNT(id) FROM students";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<div class="pagination" allign = "center">';
echo '<div class = "text-center">';
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='home.php?page=".$i."'>  Page ".$i." </a>";  
};  

echo $pagLink . "</div></div>";  
}
?>

<br>


<script type="text/javascript">
function myFunction() {

var r = confirm("Are you sure");
if(r == false)
return false;
else
return true;
}
</script>
</body>
</div></div>
</html>
