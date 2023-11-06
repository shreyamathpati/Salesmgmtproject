<?php
include("connect.php");
error_reporting(0);
if(isset($_POST['showa']))
{
  $brand=$_POST['brand'];
  $model=$_POST['model'];
  
 $sql="select * from model where Brandname='$brand' && Modelno='$model'";
 $result=mysqli_query($conn,$sql);
    while($idsh=mysqli_fetch_object($result))
    {
				 
		 $brand=($idsh->Brandname);
		 $model=($idsh->Modelno);
		 $details=($idsh->Details);
		 $description=($idsh->Description);
		 //$image=($idsh->Image);
		 $minimumrate=($idsh->Minimumrate);
		 $incentive=($idsh->Incentive);
		
}

}
if(isset($_POST['update']))
{
  $brandx=$_POST['brand'];
  $modelx=$_POST['model'];
  $details=$_POST['Details'];
  $description=$_POST['Description'];
  $image=$_POST['Image'];
  $minimumrate=$_POST['Minimumrate'];
  $incentive=$_POST['Incentive'];
  
  
  $sqla="UPDATE model SET Details='$details',Description='$description',Image='$image',Minimumrate='$minimumrate',Incentive='$incentive' WHERE Brandname='$brandx' && Modelno='$modelx' ";
  
   if(mysqli_query($conn,$sqla))
   {
     echo"<script>alert('Updated successfully')</script>";
   }
   else
   {
    echo"Error:".$sql."<br>".$mysqli_error($conn);
   }
 
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update product</title>
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
       
       <div class="col-lg-6">
      <div class="card card-body">
       <h5 class="card-title">Update Product</h5>
      <form class="row g-3" Method='POST'>
			  <div class="col-6">
                <label for="inputBrand" class="form-label">Brand Name</label>
				    <input type="text" class="form-control" name="brand" value="<?php echo $brand?>" list="datalist1">
					<datalist id="datalist1">
					<?php
					$sql="select *from model WHERE 1";
					$query=mysqli_query($conn,$sql);
					$cnt=1;
					While($rs=mysqli_fetch_object($query))
					{
					$RES=stripslashes($rs->Brandname);
					echo"<option value='$RES'>$RES</option>";
					$cnt++;
					}
					?>
                </div>
				
                <div class="col-6">
                  <label for="inputModel" class="form-label">Model No</label>
                  <input type="text" class="form-control" name="model" value="<?php echo $model?>" list="datalist2">
					<datalist id="datalist2">
					<?php
					$sql="select *from model WHERE 1";
					$query=mysqli_query($conn,$sql);
					$cnt=1;
					While($rs=mysqli_fetch_object($query))
					{
					$RES=stripslashes($rs->Modelno);
					echo"<option value='$RES'>$RES</option>";
					$cnt++;
					}
					?>
                </div>
				<div class="text-center">
                  <button type="submit" name="showa" class="btn btn-secondary btn-sm">Show</button>
                </div>
                <div class="col-12">
                  <label for="inputdetails" class="form-label">Details</label>
                  <input type="text" class="form-control" name='Details' id="inputdetails" value="<?php echo $details ?>">
                </div>
				
                <div class="col-12">
                  <label for="inputdes" class="form-label">Description</label>
                  <input type="text" class="form-control" name='Description' id="inputdes" value="<?php echo $description ?>">
                </div>
				
				
				
				<div class="col-12">
                  <label for="inputmin" class="form-label">Minimum</label>
                  <input type="text" class="form-control" name='Minimumrate' id="inputmin" value="<?php echo $minimumrate ?>">
                </div>
				<div class="col-12">
                  <label for="inputinc" class="form-label">Incentive(%)</label>
                  <input type="text" class="form-control" name='Incentive' id="inputinc" value="<?php echo $incentive ?>">
                </div>
				
                <div class="text-center">
                  <button type="submit"  name="update" class="btn btn-secondary btn-sm">Update</button>
                </div>
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