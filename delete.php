<?php

include_once 'connection.php';

session_start();

 if (!isset($_SESSION['id'])) {

    header("Location: Homepage.html");
}

$t= $_GET['title'];

 $qurey = "DELETE FROM meal WHERE title = '$t'" ;
         
        $result = mysqli_query($connection, $qurey);
       
        
        header("Refresh:0; url='adminviewmeals.php'");