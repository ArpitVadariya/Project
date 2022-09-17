<?php

include 'Config.php';
session_start();

if (!isset($_SESSION['adminuser'])) {
   header("Location: Login.php");
}
$email = $_SESSION['email'];

$sql = "SELECT * FROM staff WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_profile'])){
   $old_membername = $row['membername'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="profile.css">
</head>
<body>
   
<div class="update-profile">

   

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($row['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="'.$row['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>membername :</span>
            <input type="text" name="update_name" value="<?php echo $row['membername']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $row['email']; ?>" class="box">
            <span>Role :</span>
            <input type="text" name="update_role" value="<?php echo $row['role']; ?>" class="box">
            <span>Position :</span>
            <input type="text" name="update_position" value="<?php echo $row['position']; ?>" class="box">
        </div>
        <div class="inputBox">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
            <input type="hidden" name="old_pass" value="<?php echo $row['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="profile.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>