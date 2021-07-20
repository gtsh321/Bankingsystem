<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
<!--Navbar--->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="logo.png" width="40" height="30" class="d-inline-block align-top" alt="">TSF BANK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/" target='_blank'>About Us</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        View all Customers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="viewcustomer.php">Customers</a>
          <a class="dropdown-item" href="transfer.php">Transfer Money</a>
          <a class="dropdown-item" href="transferhistory.php">Transaction's History</a>
        </div>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      
    </ul>
   
  </div>
</nav>





<div class='container'>
<h1 class="py-5 text-center">Customers Details</h1>
</div>


<div class="container border border-secondary">
   
  <div class="clearfix py-md-5">
    <div class="float-sm-left "><span class="font-weight-bold">Name</span>: Mark</div><br>
    <div class="float-md-left "><span class="font-weight-bold">Age</span>: 22</div><br>
    <div class="float-md-right "><img src="customer.png" class="rounded-circle" alt="Cinque Terre" width="204" height="156"></div>
    <div class="float-lg-leftt"><span class="font-weight-bold">Email</span>: mark_11@gmail.com</div><br>
    <div class="float-lg-left"><span class="font-weight-bold">Current Balance</span>: 20000</div><br>
    <div class="float-xl-left"><span class="font-weight-bold">Mobile Number</span>: 87666133450</div><br>
    <div class="float-xl-left"><span class="font-weight-bold">Address</span>: Delhi</div><br>
    <div class="float-none py-md-2"><a class="btn btn-primary" href="transfer.php" role="button">Transfer Money</a></div>
  </div>
  </div>


<footer class="py-5">
<div class="footer-copyright text-center py-3">© 2021 The Sparks Foundation. All Rights Reserved | Design by IPSITA </a>
  </div>
  <!-- Copyright -->
</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</head>