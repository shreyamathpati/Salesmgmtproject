<?php 
include('connecta.php');
error_reporting(0);

$id=$_GET['edit_id'];

$sql="select * from quotation_generate where id='$id' ";
				 $result=mysqli_query($conn,$sql);
				 while($idsh=mysqli_fetch_object($result))
				 {
				 $cname=($idsh->cname);
				 $cont=($idsh->cont);
				 $Brandname=($idsh->Brandname);
				 $Modelno=($idsh->Modelno);
				 $Rate=($idsh->Rate);
				 $Finalrate=($idsh->Finalrate);
				 $date=($idsh->date);
				 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
      @media print{
	    .print{
		display:none;
	    }
        }
.page
{
	  width: 20.5cm;
	 /* min-height: 29.7cm;*/
	  min-height: 28.5cm;
	  border:1px solid #999;
	 /* padding-left:10px;
	  padding-right:10px;*/
	  font-family:Arial, Helvetica, sans-serif;
	  border-radius: 5px;
	  
}
.full
{
	width:100%;
	float:left;
	border-bottom: 1px solid #333;
	height:100px;
}
.left
{
	width:400px;
	float:left;
	border-right:1px solid #333;
	height:100px;
}
.right
{
	width:350px;
	float:left;
}

.mdiv
{
	height:800px;
	border-bottom:1px solid #333;
}
</style>
</head>

<body>
<center>  <h3>Quotation</h3> </center>
<div class="page">

<div class="full">
<div class="left">Company Name And Details</div> 
<div class="right">Quotation Id : <?php echo $id ?></div>
</div>

<div class="full">
<div class="left">
<table>
<tr>
<td>Customer Name</td>
<td>:</td>
<td><?php echo $cname ?></td>
</tr>
<tr>
<td>Contact No</td>
<td>:</td>
<td><?php echo $cont ?></td>
</tr>
</table>
</div> 
<div class="right">Date : <?php echo $date ?></div>
</div>
<div class="mdiv">
<table width="100%" height="101" cellspacing="0"style="border-bottom:1px solid #666">
<tr>
<td height="44" style="border-bottom:1px solid #666">Brand Name</td>
<td style="border-bottom:1px solid #666">Modelno</td>
<td style="border-bottom:1px solid #666">Rate</td>
<td style="border-bottom:1px solid #666">Finalrate</td>
</tr>
<tr>
<td><?php echo $Brandname?></td>
<td><?php echo $Modelno?></td>
<td><?php echo $Rate?></td>
<td><?php echo $Finalrate?></td>
</tr>
</table>
</div>
<table width="100%" height="251">
<tr>
<td width="68%" height="212"></td>
<td width="32%" valign="bottom">For Company</td>
</tr>
</table>
</div>

</body>
</html>