
<?php
include('Adminheader.php');
include_once("config.php");  
?>


<div align="center">




<form action="" name="register"  id="register" method="post">
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
	<br>
<table>
<tr>
<td>
<h2>Add Payment</h2>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="350" height="300">
	
	
	<tr>
		<td class="col" style="color: #000000">Student id:</td>
		<td>

 <select name="sid" onchange="getUserInfo(this.value)" > 
	<option><strong>--SELECT--</strong></option> 
<?php $a = array() ;
	  $a['Uid'] = '';
	  	 $goods_query=mysql_query("select * from student") or die(mysql_error());
                                while($fetch_goods_id=mysql_fetch_array($goods_query))
                                {
                                  echo '<option value="'.$fetch_goods_id['Uid'].'">';;
                                    echo $fetch_goods_id['Uid'].'<br/>'; 
                                    echo ' </option>';
									if(isset($_GET['Uid']) && $_GET['Uid']==$fetch_goods_id['Uid']){
									  $a = $fetch_goods_id;
									  
									
									}
								}

?> 
</select>
</td>

	</tr>
<tr>
		<td class="col" style="color: #000000">Class:</td>
		<td><select name="Roll">
    <option value="Two Wheeler">Two Wheeler</option>
    <option value="Four Wheeler">Four Wheeler</option>
   
</select></td>
	</tr>
	
	<tr>
	<tr>
		<td class="col" style="color: #000000">Amount:</td>
		<td><input type="text" name="t2" value=""  style="color: #000000" class="required" /></td>
	</tr>
	
	
	
	
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Add"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1><font color="#FFA500">Payment Details</font></h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #FFA500;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>ID</font></th>
			<th bgcolor=Black><font color=white size=2>Student Id</font></th>
			<th bgcolor=Black><font color=white size=2>Student Name</font></th>
			<th bgcolor=Black><font color=white size=2>Class</font></th>
			<th bgcolor=Black><font color=white size=2>Amount</font></th>
			<th bgcolor=Black><font color=white size=2>Status</font></th>
			<th bgcolor=Black><font color=white size=2>Date</font></th>
			<th bgcolor=Black><font color=white size=2>Delete</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from payment";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['P_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Studentid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Sname']; ?></font></td>

		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Class']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Amount']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Status']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Pdate']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><a href="?delete=<?php echo $row['P_id'];?>">Delete</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {

	$query ="select fname from student where Uid='".$_POST['sid']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	$row = mysql_fetch_assoc($result);
		$sname = $row['fname'];
	
		

		}
	 	   
	$query = "INSERT INTO `payment`"; 
	$query .= " VALUES ('null','".$_POST['sid']."','$sname', '".$_POST['Roll']."','".$_POST['t2']."', 'Pending', 'Null')";
        echo $query;
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
		
	else{
		echo 'NOT REGISTERD';
	}
		
	header("location:Addpayment.php");
exit;
 
 }

?>




<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from payment where P_id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Addpayment.php");
	exit;
	}
include('footer.php');
?>
 

