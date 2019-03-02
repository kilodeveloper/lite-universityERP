<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$code=$_POST['code'];
$name=$_POST['name'];
$studymode=$_POST['studymode'];

$query="insert into unit(code,name,studymode) values(?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sss',$code,$name,$studymode);
$stmt->execute();
echo"<script>alert('Retake Unit Successfully ');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>St Paul`s Universty Student Panel</title> 
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/icheck/skins/all.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/icon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("includes/header.php")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php include("includes/navbar.php")?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
        

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Retake Units</h4>
                  <p class="card-description">
                    Please Enter Indicated Fields
                  </p>
                  <form method="post" action="" name="opinion" class="form-horizontal" >
          
        

<div class="form-group">
<label class="col-sm-2 control-label">Unit Name : </label>
<input type="text" name="name" id="name"  class="form-control" required="required" >
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Unit Code: </label>
<input type="text" name="code" id="code"  class="form-control" required="required" >
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Study Mode: </label>
<input type="text" name="studymode" id="studymode"  class="form-control" required="required" >
</div>

<div class="col-sm-6 col-sm-offset-4">
<input type="submit" name="submit" Value="Retake Unit"class="btn btn-success mr-2 ">
</div>
</form>
                </div>
              </div>
            </div>


        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include("includes/footer.php")?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>