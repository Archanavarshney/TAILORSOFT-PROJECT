<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	
</style>
	
</head>
<body>
	<!--navbar-->
	<?php
  include 'header.php';
  ?>
	<!--end of navbar-->
	
		<div class="container" style="padding-top: 140px;">
			<div class="row">
				<div class="col-lg-6">
					<form method="get">
						<div class="form-group">
							<table>
		<tr>
			<td>User Type</td>
			<td><select name="type">
				<option value="-1">Select User Type</option>
				<option value="Admin"><a href="#">Admin</a></option>
				<option value="Employee"><a href="#">Employee</a></option>
				<option value="Manager"><a href="#">Manager</a></option>
			</select>
				
			</td>
		</tr>
	</table>
</div>
						
                    <div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter Full Name">

					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Enter Username">

					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Email">

					</div>
					
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control"
						placeholder="Enter Password">
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input type="number" name="number" class="form-control"
						placeholder="Enter Password">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Sign In">
					</div>
				</form>
				</div>
			</div>
			
			<?php
 if($_GET['submit'])
 {
 	$ty=$_GET['type'];
 	$nm=$_GET['name'];
 	$um=$_GET['username'];
 	$em=$_GET['email'];
 	$pwd=$_GET['password'];
 	$num=$_GET['number'];
 	
 	
 	
 	if(ty!="" && nm!="" && um!="" && em!="" && pwd!="" && num!="")
 	{
 		$query="INSERT INTO EPRP VALUES('$ty','$nm','$um','$em','$pwd','$num')";
 		$data=mysqli_query($conn,$query);
 		if($data)
 		{
 			
 			echo "<font size='10px' color='green'>Sign In Successfullly...</font>";
 			//<a href='display.php'>Registered Details</a>
 		}
 		else{
 			echo "<font size='10px' color='red'>Registration Failed</font>";
 		}
 	}
 	else{
 		echo "";
 	}
 	
 }
 
?>
		<!--footer-->
    <?php
include 'footer.php';
    ?>
	<!-- END #footer -->
		
	

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
<script src="https://use.fontawesome.com/b656b85fa0.js"></script>


</body>
</html>


						

