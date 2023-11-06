<?php
include("connect.php");
$ida=$_GET['edit_id'];
$sql="select * from add_emp where id='$ida'";
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 $fnamea=($idsh->Firstname);
				 $lnamea=($idsh->Lastname);
				 $phonea=($idsh->Phoneno);
				 $usernamea=($idsh->Username);
				 $passworda=($idsh->Password);
				 //$ida=($idsh->id);
				 }
				 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Employee History</title>
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
				 <h5 class="card-title">Employee History</h5>
				</div>
				<div class="table-responsive">
				<table class="table">
					<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Contact Number</th>
					<th>Username</th>
					<th>Password</th>
					
					<td></td>
					</tr>
					<tr>
					<td>
					<?php echo $ida?>
					</td>
					<td><?php echo $fnamea ?> <?php echo $lnamea ?> </td>
					<td><?php echo $phonea ?></td>
					<td><?php echo $usernamea ?></td>
					<td><?php echo $passworda ?></td>
					<td><a href="emp_view.php?edit_id=<?php echo $ida?>">Edit</a></td>
					</tr>
					
					</table>
					</div>
					<br><br>
					<br><br>
					
				<div class="table-responsive">
				<table class="table">
				<tr>
					<th>Date</th>
					<th>Lead Number</th>
					<th>Contact</th>
					<th>Address</th>
					<th>City</th>
					<th>Brand</th>
					<th>Model No</th>
					<th>Status</th>
					<td></td>
				</tr>
				<tr>
					<td>28/12/2022</td>
					<td>101</td>
					<td>9011948583</td>
					<td>138 Raviwar PEth</td>
					<td>Solapur</td>
					<td>HP</td>
					<td>Hp 123</td>
					<td>not sold</td>
					<td><a href="">Select</a></td>
					</tr>
					<tr>
					<td>1/12/2022</td>
					<td>102</td>
					<td>9011948583</td>
					<td>138 Raviwar PEth</td>
					<td>Solapur</td>
					<td>HP</td>
					<td>Hp 123</td>
					<td>sold</td>
					<td><a href="">Select</a></td>
					</tr>
					
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