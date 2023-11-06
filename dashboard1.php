<?php
include("connect.php");
$atime=date_default_timezone_set("Asia/Calcutta");
$btime=date("h:i:s").date("a");
$todate=date("Y-m-d");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Today's Work</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <!-- ======= Header ======= -->
   <?php include ("includes/header.php");?>
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include ("includes/sidebar.php");?>
  <!-- End Sidebar-->

  <main id="main" class="main">
  <div class="pagetitle">
     
  </div><!-- End Page Title -->
      
              <section class="section">
				<div class="row">
				<div class="col-lg-12">
				<div class="card card-body"> 
				<div class="card-title">
				<h5 class="card-title">Today's Work</h5>
					<h5></h5>
					<div class="search-bar">
						<form class="search-form d-flex align-items-center" method="POST" action="#">
						<input type="text" name="query" placeholder="Search" title="Enter search keyword">
						</form>
					</div>
					
					<a href="Tomorrowswork.php" class="btn btn-secondary btn-sm float-end ">Tomorrow's Work</a> 
					<a href="todayswork.php" class="btn btn-secondary btn-sm float-end me-1">Today's Work</a>
				</div>
				<div class="table-responsive">
					<table class="table">
				<tr>
				    <th>Employee Name</th>
				    <th>Today's date</th>
					<th>Enquirey date</th>
					<th>Lead Number</th>
					<th>Customer name</th>
					<th>Contact</th>
					<th>City</th>
					<th>Note</th>
					<th>Status</th>
					<td></td>
				</tr>
				<?php
				
				 $sql="select * from  followup WHERE Followupdate='$todate' && Status='Assigned'";
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 $employee_namea=($idsh->employee_name);
				 $id=($idsh->cust_id);
				 $cnamea=($idsh->Customer_name);
				 $citya=($idsh->City);
				 $contactna=($idsh->Contact_No);
				 $cdatea=($idsh->C_date);
				 $followupdatea=($idsh->Followupdate);
				 $notea=($idsh->Note);
				 $status=($idsh->Status);
				 $ida=($idsh->id);
				?>
				
				<tr>
					<td><?php echo $employee_namea?></td>
					<td><?php echo $followupdatea?></td>
					<td><?php echo $cdatea ?></td>
					<td><?php echo $id ?></td>
					<td><?php echo $cnamea ?></td>
					<td><?php echo $contactna ?></td>
					<td><?php echo $citya ?></td>
					<td><?php echo $notea?></td>
					<td><?php echo $status?></td>
					
					<td><a href="admin enquire details.php?edit_id=<?php echo $ida?>">View</a></td>
					
					</tr>
					<?php
					}
					?>
					
				
					</table>
</div>

</div>
          
	  </div>
	</div>
	</section>	

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">-->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
	  -->
      
	<!--  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>--><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>