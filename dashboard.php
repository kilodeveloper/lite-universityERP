<?php
session_start();
include('includes/config.php');
//date_default_timezone_set('Asia/Kolkata');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>St Paul`s Universty Student Portal</title> 
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


  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

   
   
          <?php include("includes/header.php")?>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include("includes/navbar.php")?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <?php	
                $aid=$_SESSION['id'];
	              $ret="select * from student where id=?";
		            $stmt= $mysqli->prepare($ret) ;
	              $stmt->bind_param('i',$aid);
	               $stmt->execute() ;//ok
	               $res=$stmt->get_result();
	 
	                while($row=$res->fetch_object())
	                  {
	  	                ?>	
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-currency-usd text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Fee Billed</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Ksh <br><?php echo $row->totalbilled;?></h3>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                  
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div> 
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Paid</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"> Ksh <br><?php echo $row->totalpaid;?></h3>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi  mdi-database-minus text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Balance</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Ksh <br><?php echo $row->balance;?></h3>
                      </div>
                    </div>
                  </div>
                               </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Units Taking </p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><br><?php echo $row->unitstaking;?></h3>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
              <!--weather card-->
              <div class="card card-weather">
                <div class="card-body">
                  <div class="weather-date-location">
                    <h3>
                    <p id="date"></p>
                      <script>
                           document.getElementById("date").innerHTML = Date();
                                                   </script> <h3>
                    <p class="text-gray">                     
                      <span class="weather-location">Machakos, Kenya</span>
                    </p>
                  </div>
                  <div class="weather-data d-flex">
                  <a target="_blank" href="https://www.booked.net/weather/machakos-148855"><img src="https://w.bookcdn.com/weather/picture/3_148855_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=33594"
                      alt="booked.net"/></a>
                  </div>
                </div>
                
              </div>
              <!--weather card ends-->
            </div>
            <div class="col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5"> Academic Performance</h2>
                  <div class="wrapper d-flex justify-content-between">
                    <div class="side-left">
                      <p class="mb-2">Previous Semesters Performance</p>
                                  <p class="display-3 mb-4 font-weight-light"><?php echo $row->grade;?></p>
                    </div>
                    
                  </div>
                  
                  <div class="wrapper">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Performance</p>
                      <p class="mb-2 text-primary"><?php echo $row->performance;?></p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width:<?php echo $row->performance;?>%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
         
        </div>
        <!-- content-wrapper ends -->
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
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
  
 
</body>
<?php }?>

</html>