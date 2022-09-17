<?php

// echo "DELETED SERVICE PAGE";

include 'Config.php';

    error_reporting(0);

    session_start();

    $service_name = $_GET['service_name'];
    $imagepath = $_GET['image'];
    // echo $service_name;
    // echo $imagepath;
    

    $deleteservicequery = "DELETE FROM services WHERE imagepath='$imagepath'";

    $deleteresultservice = mysqli_query($conn, $deleteservicequery);

    if($deleteresultservice){
        echo '<script>alert("Service Deleted Successfully")</script>';
        echo '<script> window.location.href="index.php"; </script>';
        // header("Location: ViewTeam-Copy.php");
    }
    


?>