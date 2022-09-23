<?php

  include 'Config.php';



?>


<table class="table">
    <thead>
    <tr>
        <!-- <th>id</th> -->
        <th>username</th>
        <th>email</th>
        <th>date</th>
        <th>service</th>
        <th>message</th>
        <th>gender</th>
        <th>Contact</th>
        <th>Approve</th>
        <th>Cancel</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        while($appointmentsrow = mysqli_fetch_array($appointmentsresult)){
            ?>
            <tr>
                <td><?php echo $appointmentsrow['name']; ?></td>
                <td><?php echo $appointmentsrow['email']; ?></td>
                <td><?php echo $appointmentsrow['date']; ?></td>
                <td><?php echo $appointmentsrow['service']; ?></td>
                <td><?php echo $appointmentsrow['message']; ?></td>
                <td><?php echo $appointmentsrow['gender']; ?></td>
                <td><?php echo $appointmentsrow['contactnumber']; ?></td>
                <?php
                    if($appointmentsrow['approved'] == 0){
                        ?>
                            <td><a href='approve.php?email=<?php echo $appointmentsrow['email']; ?>'><button>Approve</button></a></td>
                            <td> </td>
                            <?php
                    } else{
                        ?>
                        <td> Approved </td>
                        <td><a href='cancel.php?email=<?php echo $appointmentsrow['email']; ?>'><button>Cancel</button></a></td>
                        <?php
                    }
                ?>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>