
<?php
include('Userheader.php');
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
			<th bgcolor=Black><font color=white size=2>Select</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from payment where Studentid='".$_SESSION['mail']."'";
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
		<td bgcolor=white><font color=#000000 size=2><a href="UserPaid.php?Add=<?php echo $row['P_id'];?>">Payment</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>



<?php


include('footer.php');
?>
 

