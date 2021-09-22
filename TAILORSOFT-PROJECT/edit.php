<style>
  td{
    padding: 20px;
    font-size: 20px;

  }
  th{
  	padding: 5px;
  	font-size: 20px;

  }
</style>
<?php
include ("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<title>EPRP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Email">

					</div>
					
				
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Review Data">
					</div>
				</form>
				</div>
			</div>
			
<?php
 if($_GET['submit'])
 {
  $ema=$_GET['email'];
  $query="SELECT * FROM EPRP WHERE email='$ema'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0){
  ?>
  <table style="margin-top: 140px;margin-left: 200px;">
    <tr>
      <th>Type</th>
      <th>Name</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Phone Number</th>
            <th colspan="2">Operation</th>
    </tr>
  
  <?php
  while ($result=mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>".$result['type']."</td>
        <td>".$result['name']."</td>
      <td>".$result['username']."</td>
      <td>".$result['email']."</td>
     <td>".$result['password']."</td>
     <td>".$result['number']."</td>
            <td><a href='update.php?nm=$result[name]&&um=$result[username]&&em=$result[email]&&pwd=$result[password]&&num=$result[number]'>Edit</a></td>
            <td><a href='delete.php?nm=$result[name]&&um=$result[username]&&em=$result[email]&&pwd=$result[password]&&num=$result[number]'>Delete</a></td>
    </tr>";
    
  }
}else{
  echo "Table has no records";
}
}
else{
	echo "<font color='red' size='8px'>Enter Email to review the data</font>";
}
?>
</table>
  
  

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