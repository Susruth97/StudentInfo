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
		<h1 align = "center">UPDATE</h1> 
<?php
	   $conn = new mysqli('localhost','root','1','susruth');

	    if (!$conn) {
	        die("Connection failed");
	    }
	    $id = $_GET['id'];
	    $sql = "SELECT * FROM students WHERE id='$id'";
	$result = $conn->query($sql);
		echo '<table class="table table-bordered">
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
	    if ($result->num_rows > 0)
	    {
		
		$row = $result->fetch_assoc();	
		if ($row) 
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
				</tr>';
		}
		echo "</table>";
		
	    }
echo '<table class="table table-bordered">

<form method="POST" action="update2.php">

<input type="hidden" name="id" value="' . $id . '">

<tr><td>email</td> <td><input type="text" id="email" name="email" placeholder="Enter Email" value="'. $row['email']. '"></td></tr>

<tr><td>name </td><td><input type="text" id="name" name="name" placeholder="Enter Name" value="'. $row['name']. '"></td></tr>

<tr><td>gender </td><td><input type="text" id="gender" name="gender" placeholder="Enter gender" value="'. $row['gender']. '"></td></tr>


<tr><td>DOB</td><td><input type="date" name="dob" placeholder="Enter DOB" value="'. $row['dob']. '"></td></tr><br>

<tr><td>College</td> <td><input type="text" id="college" name="college" placeholder="Enter College" value="'. $row['college']. '"></td></tr>

<tr><td>branch</td><td><input type="text" id="branch" name="branch" placeholder="Enter Branch" value="'. $row['branch']. '"></td></tr>

<tr><td>year</td><td><input type="text" id="year" name="year" placeholder="Enter Passsout year" value="'. $row['year']. '"></td></tr>
<td align="center"><input type="submit" type="button" class="btn btn-info" value="Save"></td>
<td align="center"><input type="reset" name="clear" type="button" class="btn btn-info" value="Reset"></td>
</form>
</table>"';
		
	?>
</div></div></body>
</html>
