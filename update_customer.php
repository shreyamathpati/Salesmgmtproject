<?php
include('connect.php');
$ida=$_GET['edit_id'];
$sql="select * from customer_details where id='$ida'" ;
$result=mysqli_query($conn,$sql);
				while($idsh=mysqli_fetch_object($result))
				{				
				
					$Customer_name=($idsh->Customername);
					$Mobileno=($idsh->Mobileno);
					$Address=($idsh->Address);
					$City=($idsh->City);
					$State=($idsh->State);
					$PostalCode=($idsh->Postal_code);
					$YourEmail=($idsh->Email_id);
					$OrganizationName=($idsh->Organization_name);
					
				}
				
				if(isset($_POST['savebutton']))
				{
			        $Customer_namea=$_POST['Customername'];
					$Mobilenoa=$_POST['Mobileno'];
					$Addressa=$_POST['Address'];
					$Citya=$_POST['city'];
					$Statea=$_POST['state'];
					$PostalCodea=$_POST['postalcode'];
					$YourEmaila=$_POST['email'];
					$OrganizationNamea=$_POST['orgname'];
					
					
					
				$sql="UPDATE customer_details SET Customername='$Customer_namea', Mobileno='$Mobilenoa',Address='$Addressa',City='$Citya',State='$Statea',
			     Postal_code='$PostalCodea',Email_id='$YourEmaila',Organization_name='$OrganizationNamea' WHERE id='$ida'";
	            if(mysqli_query($conn,$sql))
				{
					echo "<script> alert ('') </script>";
				}
				else 
				{
					echo "error:" . $sql . "<br>" . mysqli_error($conn);
				}
				}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Customer </title>
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
              <h5 class="card-title">Update Customer</h5>

              <form class="row g-3" method="POST">
					
                    
                    <div class="col-12">
                      <label for="yourName" class="form-label">Customer Name</label>
                      <input type="text" name="Customername" class="form-control" value="<?php echo $Customer_name?>">
                      <div class="invalid-feedback">Please, enter your customer name!</div>
                    </div>
					
					<div class="col-12">
                      <label for="address" class="form-label">Mobile No</label>
                      <input type="text" name="Mobileno" class="form-control" value="<?php echo $Mobileno?>">
                      <div class="invalid-feedback">Please, enter your Mobile Number!</div>
                    </div>
                    
					<div class="col-12">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" name="Address" class="form-control" value="<?php echo $Address?>">
                      <div class="invalid-feedback">Please, enter your address!</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="city" class="form-label">City</label>
                      <input type="text" name="city" class="form-control" value="<?php echo $City?>">
                      <div class="invalid-feedback">Please, enter your City name!</div>
                    </div>

                    <div class="col-12">
                      <label for="address" class="form-label">State</label>
                      <input type="text" name="state" class="form-control" value="<?php echo $State?>" >
                      <div class="invalid-feedback">Please, enter your state!</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourPostalcode" class="form-label">PostalCode</label>
                      <input type="text" name="postalcode" class="form-control" value="<?php echo $PostalCode?>">
                      <div class="invalid-feedback">Please, enter your Postalcode!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $YourEmail?>">
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    
                    
                    <div class="col-12">
                      <label for="yourOrgName" class="form-label">Organization Name</label>
                      <input type="text" name="orgname" class="form-control" value="<?php echo $OrganizationName?>">
                      <div class="invalid-feedback">Please, enter your Organization name!</div>
                    </div>
                    
					
					<div class="text-center">
					  <button type="submit" class="btn btn-primary" name="savebutton">Update</button>
					</div>
				</form>
            </div>
          </div>
          
          </div>
        
            </div>
          </div>

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