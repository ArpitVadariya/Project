<?php

  include 'Config.php';



?>


<table class="table">
    <thead>
    <tr>
        <!-- <th>id</th> -->
        <th>username</th>
        <th>email</th>
        <th>image</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        while($userrow = mysqli_fetch_array($userresult)){
            ?>
            <tr>
                <!-- <td><?php echo $userrow['id']; ?></td> -->
                <td><?php echo $userrow['username']; ?></td>
                <td><?php echo $userrow['email']; ?></td>
                <?php
                    if($userrow['imagepath'] == null){
                        $defaultpath = "../Pages/Images/UserImage/default_user.png";
                        ?>
                            <td><img src="<?php echo $defaultpath; ?>" alt="" height="100px" width="100px"></td>
                        <?php
                    } else {
                        ?>
                            <td><img src="<?php echo $userrow['imagepath']; ?>" alt="" height="100px" width="100px"></td>
                        <?php
                    }
                ?>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>