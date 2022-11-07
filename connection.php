<?php

 $connection = mysqli_connect("localhost", "root", "", "saudichef");

    $error = mysqli_connect_error();
            
        if ($error != null)
        {
          echo "<p> Could not connect to the database. </p>";   
        } 
        ?>
        
        
