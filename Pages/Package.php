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
                            while($row1=mysqli_fetch_array($rsult1)){
                                if($row1['Service_bool']==1){
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
                            while($row2=mysqli_fetch_array($rsult2)){
                                if($row2['Service_bool']==1){
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
                                while($row3=mysqli_fetch_array($rsult3)){
                                    if($row3['Service_bool']==1){
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
                                while($row4=mysqli_fetch_array($rsult4)){
                                    if($row4['Service_bool']==1){
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