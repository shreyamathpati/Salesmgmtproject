<?php
include("connect.php");
if(isset($_POST['add']))
{
  $b=$_POST['b'];

  $sql="insert into brand(Brandname)value('$b')";
   if(mysqli_query($conn,$sql))
   {
   echo"<script> alert ('Brand added successfully')</script>";
   }
   else
   {
   echo"Error:".$sql."<br>".$mysqli_error($conn);
   }
 
}
if(isset($_POST['addmodel']))
{
  $brandn=$_POST['Brandname'];
  $model=$_POST['Modelno'];
  $detail=$_POST['Details'];
  $description=$_POST['Description'];
  //$file=$_POST['file'];
  $minimumr=$_POST['Minimumrate'];
  $incentive=$_POST['Incentive'];
   
  $file=$_FILES["file"]["name"];
  $tem_name=$_FILES["file"]["tmp_name"];
  //$path="image/".$file;
  $nn=uniqid(rand()).$file;
  $path="image/".uniqid(rand()).$file;
  move_uploaded_file($tem_name,$path);
 
  $sql="insert into model(Brandname,Modelno,Details,Description,Image,Minimumrate,Incentive)
  value('$brandn','$model','$detail','$description','$nn','$minimumr','$incentive')";
   if(mysqli_query($conn,$sql))
   {
   echo"<script> alert ('Models added successfully')</script>";
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

  <title>Create Product</title>
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
	        <h5 class="card-title">Create Product</h5>
              <h2class="card-title">Brand Name</h2>
              
              <form class="row g-3" method="POST">
                <div class="col-md-12">
                   <input type="text" name="b" class="form-control">
                </div>
			  
				<div class="text-center">
                  <button type="submit" name="add"  class="btn btn-secondary btn-sm">Submit</button>
				</div>
			  
			  </form>
              </div>
       </div>
       
       <div class="col-lg-6">
      <div class="card card-body">
      
      <form class="row g-3"  method="POST" enctype="multipart/form-data">
			  <div class="col-12">
			  <h5 class="card-title"></h5>
					<label for="inputBrand" class="form-label">Brand Name</label>
					<input type="text" class="form-control" name="Brandname" list="datalist1">
					<datalist id="datalist1">
					<?php
					$sql="select *from brand WHERE 1";
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
				
                <div class="col-12">
                  <label for="inputModel" class="form-label">Model No</label>
                  <input type="text" class="form-control" name="Modelno" id="inputModel">
                </div>
                <div class="col-12">
                  <label for="inputdetails" class="form-label">Details</label>
                  <input type="text" class="form-control" name="Details" id="inputdetails">
                </div>
                <div class="col-12">
                  <label for="inputdes" class="form-label">Description</label>
                  <input type="text" class="form-control" name="Description" id="inputdes">
                </div>
				
				<div class="col-12">
                  <label for="inputimg" class="form-label">Image</label>
                  <input type="file" class="form-control"  name="file">
				</div>
				
				<div class="col-12">
                  <label for="inputmin" class="form-label">Minimum Rate</label>
                  <input type="text" class="form-control" name='Minimumrate' id="inputmin">
                </div>
				<div class="col-12">
                  <label for="inputinc" class="form-label">Incentive(%)</label>
                  <input type="text" class="form-control" name='Incentive' id="inputinc">
                </div>
				
                <div class="text-center">
                  <button type="submit" name="addmodel" class="btn btn-secondary btn-sm">Save</button>
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