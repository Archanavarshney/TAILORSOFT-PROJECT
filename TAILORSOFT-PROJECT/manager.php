/*<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	<!--navbar-->
	<?php
include 'header.php';
  ?>
	<!--end of navbar-->
	<?php
session_start();
include("connection.php");
error_reporting(0);
$userprofile=$_SESSION['username'];
if($userprofile==true){
header('location:manager.php');

}else{
	header('location:login.php');
}
$query ="SELECT * FROM EPRP WHERE username='$userprofile'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
echo "Welcome"."  ".$result['name'];
?>
	
<?php
include 'header.php';
?>
	<div class="container" style="margin-top: 150px">
	      <div class="jumbotron">
	      	<div class="row center">
	      	  <div class="col-lg-8 ">
	      		<h1 style="text-align: center;font-size: 50px;">Hii I m Manager</h1>
	      	  </div>
	        </div>
	    </div>
	      <div class="row bg-dark">
	      	<div class="col-lg-4">
	      		<a href='logout.php' style="font-size: 20px;padding-top: 20px;">Log Out</a>
	      	</div>
	      </div>	
	</div>
		
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