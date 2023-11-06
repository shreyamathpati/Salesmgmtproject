<?php
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daily Report</title>
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
  
         <div class="card">
            <div class="card-body">
			<h5 class="card-title">Daily Report</h5>
            <div class="row">
            <div class="col-lg-4"></div>
			<div class="col-lg-4">
              
			<form method="POST"> 
				<h5 class="card-title"></h5>
				<table class="table">
                 <tr>
                 <td>From Date</td>
                 <td>To Date</td>
                 <td></td>
                 </tr>
				 
                 <tr>
                 <td><input type="date" name="fromdate" class="form-control"></td>
                 <td><input type="date" name="todate" class="form-control"></td>
                 <td><input type="submit" name="show" class="btn btn-danger btn-sm" value="Show"></td>
                 </tr>
                 </table>
                    </div>	
				 
            
            </div>
            </div>
			
			</br></br>
        <section class="section">
		  <div class="row">
			<div class="col-lg-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
				    <th scope="col">LeadNo</th>
                    <th scope="col">Date</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Client Name</th>
					<th scope="col">City</th>
		            <th scope="col">Followupdate</th>
					<th scope="col">select</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
		   if(isset($_POST['show']))
		  {	
			$fromdatex =$_POST['fromdate'];
			//$fromdatea = date("Y-m-d", strtotime($fromdate));
			$todatex =$_POST['todate'];
			//$todatea = date("Y-m-d", strtotime($todate));
		   
			$sql = "SELECT * FROM followup where Followupdate>= '$fromdatex' && Followupdate<= '$todatex' ";
			$result = mysqli_query($conn, $sql);
			while($idsh = mysqli_fetch_object($result))
			{
				$leadno =($idsh->id);
				$date =($idsh->C_date);
				$ename =($idsh->employee_name);
				$cname=($idsh->Customer_name);
				$city=($idsh->City);
			    $Followupdate=($idsh->Followupdate);
				$ida=($idsh->id);
		   ?>
                  <tr>
                  
					<td><?php echo $leadno?></td>
                    <td><?php echo $date?></td>
                    <td><?php echo $ename?></td>
					<td><?php echo $cname?></td>
					<td><?php echo $city?></td>
					<td><?php echo $Followupdate?></td>
					<td><a href="admin enquire details.php?edit_id=<?php echo $ida?>">View</a></td>
                  </tr>
				  <?php
                 }
               }		
			   ?>		 
                </tbody>
              </table>
			</form>
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