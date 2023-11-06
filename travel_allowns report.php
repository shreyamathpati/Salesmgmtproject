
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
  
  <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Travel Allounce of  <?Php echo $firstname; ?></h5>
				<div class="col-6">
				 <form class="row g-3" method="POST">
				 
				 <table class="table">
				 <tr>
				 
				 <td>From Date</td>
				 <td>To Date</td>
				 <td>Employee Name</td>
				 <td></td>
				 
				 </tr>
				 <tr>
				 
				 <td><input type="date" name="fromdate" class="form-control" ></td>
				 <td> <input type="date" name="todate" class="form-control" ></td>
				 <td><input type="text" class="form-control" name="res" list="datalist1">
					<datalist id="datalist1">
					<?php
					$sql="select *from add_emp WHERE 1";
					$query=mysqli_query($conn,$sql);
					$cnt=1;
					While($rs=mysqli_fetch_object($query))
					{
					$RES=stripslashes($rs->Firstname);
					echo"<option value='$RES'>$RES</option>";
					$cnt++;
					}
					?></td>
				 <td><button type="submit" class="btn btn-primary" name="savea">Show</button> </td>
				 
				 </tr>
				 
				 
				 </table>
             
					</div>
			  
			  <div class="table-responsive">
				<table class="table">
				<tr>
				    
					<th>Employee name</th>
					<th>Image</th>
					<th>Amount</th>
					<th>Details</th>
					
					<td></td>
				</tr>
				<?php 
				if (isset($_POST['savea']))
				{	
				$fromdatex=$_POST['fromdate'];
				$foramadtey=date("Y-m-d", strtotime($fromdatex));
				$todatex=$_POST['todate'];
				$todatey=date("Y-m-d", strtotime($todatex));
			                   $firstname=$_POST['res'];
$sql="select * from  travel_allouce where Date>= '$fromdatey' && Date<= '$todatey' && emp_name='$firstname'";
$result=mysqli_query($conn,$sql);
				while($idsh=mysqli_fetch_object($result))
				{
					$eempname=($idsh->emp_name);
					$iimg=($idsh->image);
					$aamount=($idsh->amount);
					$ddetail=($idsh->details);
					
					 ?>
				<tr>
				    
					<td><?php echo $eempname ?></td>
					<td><?php echo $iimg ?></td>
					<td><?php echo $aamount ?></td>
					<td><?php echo $ddetail ?></td>
					
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