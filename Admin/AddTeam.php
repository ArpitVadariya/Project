<?php

    include 'Config.php';

    error_reporting(0);

    session_start();

    
    if (isset($_POST['submit'])) {

        if($_SESSION['position'] == "admin"){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $file = $_FILES['image'];
            $position = $_POST['position'];

            $filename = $file['name'];
            $filepath = $file['tmp_name'];
            $fileerror = $file['error'];

            $sql = "SELECT * FROM team WHERE email='$email'";
            $sql1 = "SELECT * FROM staff WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                if($fileerror == 0){
                    // only relative path changing most important most most imp
                    $destfile = '../Pages/Images/Team/'.$filename;
                    // echo "$destfile";
                    move_uploaded_file($filepath, $destfile);

                    $serviceinsert = "INSERT INTO team(name, email, role, image) VALUES('$name', '$email', '$role', '$destfile')";
                    // $serviceinsert1 = "INSERT INTO staff(membername, email, password, role, image, position) VALUES('$name', '$email', '$password', '$role', '$destfile', '$position')";
                    $serviceinsert1 = "INSERT INTO staff (membername, email, password, role, position, image) VALUES ('$name', '$email', '$password', '$role', '$position', '$destfile')";
                    // INSERT INTO staff (membername, email, password, role, position, image) VALUES ('$name', '$email', '@$password', '$role', '$position', '$destfile')


                    $serviceresult = mysqli_query($conn, $serviceinsert);
                    $serviceresult1 = mysqli_query($conn, $serviceinsert1);
                    if ($serviceresult && $serviceresult1) {
                        echo "<script>alert('Wow! Member Added.')</script>";
                        // header("Location: index.php");
                        echo '<script> window.location.href="index.php"; </script>';
                    } else {
                        echo "<script>alert('Woops! Something Wrong Went.')</script>";
                    }
                } else {
                    echo "<script>alert('Woops! Something Wrong Went in file.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Already Exists.')</script>";
            }
        } else {
                echo "<script>alert('only admin can add another member.')</script>";
        }
    }
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Add Member</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1 class="opacity">Add Member</h1>
    <section class="container">
        <div class="login-container">
            <div class="form-container">
			<form action="" method="POST" class="login-email" enctype="multipart/form-data">
				<div class="input-group">
				    <input type="text" placeholder="Enter Name" name="name" value="" required>
                </div>
				<div class="input-group">
				    <input type="email" placeholder="Enter email" name="email" value="" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" value="" required>
				</div>
				<div class="input-group">
				    <input type="text" placeholder="Enter Role" name="role" value="" required>
                </div>
                <div class="input-group">
                    <input type="file" name="image" value="" required>
                </div>
                <div class="input-group">
                    admin <input type="radio" name="position" value="admin" >
                    staffmember <input type="radio" name="position" value="staffmember" >
                </div>
				<div class="input-group">
					<button name="submit" class="btn">Add Member</button>
				</div>
			</form>
        </div>
      </div>
    </section>
</body>
</html>