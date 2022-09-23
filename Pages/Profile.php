<?php

include 'config.php';
session_start();
$username = $_SESSION['username'];
$imagepath = $_SESSION['imagepath'];
$email = $_SESSION['email'];

$sql = "SELECT * FROM userdata WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   $row = mysqli_fetch_assoc($result);
   $username = $_SESSION['username'];
   $imagepath = $_SESSION['imagepath'];
   $email = $_SESSION['email'];
} else {
   echo "<script>alert('Woops! Something went Wrong.')</script>";
   echo '<script> window.location.href="Logout.php"; </script>';
}


if(!isset($username)){
   echo '<script> alert("Please Login"); </script>';
   echo '<script> window.location.href="Logout.php"; </script>';
   // header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}


$appointmentsdisplay = "SELECT * FROM appointment WHERE email='$email'";
$appointmentsresult = mysqli_query($conn, $appointmentsdisplay);

// if ($appointmentsresult->num_rows > 0) {
//    $appointmentrow = mysqli_fetch_assoc($appointmentsresult);
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile Page</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="profile.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php echo '<img src="'.$row['imagepath'].'">';  ?>
      <!-- <h3>Arpit</h3> -->
      <br>
      <h3>Name : <?php echo $row['username']; ?></h3>
      <h3>E-mail : <?php echo $row['email']; ?></h3>
      <?php

      if ($appointmentsresult->num_rows > 0) {
         $appointmentrow = mysqli_fetch_assoc($appointmentsresult);
         if($appointmentrow['approved']){
            ?>
            <h3>Appointment : Approved</h3>
            <?php
         } else{
            ?>
            <h3>Appointment : Not Approved</h3>
            <a href="cancel.php?email=<?php echo $row['email']; ?>" class="delete-btn">Cancel Appointment</a>
            <?php
         }
      } else{
            ?>
            <h3>Appointment : No Appointment</h3>
            <?php
      }
      ?>
      <a href="editprofile.php?email=<?php echo $row['email']; ?>" class="btn">Edit Profile</a>
      <a href="index.php" class="delete-btn">go back</a>
      <a href="../RegisterLogin/logout.php" class="delete-btn">logout</a>
   </div>

</div>

</body>
</html>