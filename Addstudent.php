
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
<h2>Add New Student</h2>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="350" height="350">
	
	
	<tr>
		<td class="col" style="color: #000000">Name:</td>
		<td><input type="text" name="first_name"  value=""  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">User ID:</td>
		<td><input type="text" name="U_name" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Password:</td>
		<td><input type="password" name="pwd" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Email:</td>
		<td><input type="text" name="email_id" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	
	<tr>
		<td class="col"  style="color: #000000">Address:</td>
		<td><input type="text" name="address" value=""  style="color: #000000" class="required"  /></td>
	</tr>

	<tr>
		<td class="col"  style="color: #000000"  >Mobile:</td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="mobile" value="" style="color: #000000" /></td>
	</tr>
	
	<tr>
		<td class="col"  style="color: #000000"  >DOB:</td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="dob" value="" style="color: #000000" /></td>
	</tr>
	<tr>
		<td class="col"  style="color: #000000"  >Age:</td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="age" value="" style="color: #000000" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1><font color="#FFA500">Student Details</font></h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #FFA500;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>Name</font></th>
			<th bgcolor=Black><font color=white size=2>User Id</font></th>
			<th bgcolor=Black><font color=white size=2>Password</font></th>
			<th bgcolor=Black><font color=white size=2>Email id</font></th>
			<th bgcolor=Black><font color=white size=2>Address</font></th>
			<th bgcolor=Black><font color=white size=2>Mobile</font></th>
			<th bgcolor=Black><font color=white size=2>DOB</font></th>
			<th bgcolor=Black><font color=white size=2>Age</font></th>
			 <th bgcolor=Black><font color=white size=2>Delete</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from student";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['fname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Pwd']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['email_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['address']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['mobile']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['DOB']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Age']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><a href="?delete=<?php echo $row['Uid'];?>">Delete</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `student`"; 
	$query .= " VALUES ('".$_POST['first_name']."', '".$_POST['U_name']."','".$_POST['pwd']."', '".$_POST['email_id']."', '";
	$query .=  $_POST['address']."', '".$_POST['mobile']."','".$_POST['dob']."','".$_POST['age']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Addstudent.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from student where Uid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Addstudent.php");
	exit;
	}
include('footer.php');
?>
 

