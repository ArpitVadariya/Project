<?php
    include '../RegisterLogin/Config.php';

    session_start();

    error_reporting(0);

    if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        $comment = $_POST['comment'];
        $imagepath = $_SESSION['imagepath'];

        if($comment != null){
          $commentinsert = "INSERT INTO testimonial(username, comment, imagepath) VALUES('$username', '$comment', '$imagepath')";
          $commentresult = mysqli_query($conn, $commentinsert);
          if ($commentresult) {
              echo "<script>alert('Wow! Comment Added.')</script>";
              $comment = "";
              header("Location: index.php");
          } else {
              echo "<script>alert('Woops! Something Wrong Went.')</script>";
          }
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include 'Links.php'; ?>
  </head>
  <title>Hair Studio</title>
  <body>
    <!-- Navigation Bar Start -->
    <header class="header" id="header">
      <?php include 'navbar.php'; ?>
    </header>
    <!-- Navigation Bar End -->
    <!-- Header End -->

    <!-- <form action="" method="POST" class="login-email">
        <br><br><br><br>
        <div class="input-group">
            <input type="text" placeholder="Add Review . . . . ." name="comment" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Add Comment</button>
        </div>
    </form> -->

    <!-- <form action="" method="POST" class="login-email">
      <br><br><br><br>
      <div class="input-group">
          <textarea name="comment" id="" cols="100" rows="10" placeholder="Add Review . . . . ." required></textarea>
      </div>
      <div class="input-group">
          <button name="submit" class="btn">Add Comment</button>
      </div>
    </form> -->
    
    <!-- Footer Section Start -->
      <?php include 'footer.php'; ?>
    <!-- Footer Section End -->
      
    <!-- javascript files start -->
      <?php include 'JSFile.php'; ?> 
    <!-- javascript files end -->
  </body>
</html>