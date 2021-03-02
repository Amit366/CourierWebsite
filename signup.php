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
    <link href="style.css" rel="stylesheet">

    
    <title>A.G.A sign up page</title>
  </head>
  <body>

    <!-- 1.Navigation-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="font-family: Aguafina Script">A.G.A Courier Services</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="indexAGA.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginAGA.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

    </ul>
    
  </div>
</nav>

  <!-- sign up-->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br> 
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
  <a href="loginAGA.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
  <h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action="signData.php" method="POST">
  <div class="form-row">
    <div class="col form-group">
      <label for="subscriber_fname">First name </label>   
        <input type="text" name="subscriber_fname" class="form-control" placeholder="First name">
    </div> <!-- form-group end.// -->
    <div class="col form-group">
      <label for="subscriber_lname">Last name</label>
        <input type="text" name="subscriber_lname" class="form-control" placeholder="Last name">
    </div> <!-- form-group end.// -->
  </div> <!-- form-row end.// -->
  <div class="form-group">
    <label for="subscriber_email">Email address</label>
    <input type="email" name ="subscriber_email" class="form-control" placeholder="">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> <!-- form-group end.// -->
  <div class="form-group">
      <label for="subscriber_gender" class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="subscriber_gender" value="option1">
      <span class="form-check-label"> Male </span>
    </label>
    <label for="subscriber_gender" class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="subscriber_gender" value="option2">
      <span class="form-check-label"> Female</span>
    </label>
  </div> <!-- form-group end.// -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="subscriber_city">City</label>
      <input type="text" name="subscriber_city" class="form-control">
    </div> <!-- form-group end.// -->
    <div class="form-group col-md-6">
      <label for="subscriber_country">Country</label>
      <select id="inputState" name="subscriber_country" class="form-control">
        <option> Choose...</option>
          <option>Uzbekistan</option>
          <option>Russia</option>
          <option selected="">United States</option>
          <option>India</option>
          <option>Afganistan</option>
      </select>
    </div> <!-- form-group end.// -->
  </div> <!-- form-row.// -->
  <div class="form-group">
    <label for="subscriber_password">Create password</label>
      <input class="form-control" name="subscriber_password" type="password">
  </div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="loginAGA.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">A.G.A Courier Services</h3>
<p class="h5 text-white">Services <br> for Ecommerce, marketplace</p>   <br>

</div>
<br><br>
</article>