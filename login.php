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
		<h1 align = "center">LOGIN PAGE</h1><br>
		<table class="table table-bordered"> <tr>
			<td>Don't hava an account ?</td>
			<td><a href="faculty.php"><button type="button" class="btn btn-info">Register</button></a></td>
		</tr>
		</table><br><br>
  	<form action="signin.php" method="POST">
		<table class="table table-bordered">
				<td align="left">
					<font size="4">Email Id : </font>
				</td>
				<td>
					<input type="text" name="fmail" class="form-control" id="fmail" placeholder="Enter your Mail ID">
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
				<td colspan="2" align="center"><input type="submit" type="button" class="btn btn-info" value="LogIn">

		</table>
	</form>
</div></div>
</body>
</html>
