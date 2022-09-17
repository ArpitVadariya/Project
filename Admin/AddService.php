<?php

    include 'Config.php';

    error_reporting(0);

    session_start();

    if (isset($_POST['submit'])) {

        // echo $_SESSION['position'];
        
        // if($_SESSION['position'] == "admin"){
            echo $_SESSION['position'];

                $servicename = $_POST['Service_name'];
                $type = $_POST['Service_type'];
                $file = $_FILES['Service_image'];

                $filename = $file['name'];
                $filepath = $file['tmp_name'];
                $fileerror = $file['error'];

                $sql = "SELECT * FROM services WHERE service_name='$service_name'";
                $result = mysqli_query($conn, $sql);
                if (!$result->num_rows > 0) {
                    if($fileerror == 0){
                        // only relative path changing most important most most imp
                        $destfile = '../Pages/Images/Services/'.$filename;
                        // echo "$destfile";
                        move_uploaded_file($filepath, $destfile);

                        $serviceinsert = "INSERT INTO services(type, service_name, imagepath) VALUES('$type', '$servicename', '$destfile')";
                        $serviceresult = mysqli_query($conn, $serviceinsert);
                        if ($serviceresult) {
                            echo "<script>alert('Wow! New Service Added.')</script>";
                            $type = "";
                            $servicename = "";
                            echo '<script> window.location.href="Services.php"; </script>';
                        } else {
                            echo "<script>alert('Woops! Something Wrong Went.')</script>";
                        }
                    } else {
                        echo "<script>alert('Woops! Something Wrong Went in file.')</script>";
                    }
                } else {
                    echo "<script>alert('Woops! Service Already Exists.')</script>";
                    echo '<script> window.location.href="Services.php"; </script>';
                }
            // } else {
            //     echo "<script>alert('only admin can add service.')</script>";
            // }
    }
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Add Service</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<section class="container">
      <div class="login-container">
        <div class="form-container">
          <h1 class="opacity">Add Service</h1>
			<form action="" method="POST" class="login-email" enctype="multipart/form-data">
				<div class="input-group">
				    <input type="text" placeholder="Service name" name="Service_name" value="" required>
                </div>
                <div class="input-group">
                    <input type="file" name="Service_image" value="" required>
                </div>
                <div class="input-group">
                    Men <input type="radio" name="Service_type" value="men" >
                    Women <input type="radio" name="Service_type" value="women" >
                    Spa <input type="radio" name="Service_type" value="spa" >
                </div>
				<div class="input-group">
					<button name="submit" class="btn">Add Service</button>
				</div>
			</form>
        </div>
      </div>
    </section>
</body>
</html>