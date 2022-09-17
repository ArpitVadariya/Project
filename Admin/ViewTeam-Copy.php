<?php

    include 'Config.php';

    error_reporting(0);

    session_start();


    // $teamdisplay = "SELECT * FROM staff";
    // $result1 = mysqli_query($conn, $teamdisplay);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Team</title>
    <?php include 'Links.php'; ?>
    <link rel="stylesheet" href="navstyle.css">
</head>
<body>
    <header class="header">

      <?php include 'navbar.php'; ?>
      
    </header>
      
    <?php include 'ViewTeam.php'; ?>


</body>
</html>