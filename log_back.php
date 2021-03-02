<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AGA_Courier";
$email=$_POST['subscriber_email'];
$espassword=$_POST['subscriber_password'];

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
	
	echo "<script>
    alert('Login Successfully');
    window.location.href='indexAGA.php';
    </script>";

 }
else
 {
	echo "<script>
    alert('Error');
    window.location.href='loginAGA.php';
    </script>";
 }
?>
