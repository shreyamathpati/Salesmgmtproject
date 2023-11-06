<?php
include("connect.php");
$atime=date_default_timezone_set("Asia/Calcutta");
$btime=date("h:i:s").date("a");
$todate=date("Y-m-d");
session_start();
include("connect.php");

if($_SESSION["user"]==true)
{
	$res=$_SESSION["user"];
}

$sql="select * from add_emp where Email='$res'";
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 $Firstname=($idsh->Firstname);
				 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Employee</title>
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
	<section class="section">
    <div  class="row">
    <h5>My Today's Work </h5>
	<?php 
	$sql="select * from followup where employee_name='$Firstname'&& Followupdate='$todate'";
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 $Customer_name=($idsh->Customer_name);
				 $Contact_No=($idsh->Contact_No);
				 $ida =($idsh->id);
				 $City=($idsh->City);
				 $EmployeeStatus=($idsh->EmployeeStatus);
	?>
     <div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $Customer_name ?> <span>| <?php echo $Contact_No?>
				  <?php echo $City ?></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <span class="text-danger"> <h5><?php echo $EmployeeStatus ?></h5></span>

                    </div>
                    
                  </div>
				 
                  <span class="float-start">
				  <a href="assign date.php?edit_id=<?php echo $ida?>">Select</a>
					</span>
					
					<span class="float-end">
				  <a href="quotion.php?edit_id=<?php echo $ida?>">Create Quotation</a>
					</span>
          </div>
        </div>

              </div>
              <?php 
			  }
			  ?>
                

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