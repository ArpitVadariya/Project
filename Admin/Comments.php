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
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        while($commentrow = mysqli_fetch_array($commentresult)){
            ?>
            <tr>
                <td><?php echo $commentrow['username']; ?></td>
                <td><?php echo $commentrow['comment']; ?></td>
                <?php
                    if($commentrow['imagepath'] == null){
                        $defaultpath = "../Pages/Images/UserImage/default_user.png";
                        ?>
                            <td><img src="<?php echo $defaultpath; ?>" alt="" height="100px" width="100px"></td>
                        <?php
                    } else {
                        ?>
                            <td><img src="<?php echo $commentrow['imagepath']; ?>" alt="" height="100px" width="100px"></td>
                        <?php
                    }
                ?>
                <td><a href="deletecomment.php?comment=<?php echo $commentrow['comment']; ?>&username=<?php echo $commentrow['username']; ?>"><button>Delete</button></a></td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>