<?php
include("config.php");
include("header.php");
include_once('phpmailer/class.smtp.php');
include_once('phpmailer/class.pop3.php');
include_once('email.class.inc.php');

if(isset($_POST['login'])) {
    $query ="SELECT * FROM student WHERE email_id='".$_POST['email_id']."' AND Pwd ='".$_POST['password']."'";

    $result = mysql_query($query);
    if(mysql_num_rows($result)) {
        $row = mysql_fetch_assoc($result);
        $umail_student = $_POST['email_id'];
        $_SESSION['login_user'] = $row['fname'];
		$_SESSION['mail'] = $row['email_id'];
        
        // Send email to student
        $email_student = new Email();
        $email_student->set_from($configVars['my_email']);
        $email_student->set_from_name('Driving School Alert');
        $email_student->set_subject("Students Login Details");
        $email_student->set_message("Hi, your  login in our Driving School  website");
        $email_student->add_to($umail_student);
        $sent_flag_student = $email_student->send();

        if (!$sent_flag_student) {
            echo '<script> alert("Failed to send email to student."); </script>';
        }

        // Send email to instructors
        $query_instructors = "SELECT email_id FROM instructor";
        $result_instructors = mysql_query($query_instructors);
        while($row_instructor = mysql_fetch_assoc($result_instructors)) {
			$name=$_SESSION['login_user'];
            $umail_instructor = $row_instructor['email_id'];
            $email_instructor = new Email();
            $email_instructor->set_from($configVars['my_email']);
            $email_instructor->set_from_name('Driving School Alert');
            $email_instructor->set_subject("New Student Login Details");
            $email_instructor->set_message("Hi, a student $name just logged in our Driving School website ");
            $email_instructor->add_to($umail_instructor);
            $sent_flag_instructor = $email_instructor->send();

            if (!$sent_flag_instructor) {
                echo '<script> alert("Failed to send email to instructor."); </script>';
            }
        }

        echo '<script> alert("Login success. Emails sent to student and instructors."); window.location.href = "Userhome.php" </script>';
    } else {
        echo '<script> alert("Login failed");</script>';
    }
}
?>



<div align="center">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Your CSS styles here */
    </style>

    <form action="" enctype="multipart/form-data" name="login_form" id="login_form" method="post">
        <div class="imgcontainer">
            Student Login
        </div>

        <div class="container">
            <table class="displaycontent" width="400" height="120">
                <tr>
                    <td><label for="uname"><b>User id</b></label></td>
                    <td><input type="text" placeholder="Enter Username" name="email_id" required></td>
                </tr>

                <tr>
                    <td><label for="psw"><b>Password</b></label></td>
                    <td><input type="password" placeholder="Enter Password" name="password" required></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="login" value="Login" style="color: #000000"/>


        </div>
    </form>

    <br>
    <?php include("footer.php")?>


</div>
</div>
