<?php

        include 'Config.php';

        $comment = $_GET['comment'];
        $username = $_GET['username'];
        // echo $comment;
        // echo $username;



        $deletecommentquery = "DELETE FROM testimonial WHERE username='$username'&comment='$comment'";
        $deleteresult = mysqli_query($conn, $deletecommentquery);

        if($deleteresult){
            echo '<script>alert("Comment Deleted Successfully")</script>';
            echo '<script> window.location.href="index.php"; </script>';
            // header("Location: ViewTeam-Copy.php");
        }

?>