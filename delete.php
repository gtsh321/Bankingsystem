<?php 



include 'money.php';

$idt = $_GET['id'];

$deletequery = "DELETE FROM `transactionhistory` WHERE ID=$idt ";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
    <script>
       alert("Deleted Successfully");
    </script>
    <?php
}else{
    ?>
    <script>
       alert("Not Deleted");
    </script>
    <?php
}

//header('location:transferhistory.php');
echo("<script>location.href = 'transferhistory.php';</script>");



?>
