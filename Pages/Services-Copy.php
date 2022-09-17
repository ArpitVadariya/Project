<?php
    include 'Config.php';

    // $query1 = "select * from services";
    // $serviceresult1 = mysqli_query($conn, $query1);
    // $serviceresult2 = mysqli_query($conn, $query1);
    // $serviceresult3 = mysqli_query($conn, $query1);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SPA Links Starts -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- Libraries Stylesheet -->
    <link href="CJ/lib/animate/animate.min.css" rel="stylesheet" />
    <link
      href="CJ/lib/owlcarousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link
      href="CJ/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <!-- this is for slider image hover -->
    <link href="CJ/CSS/Sstyle.css" rel="stylesheet" />

    <!-- SPA Links End -->

    <!-- navigation  Start-->
    <!-- nav bar mate chhe -->
    <link rel="stylesheet" href="CJ/CSS/navstyle.css" />
    <!-- navigation End -->

    <!-- BS Stylesheet Start -->
    <!-- Footer mate chhe -->
    <link rel="stylesheet" href="CJ/CSS/Bstyle.css" />

    <!-- BS Stylesheet End -->
    <title>Services</title>
  </head>
  <body>
    <!-- Navigation Bar Start -->
        <?php include 'navbar.php'; ?>
    <!-- Navigation Bar End -->

    <!-- Service Start -->

    <?php include 'Services.php'; ?>

    <!-- Service End -->

    <!-- Footer Section Start -->
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
    <script src="CJ/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="CJ/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="CJ/js/main.js"></script>
  </body>
</html>
