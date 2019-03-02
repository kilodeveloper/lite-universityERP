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
<form method="post" action="evaluation-forms.php" id="evaluation">
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("includes/header.php")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      
      <?php include("includes/navbar.php")?>
      
      <!-- partial -->
      
      <form>
      <div class="col-xs-12">
                        <div class="box-content">
                            
    
            <p style="font-size: 14px; font-weight: bold; text-decoration: underline;">
                Introduction
            </p>
            <p>
                The purpose of this evaluation is two-fold; firstly, to help the University evaluate the courses offered and provide information which will assist in restructuring courses offered; secondly, to evaluate the lecturers’ teaching and provide him/her with feedback to improve his/her teaching approach and methods. Please be candid and specific.
            </p>
            <div class="panel panel-default">
                <div class="panel-heading" style="font-weight: bold">
                    1.
            ADMINISTRATION: HOW DO YOU RATE THE FOLLOWING?<br />
                    Key : 1 = Poor;2 = Fair; 3 = Good; 4 = Very Good;5 = Excellent;
                </div>
                <div class="panel-body">
                    <table id="Main__Table1" cellspacing="3" cellpadding="3" style="width:100%;">
	<tr>
		<td style="border-style:None;width:50%;"><span id="Main__lbl0">Classes Space adequate and well aerated</span></td><td style="width:50%;"><table id="Main__RdAnsA0">
			<tr>
				<td><input id="Main__RdAnsA0_0" type="radio" name="ctl00$Main_$RdAnsA0" value="1" /><label for="Main__RdAnsA0_0"> Poor   </label></td><td><input id="Main__RdAnsA0_1" type="radio" name="ctl00$Main_$RdAnsA0" value="2" /><label for="Main__RdAnsA0_1"> Fair   </label></td><td><input id="Main__RdAnsA0_2" type="radio" name="ctl00$Main_$RdAnsA0" value="3" /><label for="Main__RdAnsA0_2"> Good   </label></td><td><input id="Main__RdAnsA0_3" type="radio" name="ctl00$Main_$RdAnsA0" value="4" /><label for="Main__RdAnsA0_3"> Very Good   </label></td><td><input id="Main__RdAnsA0_4" type="radio" name="ctl00$Main_$RdAnsA0" value="5" /><label for="Main__RdAnsA0_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label1">Furniture well maintained</span></td><td><table id="Main__RdAnsA1">
			<tr>
				<td><input id="Main__RdAnsA1_0" type="radio" name="ctl00$Main_$RdAnsA1" value="1" /><label for="Main__RdAnsA1_0"> Poor   </label></td><td><input id="Main__RdAnsA1_1" type="radio" name="ctl00$Main_$RdAnsA1" value="2" /><label for="Main__RdAnsA1_1"> Fair   </label></td><td><input id="Main__RdAnsA1_2" type="radio" name="ctl00$Main_$RdAnsA1" value="3" /><label for="Main__RdAnsA1_2"> Good   </label></td><td><input id="Main__RdAnsA1_3" type="radio" name="ctl00$Main_$RdAnsA1" value="4" /><label for="Main__RdAnsA1_3"> Very Good   </label></td><td><input id="Main__RdAnsA1_4" type="radio" name="ctl00$Main_$RdAnsA1" value="5" /><label for="Main__RdAnsA1_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label2">Lighting was sufficient</span></td><td><table id="Main__RdAnsA2">
			<tr>
				<td><input id="Main__RdAnsA2_0" type="radio" name="ctl00$Main_$RdAnsA2" value="1" /><label for="Main__RdAnsA2_0"> Poor   </label></td><td><input id="Main__RdAnsA2_1" type="radio" name="ctl00$Main_$RdAnsA2" value="2" /><label for="Main__RdAnsA2_1"> Fair   </label></td><td><input id="Main__RdAnsA2_2" type="radio" name="ctl00$Main_$RdAnsA2" value="3" /><label for="Main__RdAnsA2_2"> Good   </label></td><td><input id="Main__RdAnsA2_3" type="radio" name="ctl00$Main_$RdAnsA2" value="4" /><label for="Main__RdAnsA2_3"> Very Good   </label></td><td><input id="Main__RdAnsA2_4" type="radio" name="ctl00$Main_$RdAnsA2" value="5" /><label for="Main__RdAnsA2_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label3">Security was adequate</span></td><td><table id="Main__RdAnsA3">
			<tr>
				<td><input id="Main__RdAnsA3_0" type="radio" name="ctl00$Main_$RdAnsA3" value="1" /><label for="Main__RdAnsA3_0"> Poor   </label></td><td><input id="Main__RdAnsA3_1" type="radio" name="ctl00$Main_$RdAnsA3" value="2" /><label for="Main__RdAnsA3_1"> Fair   </label></td><td><input id="Main__RdAnsA3_2" type="radio" name="ctl00$Main_$RdAnsA3" value="3" /><label for="Main__RdAnsA3_2"> Good   </label></td><td><input id="Main__RdAnsA3_3" type="radio" name="ctl00$Main_$RdAnsA3" value="4" /><label for="Main__RdAnsA3_3"> Very Good   </label></td><td><input id="Main__RdAnsA3_4" type="radio" name="ctl00$Main_$RdAnsA3" value="5" /><label for="Main__RdAnsA3_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label4">Whiteboards are well maintained</span></td><td><table id="Main__RdAnsA4">
			<tr>
				<td><input id="Main__RdAnsA4_0" type="radio" name="ctl00$Main_$RdAnsA4" value="1" /><label for="Main__RdAnsA4_0"> Poor   </label></td><td><input id="Main__RdAnsA4_1" type="radio" name="ctl00$Main_$RdAnsA4" value="2" /><label for="Main__RdAnsA4_1"> Fair   </label></td><td><input id="Main__RdAnsA4_2" type="radio" name="ctl00$Main_$RdAnsA4" value="3" /><label for="Main__RdAnsA4_2"> Good   </label></td><td><input id="Main__RdAnsA4_3" type="radio" name="ctl00$Main_$RdAnsA4" value="4" /><label for="Main__RdAnsA4_3"> Very Good   </label></td><td><input id="Main__RdAnsA4_4" type="radio" name="ctl00$Main_$RdAnsA4" value="5" /><label for="Main__RdAnsA4_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr id="Main__TableFooterRow1" style="background-color:LightBlue;">

	</tr>
</table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="font-weight: bold">
                    2. ICT HOW DO YOU RATE THE FOLLOWING?<br />
                    Key : 1 = Poor;2 = Fair; 3 = Good; 4 = Very Good; 5 = Excellent;
                </div>
                <div class="panel-body">
                    <table id="Main__Table2" cellspacing="3" cellpadding="3" style="width:100%;">
	<tr>
		<td style="border-style:None;width:50%;"><span id="Main__Label17">Access to the Portals when needed</span></td><td style="width:100%;"><table id="Main__RdAns1C">
			<tr>
				<td><input id="Main__RdAns1C_0" type="radio" name="ctl00$Main_$RdAns1C" value="1" /><label for="Main__RdAns1C_0"> Poor   </label></td><td><input id="Main__RdAns1C_1" type="radio" name="ctl00$Main_$RdAns1C" value="2" /><label for="Main__RdAns1C_1"> Fair   </label></td><td><input id="Main__RdAns1C_2" type="radio" name="ctl00$Main_$RdAns1C" value="3" /><label for="Main__RdAns1C_2"> Good   </label></td><td><input id="Main__RdAns1C_3" type="radio" name="ctl00$Main_$RdAns1C" value="4" /><label for="Main__RdAns1C_3"> Very Good   </label></td><td><input id="Main__RdAns1C_4" type="radio" name="ctl00$Main_$RdAns1C" value="5" /><label for="Main__RdAns1C_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label18">Internet connectivity was available for my course needs</span></td><td><table id="Main__RdAns2C">
			<tr>
				<td><input id="Main__RdAns2C_0" type="radio" name="ctl00$Main_$RdAns2C" value="1" /><label for="Main__RdAns2C_0"> Poor   </label></td><td><input id="Main__RdAns2C_1" type="radio" name="ctl00$Main_$RdAns2C" value="2" /><label for="Main__RdAns2C_1"> Fair   </label></td><td><input id="Main__RdAns2C_2" type="radio" name="ctl00$Main_$RdAns2C" value="3" /><label for="Main__RdAns2C_2"> Good   </label></td><td><input id="Main__RdAns2C_3" type="radio" name="ctl00$Main_$RdAns2C" value="4" /><label for="Main__RdAns2C_3"> Very Good   </label></td><td><input id="Main__RdAns2C_4" type="radio" name="ctl00$Main_$RdAns2C" value="5" /><label for="Main__RdAns2C_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label19">Staff were cooperative</span></td><td><table id="Main__RdAns3C">
			<tr>
				<td><input id="Main__RdAns3C_0" type="radio" name="ctl00$Main_$RdAns3C" value="1" /><label for="Main__RdAns3C_0"> Poor   </label></td><td><input id="Main__RdAns3C_1" type="radio" name="ctl00$Main_$RdAns3C" value="2" /><label for="Main__RdAns3C_1"> Fair   </label></td><td><input id="Main__RdAns3C_2" type="radio" name="ctl00$Main_$RdAns3C" value="3" /><label for="Main__RdAns3C_2"> Good   </label></td><td><input id="Main__RdAns3C_3" type="radio" name="ctl00$Main_$RdAns3C" value="4" /><label for="Main__RdAns3C_3"> Very Good   </label></td><td><input id="Main__RdAns3C_4" type="radio" name="ctl00$Main_$RdAns3C" value="5" /><label for="Main__RdAns3C_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label20">The ICT department was reliable in responding to my learning needs</span></td><td><table id="Main__RdAns4C">
			<tr>
				<td><input id="Main__RdAns4C_0" type="radio" name="ctl00$Main_$RdAns4C" value="1" /><label for="Main__RdAns4C_0"> Poor   </label></td><td><input id="Main__RdAns4C_1" type="radio" name="ctl00$Main_$RdAns4C" value="2" /><label for="Main__RdAns4C_1"> Fair   </label></td><td><input id="Main__RdAns4C_2" type="radio" name="ctl00$Main_$RdAns4C" value="3" /><label for="Main__RdAns4C_2"> Good   </label></td><td><input id="Main__RdAns4C_3" type="radio" name="ctl00$Main_$RdAns4C" value="4" /><label for="Main__RdAns4C_3"> Very Good   </label></td><td><input id="Main__RdAns4C_4" type="radio" name="ctl00$Main_$RdAns4C" value="5" /><label for="Main__RdAns4C_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label21">The Laboratories were available for practical and research sessions</span></td><td><table id="Main__RdAns5C">
			<tr>
				<td><input id="Main__RdAns5C_0" type="radio" name="ctl00$Main_$RdAns5C" value="1" /><label for="Main__RdAns5C_0"> Poor   </label></td><td><input id="Main__RdAns5C_1" type="radio" name="ctl00$Main_$RdAns5C" value="2" /><label for="Main__RdAns5C_1"> Fair   </label></td><td><input id="Main__RdAns5C_2" type="radio" name="ctl00$Main_$RdAns5C" value="3" /><label for="Main__RdAns5C_2"> Good   </label></td><td><input id="Main__RdAns5C_3" type="radio" name="ctl00$Main_$RdAns5C" value="4" /><label for="Main__RdAns5C_3"> Very Good   </label></td><td><input id="Main__RdAns5C_4" type="radio" name="ctl00$Main_$RdAns5C" value="5" /><label for="Main__RdAns5C_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr id="Main__TableFooterRow3" style="background-color:LightBlue;">

	</tr>
</table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="font-weight: bold">
                    3. LIBRARY: HOW DO YOU RATE THE FOLLOWING?<br />
                    Key : 1 = Poor;2 = Fair; 3 = Good; 4 = Very Good;5 = Excellent;
                </div>
                <div class="panel-body">
                    <table id="Main__Table3" cellspacing="3" cellpadding="3" style="width:100%;">
	<tr>
		<td style="border-style:None;width:50%;"><span id="Main__Label26">Library and online resources were accessible</span></td><td style="width:100%;"><table id="Main__RdAns1E">
			<tr>
				<td><input id="Main__RdAns1E_0" type="radio" name="ctl00$Main_$RdAns1E" value="1" /><label for="Main__RdAns1E_0"> Poor   </label></td><td><input id="Main__RdAns1E_1" type="radio" name="ctl00$Main_$RdAns1E" value="2" /><label for="Main__RdAns1E_1"> Fair   </label></td><td><input id="Main__RdAns1E_2" type="radio" name="ctl00$Main_$RdAns1E" value="3" /><label for="Main__RdAns1E_2"> Good   </label></td><td><input id="Main__RdAns1E_3" type="radio" name="ctl00$Main_$RdAns1E" value="4" /><label for="Main__RdAns1E_3"> Very Good   </label></td><td><input id="Main__RdAns1E_4" type="radio" name="ctl00$Main_$RdAns1E" value="5" /><label for="Main__RdAns1E_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label27">Library resource materials for the course were available</span></td><td><table id="Main__RdAns2E">
			<tr>
				<td><input id="Main__RdAns2E_0" type="radio" name="ctl00$Main_$RdAns2E" value="1" /><label for="Main__RdAns2E_0"> Poor   </label></td><td><input id="Main__RdAns2E_1" type="radio" name="ctl00$Main_$RdAns2E" value="2" /><label for="Main__RdAns2E_1"> Fair   </label></td><td><input id="Main__RdAns2E_2" type="radio" name="ctl00$Main_$RdAns2E" value="3" /><label for="Main__RdAns2E_2"> Good   </label></td><td><input id="Main__RdAns2E_3" type="radio" name="ctl00$Main_$RdAns2E" value="4" /><label for="Main__RdAns2E_3"> Very Good   </label></td><td><input id="Main__RdAns2E_4" type="radio" name="ctl00$Main_$RdAns2E" value="5" /><label for="Main__RdAns2E_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label28">Library seating space was adequate</span></td><td><table id="Main__RdAns3E">
			<tr>
				<td><input id="Main__RdAns3E_0" type="radio" name="ctl00$Main_$RdAns3E" value="1" /><label for="Main__RdAns3E_0"> Poor   </label></td><td><input id="Main__RdAns3E_1" type="radio" name="ctl00$Main_$RdAns3E" value="2" /><label for="Main__RdAns3E_1"> Fair   </label></td><td><input id="Main__RdAns3E_2" type="radio" name="ctl00$Main_$RdAns3E" value="3" /><label for="Main__RdAns3E_2"> Good   </label></td><td><input id="Main__RdAns3E_3" type="radio" name="ctl00$Main_$RdAns3E" value="4" /><label for="Main__RdAns3E_3"> Very Good   </label></td><td><input id="Main__RdAns3E_4" type="radio" name="ctl00$Main_$RdAns3E" value="5" /><label for="Main__RdAns3E_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label29">Staff were cooperative</span></td><td><table id="Main__RdAns4E">
			<tr>
				<td><input id="Main__RdAns4E_0" type="radio" name="ctl00$Main_$RdAns4E" value="1" /><label for="Main__RdAns4E_0"> Poor   </label></td><td><input id="Main__RdAns4E_1" type="radio" name="ctl00$Main_$RdAns4E" value="2" /><label for="Main__RdAns4E_1"> Fair   </label></td><td><input id="Main__RdAns4E_2" type="radio" name="ctl00$Main_$RdAns4E" value="3" /><label for="Main__RdAns4E_2"> Good   </label></td><td><input id="Main__RdAns4E_3" type="radio" name="ctl00$Main_$RdAns4E" value="4" /><label for="Main__RdAns4E_3"> Very Good   </label></td><td><input id="Main__RdAns4E_4" type="radio" name="ctl00$Main_$RdAns4E" value="5" /><label for="Main__RdAns4E_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr id="Main__TableFooterRow5" style="background-color:LightBlue;">

	</tr>
</table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="font-weight: bold">
                    4. WEBSITE: HOW DO YOU RATE THE FOLLOWING?<br />
                    Key : 1 = Poor;2 = Fair; 3 = Good; 4 = Very Good;5 = Excellent;
                </div>
                <div class="panel-body">
                    <table id="Main__Table4" cellspacing="3" cellpadding="3" style="width:100%;">
	<tr>
		<td style="border-style:None;width:50%;"><span id="Main__Label57">Appearance of the website is good</span></td><td style="width:50%;"><table id="Main__RdAns1J">
			<tr>
				<td><input id="Main__RdAns1J_0" type="radio" name="ctl00$Main_$RdAns1J" value="1" /><label for="Main__RdAns1J_0"> Poor   </label></td><td><input id="Main__RdAns1J_1" type="radio" name="ctl00$Main_$RdAns1J" value="2" /><label for="Main__RdAns1J_1"> Fair   </label></td><td><input id="Main__RdAns1J_2" type="radio" name="ctl00$Main_$RdAns1J" value="3" /><label for="Main__RdAns1J_2"> Good   </label></td><td><input id="Main__RdAns1J_3" type="radio" name="ctl00$Main_$RdAns1J" value="4" /><label for="Main__RdAns1J_3"> Very Good   </label></td><td><input id="Main__RdAns1J_4" type="radio" name="ctl00$Main_$RdAns1J" value="5" /><label for="Main__RdAns1J_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label58">Ease of navigating the website</span></td><td><table id="Main__RdAns2J">
			<tr>
				<td><input id="Main__RdAns2J_0" type="radio" name="ctl00$Main_$RdAns2J" value="1" /><label for="Main__RdAns2J_0"> Poor   </label></td><td><input id="Main__RdAns2J_1" type="radio" name="ctl00$Main_$RdAns2J" value="2" /><label for="Main__RdAns2J_1"> Fair   </label></td><td><input id="Main__RdAns2J_2" type="radio" name="ctl00$Main_$RdAns2J" value="3" /><label for="Main__RdAns2J_2"> Good   </label></td><td><input id="Main__RdAns2J_3" type="radio" name="ctl00$Main_$RdAns2J" value="4" /><label for="Main__RdAns2J_3"> Very Good   </label></td><td><input id="Main__RdAns2J_4" type="radio" name="ctl00$Main_$RdAns2J" value="5" /><label for="Main__RdAns2J_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label59">Information on the website is clear</span></td><td><table id="Main__RdAns3J">
			<tr>
				<td><input id="Main__RdAns3J_0" type="radio" name="ctl00$Main_$RdAns3J" value="1" /><label for="Main__RdAns3J_0"> Poor   </label></td><td><input id="Main__RdAns3J_1" type="radio" name="ctl00$Main_$RdAns3J" value="2" /><label for="Main__RdAns3J_1"> Fair   </label></td><td><input id="Main__RdAns3J_2" type="radio" name="ctl00$Main_$RdAns3J" value="3" /><label for="Main__RdAns3J_2"> Good   </label></td><td><input id="Main__RdAns3J_3" type="radio" name="ctl00$Main_$RdAns3J" value="4" /><label for="Main__RdAns3J_3"> Very Good   </label></td><td><input id="Main__RdAns3J_4" type="radio" name="ctl00$Main_$RdAns3J" value="5" /><label for="Main__RdAns3J_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr style="height:10px;">

	</tr><tr>
		<td><span id="Main__Label60">Group work</span></td><td><table id="Main__RdAns4J">
			<tr>
				<td><input id="Main__RdAns4J_0" type="radio" name="ctl00$Main_$RdAns4J" value="1" /><label for="Main__RdAns4J_0"> Poor   </label></td><td><input id="Main__RdAns4J_1" type="radio" name="ctl00$Main_$RdAns4J" value="2" /><label for="Main__RdAns4J_1"> Fair   </label></td><td><input id="Main__RdAns4J_2" type="radio" name="ctl00$Main_$RdAns4J" value="3" /><label for="Main__RdAns4J_2"> Good   </label></td><td><input id="Main__RdAns4J_3" type="radio" name="ctl00$Main_$RdAns4J" value="4" /><label for="Main__RdAns4J_3"> Very Good   </label></td><td><input id="Main__RdAns4J_4" type="radio" name="ctl00$Main_$RdAns4J" value="5" /><label for="Main__RdAns4J_4"> Excellent   </label></td>
			</tr>
		</table></td>
	</tr><tr id="Main__TableFooterRow8" style="background-color:LightBlue;">

	</tr>
</table>

                </div>
            </div>
            <div class="panel panel-default" style="display: none">
                <div class="panel-heading" style="font-weight: bold">
                    5. Any Other Comment<br />
                </div>
                <div class="panel-body">
                    <textarea name="ctl00$Main_$txtComments" rows="5" cols="20" id="Main__txtComments" style="width:80%;">
</textarea>
                </div>
            </div>
            <br />
            <table style="width: 80%">
                <tr>
                    <td class="auto-style2"></td>
                    <td style="">
                        <input type="submit" name="ctl00$Main_$btnSaveContents" value="Submit Form" id="Main__btnSaveContents" class="btn btn-success" style="height:38px;width:142px;" /></td>
                </tr>
            </table>
        



                        </div>
                    </div>
                    <!--end other content-->
                    <!--<div class="preloader">-->
                    <!--<img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>-->
                    <!--</div>-->
                    <!--<div id="ajax-content"></div>-->
                </div>
                <!--End Content-->
            </div>
      </form>

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
  </form>
</body>

</html>
