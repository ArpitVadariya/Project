<?php 

include 'Config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: ../Pages/index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	// $password = md5($_POST['password']);

	$sql = "SELECT * FROM userdata WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['imagepath'] = $row['imagepath'];
		$_SESSION['email'] = $row['email'];
		echo "<script>alert('Login Successfull.')</script>";
		echo '<script> window.location.href="../Pages/index.php"; </script>';
		// header("Location: ../Pages/index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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

	<title>Login Form</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<section class="container">
      <div class="login-container">
        <div class="form-container">
          <h1 class="opacity">LOGIN</h1>
			<form action="" method="POST" class="login-email">
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				<div class="input-group">
					<button name="submit" class="btn">Login</button>
				</div>
				<p class="login-register-text">Don't have an account? <a href="Register.php">Register Here</a>.</p>
			</form>
        </div>
      </div>
    </section>
</body>
</html>