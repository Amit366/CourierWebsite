<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aga_courier";
$email = $_POST['email'];
$pin = $_POST['pin'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$address_1=$_POST['address_1'];
$city=$_POST['city'];
$country=$_POST['country'];
$package_weight=$_POST['package_weight'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ship_details (first_name,last_name,contact, email, address, address_1, city, pin, country, package_weight)
VALUES ('$first_name','$last_name','$contact','$email','$address','$address_1','$city','$pin','$country','$package_weight')";

if($package_weight<0){
	echo "<script>
    alert('Error! package_weight is negative');
    window.location.href='ship.html';
    </script>";
}

$sql = "SELECT * FROM ship_details WHERE email = '".$_SESSION['ema']."'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  echo "<script>
  alert('Thank you');
  window.location.href='order_summary.php';
  </script>";
}
 
else {
    echo "<script>
      alert('Email is not registered');
      window.location.href='ship.html';
      </script>";
}


$conn->close();
?>