<?php
session_start();
$servername = "sql204.epizy.com";
$username = "epiz_28784356";
$password = "voeq88MJWa";
$dbname = "epiz_28784356_courierwebservice";
$email=$_POST['subscriber_email'];
$espassword=$_POST['subscriber_password'];
$subscriber_fname=$_POST['subscriber_fname'];
$subscriber_lname=$_POST['subscriber_lname'];
$subscriber_gender=$_POST['subscriber_gender'];
$subscriber_city=$_POST['subscriber_city'];
$subscriber_country=$_POST['subscriber_country'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM user_description WHERE subscriber_email='$email' && subscriber_password='$espassword'";
$result = $conn->query($sql);
$num =mysqli_num_rows($result);
if($num==1)
 {  
    $_SESSION['ema']=$email;
    $_SESSION['pass']=$espassword;
	echo "<script>
    alert('Login Successfully');
    window.location.href='indexAGA.html';
    </script>";

 }
else
 {
	echo "<script>
    alert('Error');
    window.location.href='loginAGA.html';
    </script>";
 }
 $conn->close();
?>
