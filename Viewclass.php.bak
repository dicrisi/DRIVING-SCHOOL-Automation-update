
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
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1><font color="#FFA500">Class Schedules</font></h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #FFA500;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>ID</font></th>
			<th bgcolor=Black><font color=white size=2>Student Id</font></th>
			<th bgcolor=Black><font color=white size=2>Student Name</font></th>
			<th bgcolor=Black><font color=white size=2>Date</font></th>
			<th bgcolor=Black><font color=white size=2>Time</font></th>
			<th bgcolor=Black><font color=white size=2>Vehicle Number</font></th>
			<th bgcolor=Black><font color=white size=2>Instructor Id</font></th>
			<th bgcolor=Black><font color=white size=2>Instructor Name</font></th>
			
			  
	</tr>
	
	<?php
	
	$query = "select * from classtbl where Studentid='".$_SESSION['mail']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Studentid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Sname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Classdate']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Classtime']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Vnumber']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Instructorid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Iname']; ?></font></td>
			
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>




<?php
include('footer.php');
?>
 

