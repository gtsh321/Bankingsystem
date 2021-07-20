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

 <?php

include 'money.php';

$ids = $_GET['id'];

$showquery = "SELECT * FROM `transactionhistory` WHERE ID=$ids ";
$showdata = mysqli_query($con, $showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])) {

  $idupdate = $_GET['id'];

$sent = $_POST['accno'];
$receiver = $_POST['accnu'];
$amo = $_POST['amount'];

//$insertquery = "INSERT INTO `transactionhistory`(`Sender's Account`, `Receiver's Account`, `Amount`) values('[$sent]', '[$receiver]', '[$amo]')";
  
  $query = "UPDATE `transactionhistory` SET `ID`='$ids',`Sender's Account`=$sent,`Receiver's Account`=$receiver,`Amount`=$amo WHERE ID=$idupdate ";




  $res = mysqli_query($con, $query);


if($res){
  ?>
  <script>
    alert("Data updated properly");
    
  </script>

  <?php
}else{
  ?>
  <script>
  alert("Data not updated");
    
  </script>

  <?php
}

}

?>

 <div class="form-group">
 <label>Sender Account Number </label>
 <input type="text" class="form-control" id="accno" placeholder="Enter account number" name="accno" value="<?php echo $arrdata["Sender's Account"]; ?>" required/>
</div>

<div class="form-group">
 <label>Receiver Account Number</label>
 <input type="text" class="form-control" id="accnu" placeholder="Enter account number" name="accnu" value="<?php echo $arrdata["Receiver's Account"]; ?>" required/>
</div>

<div class="form-group">
 <label>Amount</label>
 <input type="text" class="form-control" id="amount"  name="amount" value="<?php echo $arrdata["Amount"]; ?>" required/>
</div>

<button type="submit" name="submit" class="btn btn-primary mb-2">Update</button>
</form>

</div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

