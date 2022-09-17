<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "hairstudio";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}


    $query1 = "select * from bronze";
    $rsult1 = mysqli_query($conn, $query1);
    $query2 = "select * from silver";
    $rsult2 = mysqli_query($conn, $query2);
    $query3 = "select * from gold";
    $rsult3 = mysqli_query($conn, $query3);
    $query4 = "select * from diamond";
    $rsult4 = mysqli_query($conn, $query4);


    $query1 = "select * from services";
    // for women's service fetch from datbase
    $serviceresult1 = mysqli_query($conn, $query1);
    // for men's service fetch from datbase
    $serviceresult2 = mysqli_query($conn, $query1);
    // for spa service fetch from datbase
    $serviceresult3 = mysqli_query($conn, $query1);

    // for fetch team member data from database 
    $teamquery = "select * from team";
    $teamresult = mysqli_query($conn, $teamquery);

    // for fetch user review from database 
    $commentquery = "select * from testimonial";
    $commentresult = mysqli_query($conn, $commentquery);

?>