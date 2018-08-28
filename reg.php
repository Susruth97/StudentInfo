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
background-image:url("t.jpg");
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

</head>
<body class="text-warning"><div class = "bg">
<div class = "container">

	<div class="header">
		<a href="#default" class="logo">STUDENT INFO</a>
		<div class="header-right">
		<a href="home.php">Home</a>
		<a class="active" href="reg.php">Insert</a>
		<a href="signout.php">LogOut</a>
		<a href="#about">About</a>
		</div>
	</div><br>	
  	<form action="reg_post.php" method="POST">
		<table class="table table-striped">
			<tr>
				<td align="left">
					<font size="4">College id : </font>
				</td>
				<td>
					<input type="text" class="form-control" name="id" id="id" placeholder="Enter your id">
				</td>
		    </tr>
			<tr>
				<td align="left">
				<font size="4">Email Id : </font>
				</td>
				<td>
					<input type="text" class="form-control" name="email" id="email" placeholder="Enter your Mail ID">
				</td>
		    </tr>
			<tr>
				<td align="left">
					<font size="4">Name</font>
				</td>
				<td>
					<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
					
				</td>
			</tr>
			<tr>
				<td align="left">
					<font size="4">Gender</font>
				</td>
				<td>
					<input type="text" name="gender" class="form-control" id="gender" size="5" placeholder="gender">
					
				</td>
			</tr>
			<tr>
			<td align="left">
					<font size="4">Date of birth</font>
				</td>
				<td>
					<input type="date" name="dob" class="form-control" size="10">
					
				</td>
				</tr>
			
			<tr>
				<td align="left">
					<font size="4">College : </font>
				</td>
				<td>
					<input type="text" name="college" class="form-control" id="college" size="30" placeholder="Enter your Current college">
				</td>
		    </tr>			
			<tr>
				<td align="left">
					<font size="4">Branch</font>
				</td>
				<td>
					<input type="text" name="branch" class="form-control" id="branch" size="5" placeholder="branch">
					
				</td>
			</tr>
			<tr>
				<td align="left">
					<font size="4">Passout Year : </font>
				</td>
				<td>
					<input type="text" name="year" class="form-control" id="year" size="4" placeholder="passout year">
					
				</td>
			</tr>
			
		</table>
		<center><input type="submit" type="button" class="btn btn-warning" value="Submit"></center>
	</form></div></div>
</body>

</html>
