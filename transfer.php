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

<div class="container">
<h1 class="py-5 text-center">Money Transfer</h1>
 <div class="row">
 <div class="col-lg-6">
 
 <form action="" method="POST" >
 <div class="form-group">
 <label>Sender Account Number </label>
 <input type="text" class="form-control" id="accno" placeholder="Enter account number" name="accno" required>
</div>

<div class="form-group">
 <label>Receiver Account Number</label>
 <input type="text" class="form-control" id="accnu" placeholder="Enter account number" name="accnu" required>
</div>

<div class="form-group">
 <label>Amount</label>
 <input type="text" class="form-control" id="amount"  name="amount" required>
</div>

<button type="submit" name="submit" class="btn btn-primary mb-2">Transfer</button>
</form>

</div>
</div>
</div>


<!-- The Modal 
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Are you sure you want to proceed.</label>
  </div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      data-js-validate="true" data-js-highlight-state-msg="true" data-js-show-valid-msg="true"
         Modal Header 
        <div class="modal-header">
          <h4 class="modal-title">Confirmation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
         Modal body 
        <div class="modal-body">
        Are you sure you want to transfer..
        </div>
        
        Modal footer 
        <div class="modal-footer">
          <a href="validation.php" class="btn btn-info" role="button">OK</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
 ---->
<!---role="button"--->


<footer class="py-5">
<div class="footer-copyright text-center py-3">© 2021 The Sparks Foundation. All Rights Reserved | Design by IPSITA </a>
  </div>
  <!-- Copyright -->
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php

include 'money.php';

if(isset($_POST['submit'])) {

$sent = $_POST['accno'];
$receiver = $_POST['accnu'];
$amo = $_POST['amount'];

  $insertquery = "INSERT INTO `transactionhistory`(`Sender's Account`, `Receiver's Account`, `Amount`) values($sent, $receiver, $amo)";
  $res = mysqli_query($con, $insertquery);


if($res){
  ?>
  <script>
    alert("Transaction Successful");
    
  </script>

  <?php
}else{
  ?>
  <script>
  alert("Data not inserted");
    
  </script>

  <?php
}

}

?>