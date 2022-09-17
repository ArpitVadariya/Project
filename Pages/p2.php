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
    $newresult1 = mysqli_query($conn, $newquery);
    $newresult2 = mysqli_query($conn, $newquery);
    $newresult3 = mysqli_query($conn, $newquery);
    $newresult4 = mysqli_query($conn, $newquery);
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
    
    
    <div class="container-fluid py-5">
        <div class="package-title package">
            <h1>Promotional Packages</h1>
        </div>
        <div class="container py-5">
            <div class="row">
            <div class="col-lg-5" style="min-height: 500px">
                <div class="position-relative h-100">
                <img
                    class="position-absolute w-100 h-100"
                    src="Images/Package/package-img1.jpg"
                    style="object-fit: cover"
                />
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                <div class="owl-carousel pricing-carousel">
                    <div class="bg-white">
                    <div
                        class="d-flex align-items-center justify-content-between border-bottom border-primary p-4"
                    >
                        <h1 class="display-4 mb-0">
                        ₹4999
                        </h1>
                        <h5 class="text-primary text-uppercase m-0">Bronze</h5>
                    </div>
                    <div class="p-4">
                        <?php 
                            while($row1=mysqli_fetch_array($newresult1)){
                                if($row1['bronze']==1){
                                ?>
                                        <div class="item">
                                            <i class="far fa-check-square check-icon"></i>
                                            <p><?php echo $row1['Service_name']?></p>
                                        </div>
                                                
                                <?php
                                }
                                else{
                                ?>
                                        <div class="item">
                                            <i class="far fa-times-square x-icon"></i>
                                            <p class="not"><?php echo $row1['Service_name']?></span></p>
                                        </div>
                                <?php
                                }
                            }
                        ?>
                        <a href="" class="btn btn-primary my-2"> I want This </a>
                    </div>
                    </div>
                    <div class="bg-white">
                    <div
                        class="d-flex align-items-center justify-content-between border-bottom border-primary p-4"
                    >
                        <h1 class="display-4 mb-0">
                        ₹7999
                        </h1>
                        <h5 class="text-primary text-uppercase m-0">Silver</h5>
                    </div>
                    <div class="p-4">
                        <?php 
                            while($row2=mysqli_fetch_array($newresult2)){
                                if($row2['silver']==1){
                                ?>
                                        <div class="item">
                                            <i class="far fa-check-square check-icon"></i>
                                            <p><?php echo $row2['Service_name']?></p>
                                        </div>
                                                
                                <?php
                                }
                                else{
                                ?>
                                        <div class="item">
                                            <i class="far fa-times-square x-icon"></i>
                                            <p class="not"><?php echo $row2['Service_name']?></span></p>
                                        </div>
                                <?php
                                }
                            }
                        ?>
                        <a href="" class="btn btn-primary my-2"> I want This </a>
                    </div>
                    </div>
                    <div class="bg-white">
                        <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                            <h1 class="display-4 mb-0">
                            ₹12999
                            </h1>
                            <h5 class="text-primary text-uppercase m-0">Gold</h5>
                        </div>
                        <div class="p-4">
                            <?php 
                                while($row3=mysqli_fetch_array($newresult3)){
                                    if($row3['gold']==1){
                                    ?>
                                            <div class="item">
                                                <i class="far fa-check-square check-icon"></i>
                                                <p><?php echo $row3['Service_name']?></p>
                                            </div>
                                                    
                                    <?php
                                    }
                                    else{
                                    ?>
                                            <div class="item">
                                                <i class="far fa-times-square x-icon"></i>
                                                <p class="not"><?php echo $row3['Service_name']?></span></p>
                                            </div>
                                    <?php
                                    }
                                }
                            ?>
                            <a href="" class="btn btn-primary my-2"> I want This </a>
                        </div>
                    </div>
                    <div class="bg-white">
                        <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                            <h1 class="display-4 mb-0">
                            ₹19999
                            </h1>
                            <h5 class="text-primary text-uppercase m-0">Diamond</h5>
                        </div>
                        <div class="p-4">
                            <?php 
                                while($row4=mysqli_fetch_array($newresult4)){
                                    if($row4['diamond']==1){
                                    ?>
                                            <div class="item">
                                                <i class="far fa-check-square check-icon"></i>
                                                <p><?php echo $row4['Service_name']?></p>
                                            </div>
                                                    
                                    <?php
                                    }
                                    else{
                                    ?>
                                            <div class="item">
                                                <i class="far fa-times-square x-icon"></i>
                                                <p class="not"><?php echo $row4['Service_name']?></span></p>
                                            </div>
                                    <?php
                                    }
                                }
                            ?>
                            <a href="" class="btn btn-primary my-2"> I want This </a>
                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>































    

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
