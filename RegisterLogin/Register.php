<?php 

include 'Config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$file = $_FILES['photo'];
	// $password = md5($_POST['password']);
	// $cpassword = md5($_POST['cpassword']);

	// print_r($file);

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM userdata WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			if($fileerror == 0){
				// only relative path changing most important most most imp
				$destfile = '../Pages/Images/UserImage/'.$filename;
				// echo "$destfile";
				move_uploaded_file($filepath, $destfile);

				// $insertquery = "INSERT INTO userdata (username, email, password, imagepath) VALUES ('$username', '$email', '$password', 'destfile')";
				// $result = mysqli_query($conn, $insertquery);

				$imginsert = "INSERT INTO userdata(username, email, password, imagepath) VALUES('$username', '$email', '$password', '$destfile')";
				$imgresult = mysqli_query($conn, $imginsert);
				if ($imgresult) {
					echo "<script>alert('Wow! User Registration Completed.')</script>";
					header("Location: Login.php");
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
				} else {
					echo "<script>alert('Woops! Something Wrong Went.')</script>";
				}
			} else {
				echo "<script>alert('Woops! Something Wrong Went in file.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form</title>
</head>
<body>
    <section class="container">
      <div class="login-container">
        <div class="form-container">
          <h1 class="opacity">REGISTER</h1>
			<form action="" method="POST" class="login-email" enctype="multipart/form-data">
				<div class="input-group">
				    <input type="text" placeholder="Username" name="username" value="" required>
                </div>
                <div class="input-group">
					<input type="email" placeholder="Email" name="email" value="" required>
				</div>
				<div class="input-group">
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
                </div>
                <div class="input-group">
                    <input type="file" name="photo" placeholder="image" value="" required>
                </div>
				<div class="input-group">
					<button name="submit" class="btn">Register</button>
				</div>
				<p class="login-register-text">Have an account? <a href="Login.php">Login Here</a>.</p>
			</form>
        </div>
      </div>
    </section>
</body>
</html>