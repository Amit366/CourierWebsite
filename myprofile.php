<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .navbar{
               color: white;
            background-color: #101E42;
            height: 100PX;

           }
           .logo{/*border:2px solid red;*/
                display: inline-block;
            position: absolute;
            left: 70px;
            top: auto;
           }
           .logopic{
               height: 50%;
               width: 50%;
           }
           .content{/*border: 2px solid green;*/
            position: relative;
            display: block;
            width: 50%;
            top: 30px;
            margin-left: auto;
            margin-right: auto;
            

           }
           .options{
            display: block;
            margin-left: 70px;
            color: white;

           }
           .options li{
            
               display: inline-block;
               padding-right: 34px;
               margin-left: auto;
               font-size: 20px;
           }
           .options li a{
            color: white;
        text-decoration: none;

           }
           .options li a:hover{
               text-decoration: underline;
           }
           
            .profile a{/*border: 2px solid pink;*/
                display: inline-block;
            position: absolute;
            right: 90px;
            top: 60px;
            font-size: 20px;
            color: white;
            
            }
            .profile a:hover{
            	text-decoration: underline;
            }
            /*.profile_pic{
            	display: inline-block;
            position: absolute;
            
            top: auto;
            height: 20%;
               
            }*/


    </style>
    <title>My Profile</title>
  </head>
  <body>

    

  <!-- 1.Navigation-->
  <header class="navbar">
    <div class="logo">
        <img src="logo1.png" alt="logo" class="logopic">
       
           
       
    </div>
    <div class="content">
        <ul class="options">
        <li><a href="indexAGA.html">Home</a></li>
        <li><a href="indexAGA.html#foo">About us</a></li>
        <li><a href="order_summary.php">Order Details</a></li>
        <li><a href="#">Contact Us</a></li>


        </ul>
    </div>
    <div class="profile">

          <a href="myprofile.php">My Profile</a> 
    </div>
</header>
 <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aga_courier";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user_description WHERE subscriber_email = '".$_SESSION['ema']."' && subscriber_password='".$_SESSION['pass']."'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
	while($row = mysqli_fetch_assoc($result)){

 ?>      
      <div class="wrapper">
         <h2 style="text-align: center; margin-top: 50px;">My Profile</h2>
      <?php
         echo "<div style='text-align: center'>
               <img class='profile_image' height=110 width=120 src='profile_pic.png'>
               </div>";
		
	 ?>
	 <div style="text-align: center;"><b>Welcome,</b>
	 <h3 style="margin-bottom: 30px">
	 	<?php echo $row["subscriber_fname"]; ?>
	 </h3> 
	</div>
	 <?php

	   echo "<table class='table' style='text-align: center'>";
         echo "<tr>";
          echo "<td>";
            echo "<b> First Name: </b>";
          echo "</td>";
            echo "<td>";
              echo $row["subscriber_fname"];
           echo "</td>";
         echo "</tr>";
         echo "<tr>";
          echo "<td>";
            echo "<b> Last Name: </b>";
          echo "</td>";
            echo "<td>";
              echo $row["subscriber_lname"];
           echo "</td>";
         echo "</tr>";
         echo "<tr>";
          echo "<td>";
            echo "<b> Email: </b>";
          echo "</td>";
            echo "<td>";
              echo $row["subscriber_email"];
           echo "</td>";
         echo "</tr>";
           
         echo "<tr>";
           echo "<td>";
             echo "<b> Gender: </b>";
           echo "</td>";
           echo "<td>";
             echo $row["subscriber_gender"];
           echo "</td>";
         echo "</tr>";

         echo "<tr>";
           echo "<td>";
             echo "<b> City: </b>";
           echo "</td>";
           echo "<td>";
             echo $row["subscriber_city"];
           echo "</td>";
         echo "</tr>";

         echo "<tr>";
           echo "<td>";
              echo "<b> Country: </b>";
           echo "</td>";
           echo "<td>";
              echo $row["subscriber_country"];
           echo "</td>";
         echo "</tr>";

	   echo "</table>";
	   ?>
	  </div>
	  <?php
	}
}
?>
 </body>
</html>
<?php
 ?>
  
