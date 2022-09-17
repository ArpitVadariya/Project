<?php

include 'config.php';

// session_start();

if (!isset($_SESSION['adminuser'])) {
    header("Location: Login.php");
}



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
}

?>

<table class="table">
    <thead>
    <tr>
        <th>Member Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Position</th>
        <th>image</th>
        <?php
            if($position == "admin"){
                ?>
                    <th>Edit</th>
                    <th>Delete</th>
                <?php
            }
        ?>
    </tr>
    </thead>
    <tbody>
    <?php 
        $teamresult = mysqli_query($conn, $teamdisplay);

        while($teamrow = mysqli_fetch_array($teamresult)){
            ?>
            <tr>
                <td><?php echo $teamrow['membername']; ?></td>
                <td><?php echo $teamrow['email']; ?></td>
                <td><?php echo $teamrow['role']; ?></td>
                <td><?php echo $teamrow['position']; ?></td>
                <td><img src="<?php echo $teamrow['image']; ?>" alt="" height="100px" width="100px"></td>
                <?php
                    if($position == "admin"){
                        ?>
                            <td><a href='editmember.php?email=<?php echo $teamrow['email']; ?>&position=admin'><button>Edit</button></a></td>
                        <?php
                    if($teamrow['position'] == "admin"){
                        ?>
                            <td><a href='delete.php?email=<?php echo $teamrow['email']; ?>&position=admin'><button>Delete</button></a></td>
                        <?php
                    } else {
                        ?>
                            <td><a href='delete.php?email=<?php echo $teamrow['email']; ?>&position=staffmember'><button>Delete</button></a></td>
                        <?php
                    }
                    }
                ?>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>