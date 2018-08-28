<html>
<header></header>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.bg {
background-image:url("r1.jpg");
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
		<a href="faculty.php">Register</a>
		<a class="active" href="login.php">LogIn</a>
		<a href="#about">About</a>
		</div>
	</div><br><br><br><br>
  	<form action="signin.php" method="POST">
		<table class="table table-striped">
				<td align="left">
					<font size="4">Email Id : </font>
				</td>
				<td>
					<input type="text" name="fmail" class="form-control" id="fmail" placeholder="Enter your mailiD">
				</td>
		    </tr>
			<tr>
				<td align="left">
					<font size="4">Password : </font>
				</td>
				<td>
					<input type="text" name="fpass" class="form-control" id="fpass" placeholder="Password">
					
				</td>
			</tr>

		</table>
		<center><input type="submit" type="button" class="btn btn-warning" value="LogIn"></center>
	</form>
</div></div>
</body>
</html>
