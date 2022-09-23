<?php

    include 'Config.php';


    $email = $_GET['email'];

    $approvequery = "DELETE FROM appointment WHERE email='$email'";
    // $approvequery = "UPDATE appointment SET approved='0' WHERE email='$email'";
    $approvequeryresult = mysqli_query($conn, $approvequery);

    if($approvequeryresult){
        echo "<script> alert('appointment cancel'); </script>";
        echo "<script> window.location.href='index.php'; </script>";
    }


?>