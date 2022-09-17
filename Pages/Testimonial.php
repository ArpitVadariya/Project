<section class="testimonials">
  <div class="testimonials-content">
    <div class="testimonial-title">
      <h6
        class="d-inline-block text-primary text-uppercase bg-light py-1 px-2"
      >
        Testimonial
      </h6>
      <br />
      <span>see what our customer say</span>
    </div>
    <div class="testimonials-card">
      <div class="testimonials-item">
        <div class="testimonials-img">
          <img src="Images/Testimonial/t-img1.png" />
        </div>
        <div class="testimonials-box">
          <div class="testimonials-name">
            <h1>Natalie</h1>
          </div>
          <div class="testimonials-description">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Dolor earum culpa eius, libero reprehenderit maiores.
            </p>
          </div>
        </div>
      </div>
      <?php 
          while($commentrow = mysqli_fetch_array($commentresult)){
            if($commentrow['username'] != null){
              ?>
                <div class="testimonials-item">
                  <div class="testimonials-img">
                    <?php
                        if($commentrow['imagepath'] != null){
                          ?>
                          <img src="<?php echo $commentrow['imagepath']; ?>" />
                          <?php
                        } else{
                          ?>
                          <img src="../Pages/Images/UserImage/default_user.png" />
                          <?php
                        }
                    ?>
                  </div>
                  <div class="testimonials-box">
                    <div class="testimonials-name">
                      <h1><?php echo $commentrow['username']; ?></h1>
                    </div>
                    <div class="testimonials-description">
                      <p>
                        <?php echo $commentrow['comment']; ?>
                      </p>
                    </div>
                  </div>
                </div>
              <?php
            }
          }
      ?>
    </div>
    <div class="testimonial-card">
      <div class="testimonials-item">
        <div class="testimonials-box">
          <div class="testimonials-name">
            <h1>put your comment here,</h1>
          </div>
          <div class="testimonials-description">
            <form action="comment.php" method="POST" class="login-email">
              <div class="input-group">
                <!-- <input type="text" name="comment" placeholder="Add Comment . . . . ." style="line-height: 20rem; width: 25rem;"> -->
                  <textarea name="comment" id="" placeholder="Add Review . . . . ." rows="10" style="height: 10rem; width: 25rem;" required></textarea>
              </div>
              <div class="input-group">
                  <button name="submit" class="btn">Add Comment</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
