<?php

include 'config.php';

// session_start();

$adminuser = $_SESSION['adminuser'];
$imagepath = $_SESSION['imagepath'];
$email = $_SESSION['email'];
$position = $_SESSION['position'];


$sql = "SELECT * FROM staff WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   $row = mysqli_fetch_assoc($result);
   $adminuser = $row['membername'];
   $imagepath = $row['image'];
   $email = $row['email'];
   $position = $row['position'];
} else {
   echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
   echo "<script>alert('Woops! .')</script>";
}

?>

<table class="table">
    <thead>
    <tr>
        <th>type</th>
        <th>service name</th>
        <th>image</th>
        <th>Edit</th>
        <?php
            if($position == "admin"){
                ?>
                    <th>Delete</th>
                <?php
            }
        ?>
    </tr>
    </thead>
    <tbody>
    <?php
        $teamresult = mysqli_query($conn, $teamdisplay);
        $teamrow = mysqli_fetch_array($teamresult);
        $serviceresult = mysqli_query($conn, $servicedisplay);
        while($servicerow = mysqli_fetch_array($serviceresult)){
            ?>
            <tr>
                <td><?php echo $servicerow['type']; ?></td>
                <td><?php echo $servicerow['service_name']; ?></td>
                <td><img src="<?php echo $servicerow['imagepath']; ?>" alt="" height="100px" width="100px"></td>
                <td><a href='editservice.php?service_name=<?php echo $servicerow['service_name']; ?>&image=<?php echo $servicerow['imagepath']; ?>'><button>Edit</button></a></td>
                <?php
                    if($position == "admin"){
                        ?>
                            <td><a href='deleteService.php?service_name=<?php echo $servicerow['service_name']; ?>&image=<?php echo $servicerow['imagepath']; ?>'><button>Delete</button></a></td>
                        <?php
                }
                ?>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>