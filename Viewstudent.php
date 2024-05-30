<?php
include('Userheader.php');
include_once("config.php");

// Ensure that the user is logged in before displaying the details
if(!isset($_SESSION['login_user'])) {
    header("Location: login.php");
    exit;
}
?>


<div align="center">
    <h1><font color="#FFA500">Personal Details</font></h1>
    <table border="2" cellspacing="6" class="displaycontent" width="1200" style="border:10px solid #FFA500;">
        <tr>
            <th bgcolor="Black"><font color="white" size="2">Name</font></th>
            <th bgcolor="Black"><font color="white" size="2">User Id</font></th>
            <th bgcolor="Black"><font color="white" size="2">Password</font></th>
            <th bgcolor="Black"><font color="white" size="2">Email id</font></th>
            <th bgcolor="Black"><font color="white" size="2">Address</font></th>
            <th bgcolor="Black"><font color="white" size="2">Mobile</font></th>
            <th bgcolor="Black"><font color="white" size="2">DOB</font></th>
            <th bgcolor="Black"><font color="white" size="2">Age</font></th>
        </tr>
        
        <?php
        $query = "SELECT * FROM student WHERE email_id='".$_SESSION['mail']."'";
        $result = mysql_query($query) or die(mysql_error());
        while($row = mysql_fetch_assoc($result)) {
        ?>
        
        <tr>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['fname']; ?></font></td>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['Uid']; ?></font></td>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['Pwd']; ?></font></td>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['email_id']; ?></font></td>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['address']; ?></font></td>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['mobile']; ?></font></td>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['DOB']; ?></font></td>
            <td bgcolor="white"><font color="#000000" size="2"><?php echo $row['Age']; ?></font></td>
        </tr>
        
        <?php } ?>
    </table>
</div>

<?php include('footer.php'); ?>
