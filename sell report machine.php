
<?php
include('connect.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customer Details</title>
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

<div class="row">
  
  <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Brand Wise Report</h5>
				<div class="col-12">
				 <form class="row g-3" method="POST">
				 
				 <?php 
				if (isset($_POST['savea']))
				{	
				$brandname=$_POST['brandname'];
				}
				?>
              <table class="table">
					
                     <tr>
					
					<th> <label for="yourName" class="form-label">Brand Name</label></th>
                    
					   <td> <input type='text' value = "<?php echo $brandname ?>" name="brandname" class="form-control" > </td>
                      
                   </div>
				   
					  
					
					<td> <button type="submit" class="btn btn-primary" name="savea">Show</button> <td>
                  
					</tr>
					
					</table>
					</div>
					
			  
			  <div class="table-responsive">
				<table class="table">
				<tr>
				    
					<th>Date</th>
					<th>Employee Name</th>
					<th>Customer Name</th>
					<th>City</th>
					<th>Rate</th>
					<th>Final Rate</th>
					
					<td></td>
				</tr>
				<?php 
				if (isset($_POST['savea']))
				{	
				$brandname=$_POST['brandname'];
				
			
			$sql="select * from sellproduct where brand = '$brandname'";
			$result=mysqli_query($conn,$sql);
				while($idsh=mysqli_fetch_object($result))
				{
					$sdate=($idsh->todaydate);
					$cname=($idsh->customername);
					$city=($idsh->city);
					$rate=($idsh->rate);
					$frate=($idsh->Finalrate);
					$employee=($idsh->Employeename);
					 ?>
				<tr>
				    
					<td><?php echo $sdate ?></td>
					<td><?php echo $employee ?></td>
					<td><?php echo $cname ?></td>
					<td><?php echo $city ?></td>
					<td><?php echo $rate ?></td>
					<td><?php echo $frate ?></td>
					
					
					</tr>
					<?php 
				}
				}
					?>
					</table>
					
					
					
					
					
				</form>
            </div>
			
			
          </div>
          
          </div>
          
          
          
          
         
              <!-- No Labels Form -->
              
            </div>
			<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Brand Wise Report of  <?PHP echo $firstname; ?></h5>
				<div class="col-12">
				 <form class="row g-3" method="POST">
              <table class="table">
					
                      <tr>
					
					<th> <label for="yourName" class="form-label">From date</label></th>
					<th><label for="address" class="form-label">To date</label></th>
					 <th><label for="address" class="form-label">Brand Name</label></th>
                    </tr>
					
					<tr>
					
					  <td> <input type="date" name="fromdate" class="form-control" > </td>
					  <td>  <input type="date" name="todate" class="form-control" > </td>
					  <td>  <input type="text" name="brandnameabc" class="form-control" > </td>
                
					</tr>
					 
					</table>
					<button type="submit" class="btn btn-primary" name="saveab">Show</button> 
					</div>
			  
			  <div class="table-responsive">
				<table class="table">
				<tr>
				    
				
					<th>Customer Name</th>
					<th>Employee Name</th>
					<th>City</th>
					<th>Rate</th>
					<th>Final Rate</th>
					
					<td></td>
				</tr>
				<?php 
				if (isset($_POST['saveab']))
				{	
			     $fromdatex=$_POST['fromdate'];
				$foramadtey=date("Y-m-d", strtotime($fromdatex));
				$todatex=$_POST['todate'];
				$todatey=date("Y-m-d", strtotime($todatex));
				$brandnameabc=$_POST['brandnameabc'];
				
			
$sql="select * from sellproduct where todaydate>= '$fromdatey' && todaydate<= '$todatey' && brand = '$brandnameabc'";
$result=mysqli_query($conn,$sql);
				while($idsh=mysqli_fetch_object($result))
				{
					
					$cname=($idsh->customername);
					$city=($idsh->city);
					$rate=($idsh->rate);
					$frate=($idsh->Finalrate);
					$employee=($idsh->Employeename)
					 ?>
				<tr>
				    
					
					<td><?php echo $cname ?></td>
					<td><?php echo $employee ?></td>
					<td><?php echo $city ?></td>
					<td><?php echo $rate ?></td>
					<td><?php echo $frate ?></td>
					
					
					</tr>
					<?php 
				}
				}
					?>
					</table>
					
					
					
					
					
				</form>
            </div>
          </div>

          
                    </form>
                    <!-- End floating Labels Form -->

            </div>
          </div>

       
    </section>
  </main>
 <!-- End #main -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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