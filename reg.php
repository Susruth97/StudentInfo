<?php
	session_start();
        if (!isset($_SESSION["user"]))
        {
	header('Location: faculty.php'); exit(); 
	}
?>
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

input[type="date"]{
background: transparent;
}
select{
background: transparent;
}

</style>
<body class="text-info">
	<div class = "bg">
	<div class = "container">
	<center><h1>Registration<h1></center>
  	<form action="reg_post.php" method="POST">
		<table class="table table-bordered">
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
				<?php
	session_start();
        if (isset($_SESSION["user"]))
        {
   		//echo "Welcome";
        }
	else {
		header('Location: auth.php'); exit(); }
?>	<font size="4">Email Id : </font>
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
				<td colspan="4">
					<font size="3" face="Times new roman">
					 		<select  name="gender" id="gender" class="form-control">
								<option value="none"> Please select any one</option>
								<option value="Male"> Male </option>
								<option value="Female"> Female </option>
								<option value="Others"> Others </option>
							</select>	
					</font>			
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
			<tr>
				<td align="center"><input type="submit" type="button" class="btn btn-info" value="Submit"></td><td align = "center">
				<input type='reset' name="clear" type="button" class="btn btn-info" value="Reset">
				</td>
			</tr>


		</table>
	</form></div></div>
</body>

</html>
