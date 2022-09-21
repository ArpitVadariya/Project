<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "hairstudio";

$conn = mysqli_connect($server, $user, $pass, $database);
// session_start();
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$teamdisplay = "SELECT * FROM staff";
$result1 = mysqli_query($conn, $teamdisplay);

$servicedisplay = "SELECT * FROM services";

$usersdisplay = "SELECT * FROM userdata";
$userresult = mysqli_query($conn, $usersdisplay);

$commentdisplay = "SELECT * FROM testimonial";
$commentresult = mysqli_query($conn, $commentdisplay);

$appointmentsdisplay = "SELECT * FROM appointment";
$appointmentsresult = mysqli_query($conn, $appointmentsdisplay);

?>