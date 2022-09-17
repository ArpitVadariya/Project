<?php

include 'Config.php';

// echo $_GET['service_name'];

$service_name = $_GET['service_name'];
$oldimagepath = $_GET['image'];

$sql = "SELECT * FROM services WHERE imagepath='$oldimagepath'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_service'])){

    $update_name = $_POST['update_name'];
    $update_type = $_POST['update_type'];

    $file = $_FILES['update_image'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];


    if($fileerror == 0){

        // only relative path changing most important most most imp
        $destfile = '../Pages/Images/Services/'.$filename;
        // echo "$destfile";
        move_uploaded_file($filepath, $destfile);

        $updatequeryservice = "UPDATE services SET type='$update_type', imagepath='$destfile', service_name='$update_name' WHERE imagepath='$oldimagepath'";
        $updateresultservice = mysqli_query($conn, $updatequeryservice);

        if($updateresultservice){
            echo "<script> alert('Service Updated Successfully'); </script>";
            echo "<script> window.location.href='Services.php'; </script>";
        }
    } else {
        echo "<script> alert('file not selected'); </script>";
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
            echo '<img src="'.$row['imagepath'].'">';
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>service rname :</span>
            <input type="text" name="update_name" value="<?php echo $row['service_name']; ?>" class="box">
            <span>Type :</span>
            <input type="text" name="update_type" value="<?php echo $row['type']; ?>" class="box">
        </div>
        <div class="inputBox">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_service" class="btn">
      <a href="Services.php" class="delete-btn">go back</a>
   </form>
</div>
</body>
</html>