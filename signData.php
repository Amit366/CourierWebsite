<?php
$servername = "sql204.epizy.com";
$username = "epiz_28784356";
$password = "voeq88MJWa";
$dbname = "epiz_28784356_courierwebservice";
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
    alert('Registered Successfully');
    window.location.href='loginAGA.html';
    </script>";
  
 } 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
