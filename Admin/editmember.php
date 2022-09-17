<?php

include 'Config.php';
session_start();

if (!isset($_SESSION['adminuser'])) {
   header("Location: Login.php");
}

$current_admin = $_SESSION['email'];
$adminfind = "SELECT * FROM staff WHERE email='$current_admin'";
$adminfindresult = mysqli_query($conn, $adminfind);
$adminfindrow = mysqli_fetch_assoc($adminfindresult);


$email = $_GET['email'];

$sql = "SELECT * FROM staff WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


if(isset($_POST['update_profile'])){
    if($adminfindrow['position'] == "admin"){
        $old_pass = $_POST['old_pass'];
        $prev_pass = $_POST['prev_pass'];
        $new_pass = $_POST['new_pass'];
        $confirm_pass = $_POST['confirm_pass'];
        $old_position = $_POST['old_position'];
        $old_email = $_POST['old_email'];
        $update_name = $_POST['update_name'];
        $update_email = $_POST['update_email'];
        $update_role = $_POST['update_role'];
        $update_position = $_POST['update_position'];

        
        $file = $_FILES['update_image'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        // echo $old_position;



        if($new_pass == null & $confirm_pass == null){

            $new_pass = $old_pass;
            $confirm_pass = $old_pass;
            // echo "<script> alert('Both Empty !!!'); </script>";
        }

        if($new_pass == null | $confirm_pass == null){
            echo "<script> alert('please enter new password and confirm password !!!'); </script>";
        }

        if($old_pass == $prev_pass){
            if($new_pass != $confirm_pass){
                echo "<script> alert('new password and confirm password not matched !!!'); </script>";
            } else {

                // try to delete row and insert new row

                if($fileerror == 0){

                    // only relative path changing most important most most imp
                    $destfile = '../Pages/Images/Team/'.$filename;
                    // echo "$destfile";
                    move_uploaded_file($filepath, $destfile);

                    $updatequerystaff = "UPDATE staff SET position='$update_position', role='$update_role', image='$destfile', membername='$update_name', password='$confirm_pass' WHERE email='$old_email'";
                    $updateresultstaff = mysqli_query($conn, $updatequerystaff);
    
                    $updatequeryteam = "UPDATE team SET role='$update_role', image='$destfile', name='$update_name' WHERE email='$old_email'";
                    $updateresultteam = mysqli_query($conn, $updatequeryteam);
    
                    if($updateresultstaff & $updateresultteam){
                        echo "<script> alert('Profile Updated Successfully'); </script>";
                        echo "<script> window.location.href='index.php'; </script>";
                    }
                } else {
                    echo "<script> alert('file not selected'); </script>";
                }

            }
        } else{
            echo "<script> alert('Please Enter Old Password Correctly.'); </script>";
        }
    } else {
        echo "<script> alert('Only Admins Can Edit Profile.'); </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Profile</title>

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
            <input type="hidden" name="old_email" value="<?php echo $row['email']; ?>" class="box">
            <span>Role :</span>
            <input type="text" name="update_role" value="<?php echo $row['role']; ?>" class="box">
            <span>Position :</span>
            <input type="text" name="update_position" value="<?php echo $row['position']; ?>" class="box">
            <input type="hidden" name="old_position" value="<?php echo $row['position']; ?>" class="box">
        </div>
        <div class="inputBox">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
            <input type="hidden" name="old_pass" value="<?php echo $row['password']; ?>">
            <span>old password :</span>
            <input type="password" name="prev_pass" placeholder="enter previous password" class="box" required>
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