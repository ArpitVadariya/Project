<?php

  include 'Config.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <?php include 'Links.php'; ?>
    <link rel="stylesheet" type="text/css" href="navstyle.css" />
  </head>
  <body>

      <?php include 'navbar.php'; ?>
      
      <h1 style="text-align:center;">Appointments</h1>

      <?php include 'appointments.php'; ?>

      <br>
      <br>
      <br>
      
  </body>
</html>