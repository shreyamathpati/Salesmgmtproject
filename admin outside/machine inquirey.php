<?php
include("connect.php");
$atime=date_default_timezone_set("Asia/Calcutta");
$btime=date("h:i:s").date("a");
$todate=date("Y-m-d");

$id=$_GET['sh'];
$sql="select * from customer_details where id='$id'";
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 
				 $name=($idsh->Customername);
				 $contactno=($idsh->Mobileno);
				 $City=($idsh->City);
				 
				 }
if(isset($_POST['add']))
{
  $branda=$_POST['brand'];
  $modela=$_POST['model'];
  $givenbya=$_POST['givenby'];
  $ratea=$_POST['rate'];
  
  
  $sql="insert into machine_inquirey(cid,date,name,brand,model,rate,givenby)
  value('$id','$todate','$name','$branda','$modela','$ratea','$givenbya')";
   if(mysqli_query($conn,$sql))
   {
   echo"<script> alert ('New emp added successfully')</script>";
   }
   else
   {
   echo"Error:".$sql."<br>".$mysqli_error($conn);
   }
 
}

if(isset($_POST['save']))
{
  $Followupdate=$_POST['Followupdate'];
  $Note=$_POST['Note'];
  
  $sql="insert into followup(cust_id,Customer_name,City,Contact_No,C_date,Followupdate,Note)
  value('$id','$name','$City','$contactno','$todate','$Followupdate','$Note')";
   if(mysqli_query($conn,$sql))
   {
   echo"<script> alert ('New emp added successfully')</script>";
   }
   else
   {
   echo"Error:".$sql."<br>".$mysqli_error($conn);
   }
 
}

?>

				 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Machine Inquirey</title>
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
       <h5 class="card-title">Machine Inquirey</h5>
      <form class="row g-3" method="POST">
	        <table class="table table-bordered">
                <thead>
                  <tr>
				    
                    <th scope="col">Id</th>
					<th scope="col">Name</th>
					<th scope="col">Contactno</th>
					
	               </tr>
				   <tr>
				   <td> <?php echo $id?></td>
				   <td> <?php echo $name?></td>
				   <td> <?php echo $contactno?></td>
				   </tr>
                </thead>
                
              </table>
			  
			  <table class="table table-bordered">
                <thead>
                  <tr>
				    
                    <th scope="col">Brand </th>
					<th scope="col">Model</th>
					<th scope="col">Rate</th>
					
	               </tr>
				   <tr>
				   <td>
				   
					<input type="text" class="form-control" name="brand" list="datalist1">
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
				   </td>
				   
				   <td>
				   <input type="text" class="form-control" name="model" list="datalist2">
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
				   </td>
				   
				   <td>
				   <input type="text" class="form-control" name="rate">
				   </td>
				   
				   <td>
				   <button type="submit" name="add" class="btn btn-secondary btn-sm">Add</button>
				   </td>
				   </tr>
                </thead>
                
              </table>
			   <table class="table table-bordered">
                <thead>
                  <tr>
				    
                    <th scope="col">Brand</th>
					<th scope="col">Model</th>
					<th scope="col">Rate</th>
					
					</tr>
			
					<?php
					$sql="select * from machine_inquirey where cid='$id' && date='$todate'";
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 
				 $brand=($idsh->brand);
				 $model=($idsh->model);
				 $rate=($idsh->rate);
					?>
	               </tr>
				   <tr>
				   <td><?php echo $brand ?></td>
				   <td><?php echo $model ?></td>
				   <td><?php echo $rate ?></td>
				   <td><button type="submit" name="add" class="btn btn-secondary btn-sm">Delete</button>
				   </td>
				   </tr>
				   <?php
				   }
				   ?>
                </thead>
              </table>
			  <div class="col-lg-6">
             
			 <table>
                    <tr>
                    <th align="center">Follow-up Date</th>
                    </tr>
                    <tr>
                    <td><input type="date" name="Followupdate" class="form-control" id="Fromdate"></td>
                    </tr>
			</table>
			  </div>
			  
			  <table>
                    <tr>
					<th align="center">Note</th>
					</tr>
					<tr>
					
						<td><textarea class="form-control" name="Note" style="height: 100px"></textarea></td>
					
                    </tr>
			</table>
			  </div>
			  
				
				
				
				<div class="text-center">
                  <button type="submit" name="save" class="btn btn-secondary btn-sm">Save</button>
				  <button type="submit" class="btn btn-secondary btn-sm">Print</button>
                </div>
				
				
              </form>
			  </div>
			  </div>
			</div>
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