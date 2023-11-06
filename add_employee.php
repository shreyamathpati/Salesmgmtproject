<?php
include("connect.php");
if(isset($_POST['add']))
{
  $fname=$_POST['Firstname'];
  $lname=$_POST['Lastname'];
  $email=$_POST['Email'];
  $phone=$_POST['Phoneno'];
  $addhar=$_POST['Addharcard'];
  $bloodg=$_POST['Bloodgroup'];
  $fcontact=$_POST['Fcontact'];
  $joindate=$_POST['Joindate'];
  $bankn=$_POST['Bankname'];
  $accountno=$_POST['Accountno'];
  $ifse=$_POST['Ifse'];
  $username=$_POST['Username'];
  $password=$_POST['Password'];
  
  $sql="insert into add_emp(Firstname,Lastname,Email,Phoneno,Addharcard,Bloodgroup,Fcontact,Joindate,Bankname,Accountno,Ifse,Username,Password)
  value('$fname','$lname','$email','$phone','$addhar','$bloodg','$fcontact','$joindate','$bankn','$accountno','$ifse','$username','$password')";
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
  <div class="row">
  <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Employee Details</h5>

              <form class="row g-3" method="POST" enctype="multipart/form-data">
					<div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="Firstname" class="form-control" id="yourName" required>
                    </div>
					
					<div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="Lastname" class="form-control" id="yourLName" required>
                      <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="Email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
					
					<div class="col-12">
                      <label for="yourPhoneno" class="form-label">PhoneNo</label>
                      <input type="text" name="Phoneno" class="form-control" id="yourNumber">
                      <div class="invalid-feedback">Please, enter your Phoneno!</div>
                    </div>
					
					<div class="col-12">
                      <label for="youraddhar" class="form-label">AddharcardNo</label>
                      <input type="text" name="Addharcard" class="form-control" id="yourNumber" >
                      <div class="invalid-feedback">Please, enter your AddharNo!</div>
                    </div>
					
					<div class="col-12">
                      <label for="yourBlood" class="form-label">Blood Group</label>
                      <input type="text" name="Bloodgroup" class="form-control" id="yourBlood" >
                      <div class="invalid-feedback">Please, enter your blood group!</div>
                    </div>
					
					<div class="col-12">
                      <label for="yourFcontact" class="form-label">Father's ContactNo</label>
                      <input type="text" name="Fcontact" class="form-control" id="yourFcontact" >
                      <div class="invalid-feedback">Please, enter contactno!</div>
                    </div>
					
					<div class="col-12">
                      <label for="yourJoin" class="form-label">Joining date</label>
                      <input type="date" name="Joindate" class="form-control" id="yourJoin" >
                      <div class="invalid-feedback">Please, enter date!</div>
                    </div>
					
					<div class="col-12">
                      <label for="yourJoin" class="form-label">Bank Name</label>
                      <input type="text" name="Bankname" class="form-control" id="yourbankn" >
                      <div class="invalid-feedback">Please, enter bankname!</div>
                    </div>
					
					<div class="col-12">
                      <label for="yourJoin" class="form-label">Account Number</label>
                      <input type="text" name="Accountno" class="form-control" id="youraccount" >
                      <div class="invalid-feedback">Please, enter bankaccount!</div>
                    </div>
					
					<div class="col-12">
                      <label for="yourJoin" class="form-label">IFSE</label>
                      <input type="text" name="Ifse" class="form-control" id="yourifse" >
                      <div class="invalid-feedback">Please, enter bankIFSE!</div>
                    </div>
					

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="Username" class="form-control" id="yourUsername">
                        <div class="invalid-feedback">Please enter a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="Password" class="form-control" id="yourPassword">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
					
					<div class="text-center">
					  <button type="submit" name="add" class="btn btn-secondary btn-sm">Save</button>
					</div>
				</form>
            </div>
          </div>
          
          </div>
          
          <div class="col-lg-6">
          <div class="card card-body">
          <h5 class="card-title">Employee List</h5>
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">LeadNo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Select</th>
                  </tr>
                </thead>
                <tbody>
				<?php
				 $sql='select * from add_emp';
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 $fnamea=($idsh->Firstname);
				 $lnamea=($idsh->Lastname);
				 $emaila=($idsh->Email);
				 $phonea=($idsh->Phoneno);
				 $addhara=($idsh->Addharcard);
				 $bloodga=($idsh->Bloodgroup);
				 $fcontacta=($idsh->Fcontact);
				 $joindatea=($idsh->Joindate);
		   		 $bankna=($idsh->Bankname);
				 $accountnoa=($idsh->Accountno);
				 $ifsea=($idsh->Ifse);
				 $usernamea=($idsh->Username);
				 $passworda=($idsh->Password);
				 $ida=($idsh->id);
				?>
				<tr>
			    <td><?php echo $ida ?></td>
				<td><?php echo $fnamea ?></td>
				<td><a href="emp history.php?edit_id=<?php echo $ida?>">Select</a></td>
				</tr>
                  <?php
				}
				?>
                </tbody>
              </table>
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