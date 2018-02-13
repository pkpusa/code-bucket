<?php
   /* if(isset($_SESSION['email']) == ""){
        header("location: welcome.php");
    }
    else{*/
    session_start();
    echo"Welcome" .$_SESSION['email'];
    echo "<a href = 'logout.php'>logout</a>";
    //}

?>


