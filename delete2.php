<?php

include_once 'connection.php';



if(isset($_GET['title'])){
  
    $title=$_GET['title'];
    $query1 = "UPDATE meal SET quantity='0', custom='' WHERE title='$title'";
    mysqli_query($connection,$query1);
    echo "success";
    //header('Location: cart.php');
    
}