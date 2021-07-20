<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.php">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


<div class="main-div">
    <h1 class="py-5 text-center">Transaction History</h1>
    <div class="center-div">
    <div class="table-responsive">
    <table>
    <thead>
        <tr>
          <th>ID</th>
          <th>Sender's Account</th>
          <th>Receiver's Account</th>
          <th>Amount</th>
          <th colspan="2">Operation</th>
        </tr>
    </thead>

    <tbody>
    <?php

        include 'money.php';

        $selectquery = "SELECT * FROM `transactionhistory`";

        $query = mysqli_query($con, $selectquery);

        $nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
    ?>

   <tr>
    <td><?php echo $res['ID']; ?></td>
    <td><?php echo $res["Sender's Account"]; ?></td>
    <td><?php echo $res["Receiver's Account"]; ?></td>
    <td><?php echo $res['Amount']; ?></td>
   <td><a href="update.php?id=<?php echo $res['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
    <td><a href="delete.php?id=<?php echo $res['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
   </tr>

<?php
}

?>

        
    
    </tbody>
</table>
</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>