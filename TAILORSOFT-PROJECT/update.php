<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<title>Tailorsoft</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
	<!--navbar-->
	<?php
include 'header.php';
  ?>
	<!--end of navbar-->
	<!--update-->
  <div class="container" style="padding-top: 140px;">
      <div class="row">
        <div class="col-lg-6">
          <form method="get">

            
                    <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Full Name" value="<?php echo $_GET['nm'];?>">

          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php echo $_GET['um'];?>">

          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $_GET['em'];?>">

          </div>
          
          
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control"
            placeholder="Enter Password" value="<?php echo $_GET['pwd'];?>">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="number" name="number" class="form-control"
            placeholder="Enter Number" value="<?php echo $_GET['num'];?>">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Update">
          </div>
        </form>
        </div>
      </div>

  <!--end of update-->
  <?php
 if($_GET['submit'])
 {
  $nam=$_GET['name'];
  $user=$_GET['username'];
  $ema=$_GET['email'];
  $pass=$_GET['password'];
  $num=$_GET['number'];
  
  
  $query="UPDATE EPRP SET name='$nam',username='$user',password='$pass',number='$num' where email='$ema'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
      echo "<font color='green' size='5px'>Updated Successfully..</font>";
    }
  }
  else{
      echo "<font color='red' size='4px'>Click on Update Button to Save the Changes</font>";
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
