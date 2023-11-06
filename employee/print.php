<?php 
include_once('connect.php');
error_reporting(0);
$id=$_GET['edit_id'];

/*$sql = "SELECT * FROM bill WHERE b_id ='$b_ida'";
         $result = mysqli_query($conn, $sql);
		while($idsh = mysqli_fetch_object($result))
	{
		$date=($idsh->date);
		$date = date("d-m-Y", strtotime($date));
		$bill_amount=($idsh->bill_amount);
		$purchase_type=($idsh->purchase_type);
		$cash_amt=($idsh->cash_amt);
		$other_method=($idsh->other_method);
		$other_amt=($idsh->other_amt);
		$gstamt=($idsh->gstamt);
		
		$sgstamt=($idsh->sgstamt);
		$cgstamt=($idsh->cgstamt);
		
		$final_amt=($idsh->final_amt);
		$cust_name=($idsh->cust_name);
		$Cont=($idsh->Cont);
		$address=($idsh->address);
		$other=($idsh->other);
	}*/
	
	function AmountInWords(float $amount)
{
   $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
   // Check if there is any number after decimal
   $amt_hundred = null;
   $count_length = strlen($num);
   $x = 0;
   $string = array();
   $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
     3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
     7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
     10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
     13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
     16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
     19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
     40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
     70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $here_digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $x < $count_length ) {
      $get_divider = ($x == 2) ? 10 : 100;
      $amount = floor($num % $get_divider);
      $num = floor($num / $get_divider);
      $x += $get_divider == 10 ? 1 : 2;
      if ($amount) {
       $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
       $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
       $string [] = ($amount < 21) ? $change_words[$amount].' '. $here_digits[$counter]. $add_plural.' 
       '.$amt_hundred:$change_words[floor($amount / 10) * 10].' '.$change_words[$amount % 10]. ' 
       '.$here_digits[$counter].$add_plural.' '.$amt_hundred;
        }
   else $string[] = null;
   }
   $implode_to_Rupees = implode('', array_reverse($string));
   $get_paise = ($amount_after_decimal > 0) ? "And " . ($change_words[$amount_after_decimal / 10] . " 
   " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
   return ($implode_to_Rupees ? $implode_to_Rupees . 'Rupees ' : '') . $get_paise;
}

$amt_words=$final_amt;
//$get_amount= AmountInWords(4);
 //echo $get_amount;
 $get_amount= AmountInWords("$amt_words");
 //$get_amount('5000');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bill Print</title>



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
}

.bb
{
	border-bottom:1px solid #666;
}
.bl
{
	border-left:1px solid #666;
}
.fonts
{
	font-size:14px;
}
.fontsa
{
	font-size:14px;
}

.rowa
{
	width:100%;
	/*background-color:#993;*/
}
.srno
{
	width:7%;
	float:left;
	text-align:center;
	height:25px;
	border-bottom:1px solid #666;
}
.type{
	width:10%;
	float:left;
	text-align:center;
	height:25px;
	border-bottom:1px solid #666;
	border-left:1px solid #666;
	
}
.details
{
	width:26%;
	float:left;
	text-align:center;
	height:25px;
	border-bottom:1px solid #666;
	border-left:1px solid #666;
}
.qty
{
	width:5%;
	float:left;
	text-align:center;
	height:25px;
	border-bottom:1px solid #666;
	border-left:1px solid #666;
	
}
.srnoa
{
	width:7%;
	/*background-color:#9F0;*/
	float:left;
	height:391px;
	border-right:1px solid #666;
	text-align:center;
}
.typea
{
	width:10%;
	/*background-color:#9F0;*/
	float:left;
	height:391px;
	border-right:1px solid #666;
	text-align:center;
	
}
.typex
{
	width:10%;
	/*background-color:#9F0;*/
	float:left;
	height:391px;
	/*border-right:1px solid #666;*/
	text-align:center;
	
}

.detailsa
{
	width:26%;
	/*background-color:#699;*/
	float:left;
	text-align:center;
	height:391px;
	border-right:1px solid #666;
}
.qtya
{
	width:5%;
	/*background-color:#9F0;*/
	float:left;
	height:391px;
	border-right:1px solid #666;
	text-align:center;
}


</style>
</head>
<body>
<?php echo $id ?>
</body>
</html>