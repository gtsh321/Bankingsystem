<?php

$password = "";
$db = 'history';

$con = mysqli_connect('localhost','root', $password, $db);

if($con){
    //echo "connection successful";
    ?>
    <script >
        alert('connection successful');
    </script>
    <?php
}else {
    echo "no connection";
}

//$db =mysqli_select_db($con, 'history');

//$acc = $_POST['accno'];
//$accn = $_POST['accnu'];
//$am = $_POST['amount'];


//$q = "select * from moneytransfer where account_numbersent = '$acc' && account_numberreceived = '$accn' && amount = '$am'";

//$result = mysqli_query($con, $q);    

//$num = mysqli_num_rows($result);

/*if($num ==1){
    echo "duplicate data";
}else{
    $qy = "insert into moneytransfer(account_numbersent, account_numberreceived, amount) values('$acc', $accn, $am)";
    mysqli_query($con, $qy);
}*/




?>