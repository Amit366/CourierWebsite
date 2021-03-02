<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AGA_Courier";
$subscriber_email = $_POST['subscriber_email'];
$subscriber_password = $_POST['subscriber_password'];
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

$sql = "INSERT INTO user_description (subscriber_fname,subscriber_lname,subscriber_email, subscriber_gender, subscriber_city, subscriber_country, subscriber_password)
VALUES ('$subscriber_fname','$subscriber_lname','$subscriber_email','$subscriber_gender','$subscriber_city','$subscriber_country','$subscriber_password')";
if ($conn->query($sql) === TRUE) {

	echo "<script>
    alert('Registered Successfuly');
    window.location.href='loginAGA.php';
    </script>";
  
 } 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
