<?php
    include '../RegisterLogin/Config.php';

    $query1 = "select * from services";
    // for women's service
    $serviceresult1 = mysqli_query($conn, $query1);
    // for men's service
    $serviceresult2 = mysqli_query($conn, $query1);
    // for spa service
    $serviceresult3 = mysqli_query($conn, $query1);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'Links.php'; ?>
  </head>
  <body>
    

    <!-- Service Start -->

    <div class="container-fluid px-0 py-5 my-5">
      <!-- Women's Services -->
      <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
          <h6
            class="d-inline-block bg-light text-primary text-uppercase py-1 px-2"
          >
            Our Service
          </h6>
          <h1>Women's Hairstyle & Beauty Services</h1>
        </div>
      </div>
      <div class="owl-carousel service-carousel">
        <!-- Service -->
        <?php 
              while($servicerow1 = mysqli_fetch_array($serviceresult1)){
                if($servicerow1['type']=='women'){
                  ?>
                    <div class="service-item position-relative">
                      <img class="img-fluid" src="<?php echo $servicerow1['imagepath']; ?>" alt="" />
                      <div class="service-text text-center">
                        <h4 class="text-white font-weight-medium px-3"><?php echo $servicerow1['service_name']; ?></h4>
                        <div class="w-100 bg-white text-center p-4">
                          <a class="btn btn-primary" href="">Make Order</a>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              }
        ?>
      </div>

      <!-- Men's Services -->
      <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6" style="padding-top: 50px">
          <h1>Men's Hairstyle & Beard</h1>
        </div>
      </div>
      <div class="owl-carousel service-carousel">
        <!-- Services -->
        <?php 
              while($servicerow2 = mysqli_fetch_array($serviceresult2)){
                if($servicerow2['type']=='men'){
                  ?>
                    <div class="service-item position-relative">
                      <img class="img-fluid" src="<?php echo $servicerow2['imagepath']; ?>" alt="" />
                      <div class="service-text text-center">
                        <h4 class="text-white font-weight-medium px-3"><?php echo $servicerow2['service_name']; ?></h4>
                        <div class="w-100 bg-white text-center p-4">
                          <a class="btn btn-primary" href="">Make Order</a>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              }
        ?>
      </div>

      <!-- Spa Services -->
      <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6" style="padding-top: 50px">
          <h1>Spa Services</h1>
        </div>
      </div>
      <div class="owl-carousel service-carousel">
        <!-- Services -->
        <?php 
            while($servicerow3 = mysqli_fetch_array($serviceresult3)){
              if($servicerow3['type']=='spa'){
                ?>
                  <div class="service-item position-relative">
                    <img class="img-fluid" src="<?php echo $servicerow3['imagepath']; ?>" alt="" />
                    <div class="service-text text-center">
                      <h4 class="text-white font-weight-medium px-3"><?php echo $servicerow3['service_name']; ?></h4>
                      <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="">Make Order</a>
                      </div>
                    </div>
                  </div>
                <?php
              }
            }
        ?>
      </div>
    </div>

    <!-- Service End -->

    <?php include 'JSFile.php'; ?>
  </body>
</html>
