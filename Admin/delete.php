<?php

    include 'Config.php';

    error_reporting(0);

    session_start();

    $email = $_GET['email'];
    $position = $_GET['position'];
    // echo $email;
    // echo $position;
    
    if($position == "admin"){
        echo "<br>";
        // echo "Admin";
        echo '<script>alert("admin can not be deleted")</script>';
        echo '<script> window.location.href="index.php"; </script>';
    } else{
        echo "<br>";
        // echo "Staffmember";
        $deletequerystaff = "DELETE FROM staff WHERE email='$email'";
        $deletequeryteam = "DELETE FROM team WHERE email='$email'";

        $deleteresultstaff = mysqli_query($conn, $deletequerystaff);
        $deleteresultteam = mysqli_query($conn, $deletequeryteam);

        if($deleteresultstaff && $deleteresultteam){
            echo '<script>alert("Deleted Successfully")</script>';
            echo '<script> window.location.href="index.php"; </script>';
            // header("Location: ViewTeam-Copy.php");
        }
    }

?>