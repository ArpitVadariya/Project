<?php
    include 'Config.php';

    // $teamquery = "select * from team";
    // $teamresult = mysqli_query($conn, $teamquery);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'Links.php'; ?>
  </head>
  <title>About Us</title>
  <body>
    <!-- Header Start -->
    <!-- Navigation Bar Start -->
    <header class="header" id="header">
      <?php include 'navbar.php'; ?>
    </header>
    <!-- Navigation Bar End -->
    <!-- Header End -->

    <!-- Start About Section -->
    <!-- Team Start -->

      <?php include 'About.php'; ?>
    
    <!-- Team End -->
    <!-- End About Section -->

    <?php include 'footer.php'; ?>

  </body>
</html>
