
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.bg {
 background-image: url("j.jpg");      height: 100%; 

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
	<div class = "container"><br><br>
		<div class="header">
		<a href="#default" class="logo">STUDENT INFO</a>
		<div class="header-right">
		<a class="active" href="#home">Register</a>
		<a href="login.php">LogIn</a>
		<a href="#about">About</a>
		</div>
	</div><br>
		<form action="signup.php" method="POST">
		<table class="table table-striped table-condensed">
		
			<tr>
				<td align="left">
					<font size="4">Faculty Id</font>
				</td>
				<td>
					<input type="text" class="form-control" name="fid" id="fid" placeholder="Enter your id">
				</td>
		    </tr>
			<tr>
				<td align="left">
					<font size="4">Email Id</font>
				</td>
				<td>
					<input type="text" class="form-control" name="fmail" id="fmail" placeholder="Enter your Mail ID">
				</td>
		    </tr>
			<tr>
				<td align="left">
					<font size="4">Name</font>
				</td>
				<td>
					<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your name">
					
				</td>
			</tr>
			<tr>
				<td align="left">
					<font size="4">Phone</font>
				</td>
				<td>
					<input type="text" class="form-control" name="fno" id="fno" placeholder="Enter your Contact">
					
				</td>
			</tr>
			<tr>
				<td align="left">
					<font size="4">Subject</font>
				</td>
				<td>
					<input type="text" class="form-control" name="fsub" id="fsub" placeholder="Enter your subject">
					
				</td>
			</tr>
			<tr>
				<td align="left">
					<font size="4">Password</font>
				</td>
				<td>
					<input type="text" class="form-control" name="fpass" id="fpass" placeholder="Enter new password">
					
				</td>
			</tr>
			</table>
			<center><input type="submit" type="button" class="btn btn-warning" value="Submit"></center>
			</form>
			</div></div>
</body>
</html>
		
		
