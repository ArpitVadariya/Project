<?php

include 'RegisterLogin/Config.php';

error_reporting(0);

// session_start();

if (isset($_POST['submit'])) {
	$Customer_name = $_POST['Customer_name'];
	$Customer_Email = $_POST['Customer_Email'];
	$messagebox = $_POST['messagebox'];
	$gender = $_POST['Gender'];
	$appointment_date = $_POST['appointment_date'];
	$service = $_POST['service'];
	$Customer_contact = $_POST['Customer_contact'];

	echo $Customer_name;
	echo $Customer_Email;
	echo $appointment_date;
	echo $service;
	echo $messagebox;
	echo $Gender;
	echo $Customer_contact;

	$book_appointmentquery = "INSERT INTO appointment(name, email, date, service, message, gender, contactnumber) VALUES('$Customer_name', '$Customer_Email', '$appointment_date', '$service', '$messagebox', '$gender', '$Customer_contact')";
	$book_appointmentresult = mysqli_query($conn, $book_appointmentquery);

	if ($book_appointmentresult) {
		echo "<script>alert('Wow! Your Appointment Booked.')</script>";
		echo "<script>alert('We will contact you if it will approved.')</script>";
		echo '<script> window.location.href="Pages/index.php"; </script>';
	} else {
		echo "<script>alert('Woops! Appointment not booked.')</script>";
	}
}



?>