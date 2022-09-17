<?php

include 'config.php';
session_start();
$adminuser = $_SESSION['adminuser'];
$imagepath = $_SESSION['imagepath'];
$email = $_SESSION['email'];

$sql = "SELECT * FROM staff WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   $row = mysqli_fetch_assoc($result);
   $adminuser = $row['membername'];
   $imagepath = $row['image'];
   $email = $row['email'];
   $position = $row['position'];
} else {
   echo "<script>alert('Woops! Something went Wrong.')</script>";
   echo '<script> window.location.href="Logout.php"; </script>';

}


if(!isset($adminuser)){
   echo '<script> alert("Please Login"); </script>';
   echo '<script> window.location.href="Logout.php"; </script>';
   // header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

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
      <?php echo '<img src="'.$row['image'].'">';  ?>
      <!-- <h3>Arpit</h3> -->
      <br>
      <h3>Name : <?php echo $row['membername']; ?></h3>
      <h3>E-mail : <?php echo $row['email']; ?></h3>
      <h3>Role : <?php echo $row['role']; ?></h3>
      <h3>Position : <?php echo $row['position']; ?></h3>
      <?php

         if($row['position'] == "admin"){
            ?>
               <a href="editmember.php?email=<?php echo $row['email']; ?>" class="btn">Edit Profile</a>
            <?php
         }

      ?>
      <a href="logout.php" class="delete-btn">logout</a>
      <p>new <a href="login.php">login</a></p>
      <?php
         if($row['position'] == "admin"){
            ?>
               <p>new <a href="AddTeam.php">Add New Member</a></p>
            <?php
         }
      ?>
   </div>

</div>

</body>
</html>