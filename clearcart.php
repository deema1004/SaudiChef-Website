<?php

include_once 'connection.php';

 $sql = "UPDATE meal SET quantity='0', custom='' ";

    if (mysqli_query($connection, $sql)){
    echo "Success";}
    ?>
    
 