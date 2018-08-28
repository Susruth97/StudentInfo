<?php
	session_start();
        if (!isset($_SESSION["user"]))
        {
	header('Location: faculty.php'); exit(); 
	}
?>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.bg {
background-image:url("y.jpg");
      height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
     }
a {
    color: Aqua;
	padding: 14px 25px;
    text-align: center; 
}
input[type="text"]{
background: transparent;
}

input[type="text"]{
background: transparent;
}

input[type="date"]{
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
<body  class="text-warning"><div class = "bg">
	<div class = "container">
	<div class="header">
		<a href="#default" class="logo">STUDENT INFO</a>
		<div class="header-right">
		<a href="home.php">Home</a>
		<a href="#home">Insert</a>
		<a href="signout.php">LogOut</a>
		<a href="#about">About</a>
		</div>
	</div><br><?php
	   $conn = new mysqli('localhost','root','','susruth');

	    if (!$conn) {
	        die("Connection failed"); 
	    }
	    $id = $_GET['id'];
	    $sql = "SELECT * FROM students WHERE id='$id'";
	$result = $conn->query($sql);
	    if ($result->num_rows > 0)
	    {
		
		$row = $result->fetch_assoc();	
		
	    }
echo '<table class="table table-striped">

<form method="POST" action="update2.php">

<input type="hidden" name="id" value="' . $id . '">

<tr><td>Email</td> <td><input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="'. $row['email']. '"></td></tr>

<tr><td>Name </td><td><input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="'. $row['name']. '"></td></tr>

<tr><td>Gender </td><td><input type="text" class="form-control" id="gender" name="gender" placeholder="Enter gender" value="'. $row['gender']. '"></td></tr>


<tr><td>Dob</td><td><input type="date" name="dob" class="form-control" placeholder="Enter DOB" value="'. $row['dob']. '"></td></tr><br>

<tr><td>College</td> <td><input type="text" class="form-control" id="college" name="college" placeholder="Enter College" value="'. $row['college']. '"></td></tr>

<tr><td>Branch</td><td><input type="text" class="form-control" id="branch" name="branch" placeholder="Enter Branch" value="'. $row['branch']. '"></td></tr>

<tr><td>Year</td><td><input type="text" class="form-control" id="year" name="year" placeholder="Enter Passsout year" value="'. $row['year']. '"></td></tr>
</table>
<center><input type="submit" type="button" class="btn btn-warning" value="Submit"></center>
</form>';
		
	?>
</div></div></body>
</html>
