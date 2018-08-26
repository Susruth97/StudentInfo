
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.bg {
background-image:url("2.jpg");
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

</style>
<body  class="text-info"><div class = "bg">
	<div class = "container">
		<h1 align = "center">FACULTY HOME PAGE</h1> 
		<table class="table table-bordered"> <tr>
			<td><a href="faculty.php"><button type="button" class="btn btn-info">Register</button></a></td>
			<td><a href="login.php"><button type="button" class="btn btn-info">LogIn</button></a></td>
		</tr>
		</table>
		<form action="signup.php" method="POST">
		<table class="table table-bordered">
		
			<tr>
				<td align="left">
					<font size="4">Faculty Id : </font>
				</td>
				<td>
					<input type="text" class="form-control" name="fid" id="fid" placeholder="Enter your id">
				</td>
		    </tr>
			<tr>
				<td align="left">
					<font size="4">Email Id : </font>
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
			<tr>
				<td align="center"><input type="submit" type="button" class="btn btn-info" value="Submit"></td><td align="center">
				<input type='reset' name="clear" type="button" class="btn btn-info" value="Reset">
				</td>
			</tr>
			</table>

			</form>
			</div></div>
</body>
</html>
		
		
