<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
<!--Navbar--->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="logo.png" width="40" height="30" class="d-inline-block align-top" alt="">The Sparks Foundation Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/" target='_blank'>About</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Our Customers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="viewcustomer.php">Customers</a>
          <a class="dropdown-item" href="transfer.php">Transfer Money</a>
          <a class="dropdown-item" href="transferhistory.php">Transaction's History</a>
        </div>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
      
      
    </ul>
   
  </div>
</nav>




<div class='container py-5 text-center'>
<h1 class="pt-3"><u>Customers Information</u></h1>
<table class="table mt-5">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Current Balance</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>22</td>
      <td>mark_11@gmail.com</td>
      <td>20000</td>
      <td>87666133450</td>
      <td>Delhi</td>
      <td><a class="btn btn-primary" href="view1.php" role="button">View</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>25</td>
      <td>jacob_81@gmail.com</td>
      <td>45000</td>
      <td>95634777888</td>
      <td>Haryana</td>
      <td><a class="btn btn-primary" href="view2.php" role="button">View</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>23</td>
      <td>larry_88@gmail.com</td>
      <td>9000</td>
      <td>09888557800</td>
      <td>Chennai</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
    <th scope="row">4</th>
      <td>Tod</td>
      <td>31</td>
      <td>tod_l1@gmail.com</td>
      <td>78000</td>
      <td>28900008751</td>
      <td>Delhi</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
    <th scope="row">5</th>
      <td>Jerry</td>
      <td>26</td>
      <td>jerry211@gmail.com</td>
      <td>100000</td>
      <td>87252600339</td>
      <td>Hydrabad</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
    <th scope="row">6</th>
      <td>Pooh</td>
      <td>29</td>
      <td>pooh_11@gmail.com</td>
      <td>850000</td>
      <td>87544567890</td>
      <td>Orrisa</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
    <th scope="row">7</th>
      <td>Kally</td>
      <td>27</td>
      <td>kelp1@gmail.com</td>
      <td>770000</td>
      <td>75122343000</td>
      <td>Punjab</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
    <th scope="row">8</th>
      <td>Tom</td>
      <td>26</td>
      <td>tomil1@gmail.com</td>
      <td>900000</td>
      <td>89267737330</td>
      <td>Delhi</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
    <th scope="row">9</th>
      <td>Clara</td>
      <td>29</td>
      <td>claram1@gmail.com</td>
      <td>540000</td>
      <td>89777654430</td>
      <td>Assam</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
    <th scope="row">10</th>
      <td>Yuvi</td>
      <td>30</td>
      <td>yuvi99@gmail.com</td>
      <td>990000</td>
      <td>776664448897</td>
      <td>Haryana</td>
      <td><a class="btn btn-primary" href="#" role="button">View</a></td>
    </tr>
  </tbody>
</table>
</div>



<footer>
<div class="footer-copyright text-center py-3">© 2021 The Sparks Foundation. All Rights Reserved | Design by GEETESH</a>
  </div>
  <!-- Copyright -->
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
