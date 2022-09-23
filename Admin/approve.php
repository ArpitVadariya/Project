<?php

    include 'Config.php';


    $email = $_GET['email'];

    $approvequery = "UPDATE appointment SET approved='1' WHERE email='$email'";
    $approvequeryresult = mysqli_query($conn, $approvequery);

    if($approvequeryresult){
        echo "<script> alert('approved appointments'); </script>";
        echo "<script> window.location.href='index.php'; </script>";
    }


?>