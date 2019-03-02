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
          
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                  <div class="table-responsive">
                  <div id="print-content" name="results">
                  <?php	
$aid=$_SESSION['id'];
	$ret="select * from student where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$aid);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>	
                  <h4 class="card-title"><?php echo $row->name;?>'s Provisional Results</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>
                        #
                        </th>
                          <th>
                            Unit Code
                          </th>
                          <th>
                            Unit Name
                          </th>
                          <th>
                            Grade Obtained
                          </th>
                          <th>
                            Remarks
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php	
$aid=$_SESSION['id'];
$ret="select * from results";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->unitcode;?> </td>
<td><?php echo $row->unitname;?></td>
<td><?php echo $row->grade;?></td>
<td><?php echo $row->remarks;?></td>

<!--
<td>
<a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/hostel/admin/full-profile.php?id=<?php echo $row->id;?>');" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp;
<a href="manage-students.php?del=<?php echo $row->id;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
										</tr> -->
									<?php
$cnt=$cnt+1;
									 } ?> 
                        
                      </tbody>
                    </table>
                    <script type="text/javascript">
    function printDiv(results) {
        var printContents = document.getElementById(results).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
    </script>
    
    
                  </div>
                  <input type="button" class="btn btn-success mr-2" onClick="printDiv('print-content')" value="Print Results"/>
                </div>
                
                
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
  <?php }?>
</html>