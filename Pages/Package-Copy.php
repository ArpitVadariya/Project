<?php

    include("Config.php");
    
    // $query1 = "select * from bronze";
    // $rsult1 = mysqli_query($conn, $query1);
    // $query2 = "select * from silver";
    // $rsult2 = mysqli_query($conn, $query2);
    // $query3 = "select * from gold";
    // $rsult3 = mysqli_query($conn, $query3);
    // $query4 = "select * from diamond";
    // $rsult4 = mysqli_query($conn, $query4);


    $newquery = "select * from packages";
    $newresult = mysqli_query($conn, $newquery);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SPA Links Starts -->
    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon" /> -->

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" /> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Libraries Stylesheet -->
    <link href="CJ/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="CJ/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="CJ/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="CJ/CSS/Sstyle.css" rel="stylesheet" />

    <!-- SPA Links End -->

    <!-- navigation  Start-->
    <link rel="stylesheet" href="CJ/CSS/navstyle.css" />
    <!-- navigation End -->

    <!-- BS Stylesheet Start -->

    <link rel="stylesheet" href="CJ/CSS/Bstyle.css" />

    <!-- BS Stylesheet End -->
    <title>Packages</title>
  </head>
  <body>

    <?php include 'navbar.php'; ?>
    
    <!-- Start Package Section -->
    
    <?php include 'Package.php'; ?>
    

    <!-- End Package Section -->

    <!-- Footer Section Start -->
    <!-- <a href=""><img src="Images/logo.svg" /></a> -->

    <?php include 'footer.php'; ?>

    <!-- Footer Section End -->

    <!-- JavaScript Libraries -->
    <script src="CJ/js/jquery-3.4.1.min.js"></script>
    <script src="CJ/js/bootstrap.bundle.min.js"></script>
    <script src="CJ/lib/easing/easing.min.js"></script>
    <script src="CJ/lib/waypoints/waypoints.min.js"></script>
    <script src="CJ/lib/counterup/counterup.min.js"></script>
    <script src="CJ/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="CJ/lib/tempusdominus/js/moment.min.js"></script>
    <!-- <script src="CJ/lib/tempusdominus/js/moment-timezone.min.js"></script> -->
    <script src="CJ/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="CJ/js/main.js"></script>

  </body>
</html>
