<?php 

  session_start();

  if (!isset($_SESSION['username'])) {
      header("Location: ../RegisterLogin/Login.php");
  }

?>



<header class="header" id="header">
  <nav>
    <div class="logo">
      <a href="index.php">
        <!-- <img src="Images/logo.svg" /> -->
        <h1>HairStudio</h1>
      </a>
    </div>
  <input type="checkbox" id="click" />
  <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
  </label>
  <ul>
    <li><a href="Services-Copy.php" class="nav-link">services</a></li>
    <li><a href="Testimonial-Copy.php" class="nav-link">Testimonial</a></li>
    <li><a href="About-Copy.php" class="nav-link">about</a></li>
    <li><a href="Package-Copy.php" class="nav-link">package</a></li>
    <li><a href="Profile.php" class="nav-link"><?php echo "Hi, " . $_SESSION['username'] . ""; ?></a></li>
    <!-- image print karava mate -->
    <!-- <li><a href="#" class="nav-link">
      <div class="testimonials-img">
          <img src="<?php echo $_SESSION['imagepath']; ?>" alt="">
      </div>
    </a></li> -->
    <li><a href="../RegisterLogin/Logout.php" class="nav-link">Logout</a></li>
  </ul>
</nav>
</header>