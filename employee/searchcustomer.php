
<?php
include('connecta.php');
error_reporting(0);
if (isset($_POST['savea']))
{
$customername=$_POST['customername'];
$Address=$_POST['Address'];
$city=$_POST['city'];
$state=$_POST['state'];
$postalcode=$_POST['postalcode'];
$email=$_POST['email'];
$organizationname=$_POST['orgname'];
$brandname=$_POST['brandname'];
$modelno=$_POST['Modelno'];
$rate=$_POST['Rate'];

$sql="insert into customer_details(Lead_no,Cutomer_name,Address,City,State,Postal_code,Email_id,Organization_name,Brand_name,Model_no,Rate) 
VALUES ('1','$customername','$Address','$city','$state','$postalcode','$email','$organizationname','$brandname','$modelno','$rate')";
if(mysqli_query($conn, $sql))
{
	echo "<script> alert ('Suu') </script>";
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
              <h5 class="card-title">Customer Details</h5>
				<div class="col-6">
				 <form class="row g-3" method="POST">
              <table class="table">
					
                     <tr>
					
					<th> <label for="yourName" class="form-label">Customer Contactno</label></th>
                    
					   <td> <input type="text" name="cont" class="form-control" > </td>
                      
                   </div>
				   
					  
					  
		            <th><label for="address" class="form-label">Lead Number</label></th>
					<td>  <input type="text" name="cida" class="form-control" > </td>
					<td> <button type="submit" class="btn btn-primary" name="savea">Show</button> <td>
                  
					</tr>
					
					</table>
					</div>
			  
			  <div class="table-responsive">
				<table class="table">
				<tr>
				    
					<th>Lead Number</th>
					<th>Customer name</th>
					<th>Contact</th>
					<th>City</th>
					<th>Note</th>
					<th>Employee Status</th>
					<td></td>
				</tr>
				<?php 
				if (isset($_POST['savea']))
					
				$cont=$_POST['cont'];
				$cida=$_POST['cida'];
{
				$sql="select * from followup where Contact_No='$cont' || cust_id='$cida'"; ;
$result=mysqli_query($conn,$sql);
				while($idsh=mysqli_fetch_object($result))
				{
					$id=($idsh->cust_id);
					$cnamea=($idsh->Customer_name);
					$contactna=($idsh->Contact_No);
					$citya=($idsh->City);
					$notea=($idsh->Note);
				    $employeeStatus=($idsh->EmployeeStatus);
					
					 ?>
				<tr>
				    
					<td><?php echo $id ?></td>
					<td><?php echo $cnamea ?></td>
					<td><?php echo $contactna ?></td>
					<td><?php echo $citya ?></td>
					<td><?php echo $notea?></td>
					<td><?php echo $employeeStatus?></td>
					
					
					</tr>
					<?php 
				}
				}
					?>
					</table>
					
			<div class="col-lg-6">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Brand Name</th>
                    <th>Model no</th>
                    
                  </tr>
				  <?php 
				
				$sql="select * from machine_inquirey where cid= '$id'"; ;
				$result=mysqli_query($conn,$sql);
				while($idsh=mysqli_fetch_object($result))
				{
					$brand=($idsh->brand);
					$model=($idsh->model);
				?>
					
				  <tr>
				  <td><?php echo $brand ?></td>
				  <td><?php echo $model ?></td>
				  </tr>
				  <?php 
				}
				  ?>
                </thead>
                
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