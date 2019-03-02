<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$regno=$_POST['regno'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT regno,password,id FROM student WHERE regno=? and password=? ");
				$stmt->bind_param('ss',$regno,$password);
				$stmt->execute();
				$stmt -> bind_result($regno,$password,$id);
				$rs=$stmt->fetch();
				$_SESSION['id']=$id;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
                //  $insert="INSERT into admin(adminid,ip)VALUES(?,?)";
   // $stmtins = $mysqli->prepare($insert);
   // $stmtins->bind_param('sH',$id,$uip);
    //$res=$stmtins->execute();
					header("location:dashboard.php");
				}

				else
				{
					echo "<script>alert('Access Denied Invalid Details');</script>";
				}
			}
				?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>St Paul`s University Student Portal</title> 
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/icon.png" />
</head>
<body>
	
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-dark mt-4x">SPU Students Portal</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							
								<form action="" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Your Admission Number</label>
									<input type="text" placeholder="Admission Number In Capital Letters" name="regno" class="form-control mb" required>
									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="password" name="password" class="form-control mb" required>
									

									<input type="submit" name="login" class="btn btn-primary btn-block" value="Login Me In" >
									
								</form>
								
							</div>
							
						</div>
						<!--
						<div class="text-center text-dark">
							<a href="../" class="text-dark">Home</a>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="includes/js/jquery.min.js"></script>
	<script src="includes/js/bootstrap-select.min.js"></script>
	<script src="includes/js/bootstrap.min.js"></script>
	<script src="includes/js/jquery.dataTables.min.js"></script>
	<script src="includes/js/dataTables.bootstrap.min.js"></script>
	<script src="includes/js/Chart.min.js"></script>
	<script src="includes/js/fileinput.js"></script>
	<script src="includes/js/chartData.js"></script>
	<script src="includes/js/main.js"></script>
</body>
</html>