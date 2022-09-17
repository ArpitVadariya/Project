<!-- Start About Section -->

<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6 pb-5 pb-lg-0">
        <img
          class="img-fluid w-100"
          src="Images/About/about-img.jpg"
          alt=""
        />
      </div>
      <div class="col-lg-6">
        <h6
          class="d-inline-block text-primary text-uppercase bg-light py-1 px-2"
        >
          About Us
        </h6>
        <h1 class="mb-4">Best Hairstyle, Beauty & Skin Care Center</h1>
        <p class="pl-4 border-left border-primary">
          Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore
          sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet
          dolor sed sit et sed ipsum et kasd erat duo eos et erat
        </p>
        <div class="row pt-3">
          <div class="col-6">
            <div class="bg-light text-center p-4">
              <h3 class="display-4 text-primary" data-toggle="counter-up">
                10
              </h3>
              <h6 class="text-uppercase">Hair and Spa Specialist</h6>
            </div>
          </div>
          <div class="col-6">
            <div class="bg-light text-center p-4">
              <h6 class="display-4 text-primary" data-toggle="counter-up">
                999
              </h6>
              <h6 class="text-uppercase">and many more Happy Clients</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Team Start -->
<div class="container-fluid py-5">
  <div class="container pt-5">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6">
        <h6
          class="d-inline-block bg-light text-primary text-uppercase py-1 px-2"
        >
          Our Team
        </h6>
        <h1 class="mb-5">Hair, Beauty and Spa Specialist</h1>
      </div>
    </div>
    <div class="row">
          <?php
              while($teamrow = mysqli_fetch_array($teamresult)){
                ?>
                  <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                      <img class="img-fluid" src="<?php echo $teamrow['image']; ?>" alt="" />
                      <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                          <h5 class="text-white text-uppercase"><?php echo $teamrow['name']; ?></h5>
                          <p class="m-0"><?php echo $teamrow['role']; ?></p>
                        </div>
                        <div class="team-social bg-dark text-center">
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"
                            ><i class="fab fa-twitter"></i
                          ></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"
                            ><i class="fab fa-facebook-f"></i
                          ></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"
                            ><i class="fab fa-linkedin-in"></i
                          ></a>
                          <a class="btn btn-outline-primary btn-square" href="#"
                            ><i class="fab fa-instagram"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php
              }
          ?>
        </div>
  </div>
</div>
<!-- Team End -->

<!-- End About Section -->