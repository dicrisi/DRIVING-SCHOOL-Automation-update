
<?php
include_once("config.php");
include('Userheader.php');
error_reporting(0);

$query2 = "select * from payment where P_id=".$_GET['Add']."";
		//	echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
		}	

?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#Order_form").validate();
  });
</script>
<form action="UserPaid.php" name="UserPaid_form"  id="UserPaid"  method="GET">
	</br>	</br>	</br>	</br>
	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="400">
	<caption></caption>
	
	<center>
	<tr>
		<th colspan="2" style="color: #000000">Payment Details</th>
		<br>
	<tr>
	</center>
	<tr>
		<td class="col" style="color: #000000">Payment id:</td>
		<td><input type="text" name="pno"  value="<?php echo $row['P_id'] ?>"  style="color: #000000" /></td>
	</tr>

	
	<tr>
		<td class="col" style="color: #000000">Student id:</td>
		<td><input type="text" name="Aheading" value="<?php echo $row['Studentid'] ?>"  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Name:</td>
		<td><input type="text" name="Acaption" value="<?php echo $row['Sname'] ?>"  style="color: #000000" class="required"  /></td>
	</tr>
			<tr>
		<td class="col" style="color: #000000">Amount:</td>
		<td><input type="text" name="Uname" Value="<?php echo $row['Amount'] ?>"   style="color: #000000"  class="required" /></td>
	</tr>
		
		</tr>
		<tr>
		<td class="col" style="color: #000000">Payment Status:</td>
		<td><input type="text" name="psta" value="Paid"  style="color: #000000"  class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Payment Date:</td>
		<td><input type="text" name="pdate" value="<?php echo date("d-m-Y");?>"  style="color: #000000"  class="required" /></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Pay"  style="color: #000000"/>
		     
		</td>
	</tr>

	
		
	
	</table>

	</form>
</div>


<?php

 //include_once("config.php");  



 if(isset($_GET['register']))
	 {
	 	         		       
	$query = "update payment set Status='".$_GET['psta']."',Pdate='".$_GET['pdate']."' where P_id='".$_GET['pno']."'";
       
  // echo $query;
	if(mysql_query($query))
		{
		
		 echo '<script> alert("UPDATE SUCCESSFULLY");</script>';


	}
	else
		{
		echo 'NOT REGISTERD';
		}
	header("location:Viewpayment.php");
//exit;
 
 }

?>

<?php
include('footer.php');
?>
 

