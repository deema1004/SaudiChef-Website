<?php

include_once 'connection.php';
session_start();

 if (!isset($_SESSION['id'])) {

    header("Location: Homepage.html");
}

 if(isset($_POST['add'])&&isset($_FILES['photo'])&&isset($_POST['Description'])&&isset($_POST['Ingredients'])
    &&isset($_POST['Recipe'])&&isset($_POST['price'])&&isset($_POST['c1'])&&isset($_POST['c2'])
         &&isset($_POST['c3'])&&isset($_POST['c4'])){
    
     $title = $_POST['name'];
     $des = $_POST['Description'];
     $ing = $_POST['Ingredients'];
     $rec = $_POST['Recipe'];
     $c1 = $_POST['c1'];
     $c2 = $_POST['c2'];
     $c3 = $_POST['c3'];
     $c4 = $_POST['c4'];
     $price = $_POST['price'];
    
     print_r($_FILES['photo']);
     
     $imgname = $_FILES['photo']['name'];
     $img_ex= pathinfo($imgname, PATHINFO_EXTENSION);
     
     $img_name = $_FILES['photo']['name'];
     $img_size = $_FILES['photo']['size'];
     $tmp_name = $_FILES['photo']['tmp_name'];
     $error = $_FILES['photo']['error'];

			//$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                       // echo $img_ex ;
			//$img_ex_lc = strtolower($img_ex);
                       // echo $img_ex_lc ;
			        echo $img_name;
				$img_upload_path = 'images/'.$img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                        
     
     
     
     
     
     
     
     
     echo "<img src='images/$img_name' style='width:250px; height: 200px;'> ";
     
     
     
     $sql = "INSERT INTO `meal`(`title`, `img_url`, `description`, `ingredients`, `recipe`, `c1`, `c2`, `c3`, `c4` ,`price`) VALUES"
     . "('$title','$img_upload_path','$des','$ing','$rec','$c1','$c2','$c3','$c4','$price')";
    
     if (mysqli_query($connection, $sql)) 
     echo "<p> New record created successfully </p>";
     
     header('Location: adminviewmeals.php');
     
 }
 

?>

