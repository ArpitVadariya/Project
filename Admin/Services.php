<?php

  include 'Config.php';

  session_start();

  if (!isset($_SESSION['adminuser'])) {
      echo '<script> alert("Please Login"); </script>';
      echo '<script> window.location.href="ViewTeam-Copy.php"; </script>';
      header("Location: Login.php");
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Services</title>
    <?php include 'Links.php'; ?>
    <link rel="stylesheet" type="text/css" href="navstyle.css" />
  </head>
  <body>

      <header class="header" id="header">
        <nav>
          <div class="logo">
            <a href="index.php">
              <!-- <h1>HairStudio</h1> -->
              <img src="../Pages/Images/logo.svg" alt="" srcset="">
            </a>
          </div>
        <input type="checkbox" id="click" />
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>        
          <li><a href="users-Copy.php" class="nav-link">Users</a></li>
          <li><a href="Comments-Copy.php" class="nav-link">Comments</a></li>
          <li><a href="Services.php" class="nav-link">Services</a></li>
          <li><a href="AddService.php" class="nav-link">Add Services</a></li>
          <li><a href="Team.php" class="nav-link">Team</a></li>
          <!-- <li><a href="#" class="nav-link">Hi Arpit</a></li> -->
          <li><a href="profile.php" class="nav-link"><?php echo "Hi, " . $_SESSION['adminuser'] . ""; ?></a></li>
          <li><a href="Logout.php" class="nav-link">Logout</a></li>
        </ul>
      </nav>
      </header>


      <?php include 'ViewServices.php'; ?>
    
  </body>
</html>